<?php

namespace app\controllers;

use app\models\products\Products;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\models\Category;
use app\models\selection\Selection;
class CatalogController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }
    
    
    public function actionView($id)
    {
        $model = Category::findOne($id);

        return $this->render('view',[
            'model' => $model
        ]);
    }

    public function actionSelection()
    {
        $selection = new Selection();

        if($selection->load(Yii::$app->request->post())){

            $model = Products::find();

            if($selection->object_type){
                $model->andWhere('FIND_IN_SET("'.$selection->object_type.'",`products`.`object_id`)');
            }

            if($selection->task_type){
                $model->andWhere('FIND_IN_SET("'.$selection->task_type.'",`products`.`task_id`)');
            }

            if($selection->floors_type){
                $model->andWhere('FIND_IN_SET("'.$selection->floors_type.'",`products`.`floors_id`)');
            }

            $model = $model->all();

            return $this->render('selection',[
                'model' => $model
            ]);
        }
    }
}
