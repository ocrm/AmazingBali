<?php

namespace app\controllers;

use app\models\Status;
use Yii;
use yii\web\Controller;
use app\models\reviews\Reviews;
use app\models\pages\Pages;
use yii\web\NotFoundHttpException;

class ReviewsController extends Controller
{
    /**
     * @inheritdoc
     */
    const PAGE_ID = 11;

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
        $model = Reviews::findAll(['status_id' => Status::STATUS_ACTIVE]);

        $page = Pages::findOne(self::PAGE_ID);
        if($page->status_id == Status::STATUS_INACTIVE){
            throw new NotFoundHttpException();
        }
        
        return $this->render('index',[
            'model' => $model,
            'page' => $page
        ]);
    }
    
    public function actionView($id)
    {
        return $this->render('view',[
            'model' => Reviews::findOne($id)
        ]);
    }
}
