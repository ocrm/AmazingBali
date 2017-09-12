<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\repair_brands\RepairBrands;
use app\models\repair_parts\RepairParts;
use app\models\Status;
use app\models\pages\Pages;
use yii\web\NotFoundHttpException;

class PartsController extends Controller
{
    /**
     * @inheritdoc
     */

    const PAGE_ID = 18;

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
        $model = RepairBrands::find()->where(['status_id' => Status::STATUS_ACTIVE])->all();

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
        $model = RepairParts::findOne($id);

        return $this->renderPartial('view',[
            'model' => $model
        ]);
    }
}
