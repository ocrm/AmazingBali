<?php

namespace app\controllers;

use app\models\map\Map;
use Yii;
use yii\web\Controller;
use app\models\Status;
use app\models\pages\Pages;
use app\models\personal\Personal;
use yii\web\NotFoundHttpException;

class AboutController extends Controller
{

    /**
     * @inheritdoc
     */
    const PAGE_ID = 3;

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
        $page = Pages::findOne(self::PAGE_ID);
        if($page->status_id == Status::STATUS_INACTIVE){
            throw new NotFoundHttpException();
        }
        
        return $this->render('index', [
            'page' => $page,
            'personal' => Personal::find()->orderBy(['sort' => SORT_ASC])->all()
        ]);
    }
}
