<?php

namespace app\modules\admin\controllers;

use app\models\Category;
use Yii;
use app\models\selection\TaskType;
use app\models\selection\TaskTypeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TaskTypeController implements the CRUD actions for TaskType model.
 */
class CategoryController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all TaskType models.
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index', [

        ]);
    }

    public function actionEdit($id, $attribute){
        $model = Category::findOne($id);
        $model->{$attribute} = Yii::$app->request->post('data');
        $model->update();
    }
}
