<?php

namespace app\modules\admin\controllers;

use app\models\widget\Widgets;
use app\models\widget\WidgetData;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;



class WidgetsController extends Controller
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

    public function actionEdit($id, $attribute){
        $model = WidgetData::findOne($id);
        $model->{$attribute} = Yii::$app->request->post('data');
        $model->update();
    }
}
