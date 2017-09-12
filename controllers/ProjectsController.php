<?php

namespace app\controllers;

use app\models\projects\Projects;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\models\pages\Pages;
class ProjectsController extends Controller
{
    /**
     * @inheritdoc
     */
    const PAGE_ID = 17;
    
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
        return $this->render('index',[
            'page' => Pages::findOne(self::PAGE_ID)
        ]);
    }
    
    public function actionView($id)
    {
        return $this->renderPartial('view',[
            'model' => Projects::findOne($id)
        ]);
    }
}
