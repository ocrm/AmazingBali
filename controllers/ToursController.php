<?php

namespace app\controllers;

use app\models\destination\Destination;
use app\models\feedback\Feedback;
use app\models\tours\Tours;
use app\models\tours\ToursType;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\models\Status;
use yii\web\NotFoundHttpException;
use app\models\pages\Pages;
use yii\data\Pagination;
use app\models\tours\ToursFilter;

class ToursController extends Controller
{
    /**
     * @inheritdoc
     */

    const PAGE_ID = 2;
    const VIEW_PAGE_ID = 8;

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

    public function actionIndex($type_id = null)
    {
        $filter = new ToursFilter();
        
        if($type_id){
            
            $query = Tours::find()->where('FIND_IN_SET("'.$type_id.'",`tours`.`type_id`)')->andWhere(['status_id' => Status::STATUS_ACTIVE]);
            
        }else{
            
            $query = $filter->filter(Yii::$app->request->get());
            
        }
        
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 50]);
        $model = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        $page = Pages::findOne(self::PAGE_ID);
        if($page->status_id == Status::STATUS_INACTIVE){
            throw new NotFoundHttpException();
        }

        return $this->render('index', [
            'model' => $model,
            'pages' => $pages,
            'page' => $page,
            'destination' => Destination::find()->orderBy(['title' => SORT_ASC])->all(),
            'toursType' => ToursType::find()->orderBy(['title' => SORT_ASC])->all(),
            'rangeMin' => Tours::find()->select('MIN(new_price) as min')->asArray()->one(),
            'rangeMax' => Tours::find()->select('MAX(new_price) as max')->asArray()->one()
        ]);
    }
    
    public function actionView($slug)
    {
        $model = Tours::findOne(['slug' => $slug]);

        if($model->status_id == Status::STATUS_INACTIVE){
            throw new NotFoundHttpException();
        }

        $next = Tours::find()->where(['>', 'id', $model->id])->one();

        if(!$next){
            $next = Tours::find()->where('id = (Select MIN(id) FROM `tours`)')->one();
        }

        $prev = Tours::find()->where(['<', 'id', $model->id])->one();

        if(!$prev){
            $prev = Tours::find()->where('id = (Select MAX(id) FROM `tours`)')->one();
        }

        return $this->render('view',[
            'model' => $model,
            'next' => $next,
            'prev' => $prev,
            'page' => Pages::findOne(self::VIEW_PAGE_ID),
            'bookNow' => new Feedback()
        ]);
    }

    public function actionModal($id, $type){
        $model = Tours::findOne($id);

        return $this->renderPartial('modal',[
            'model' => $model,
            'type' => $type
        ]);
    }
}
