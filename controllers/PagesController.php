<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Status;
use yii\data\Pagination;
use app\models\pages\Pages;
use yii\web\NotFoundHttpException;
use app\models\pages\PageParts;
class PagesController extends Controller
{

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
    
    public function actionIndex()
    {   
        
    }
    
    public function actionView($id)
    {
        $model = Pages::findOne($id);
        
        if($model->status_id == Status::STATUS_INACTIVE){
            throw new NotFoundHttpException();
        }
        
        return $this->render($model->template,[
            'page' => $model
        ]);
    }
}
