<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\news\News;
use app\models\Status;
use yii\data\Pagination;
use app\models\pages\Pages;
use yii\web\NotFoundHttpException;

class NewsController extends Controller
{
    /**
     * @inheritdoc
     */
    const PAGE_ID = 4;

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }
    
    public function actionIndex()
    {   
        $query = News::find()->where(['status_id' => Status::STATUS_ACTIVE])->orderBy(['date' => SORT_DESC]);
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 10]);
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
            'page' => $page
        ]);
    }
    
    public function actionView($slug)
    {
        $model = News::findOne(['slug' => $slug]);

        return $this->render('view',[
            'model' => $model,
            'lastNews' => News::find()->orderBy(['date' => SORT_DESC])->limit(4)->all()
        ]);
    }
}
