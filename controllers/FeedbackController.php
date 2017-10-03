<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\feedback\Feedback;
use app\components\SendMail;

class FeedbackController extends Controller
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

    public function actionFull()
    {
        $model = new Feedback();
        $model->scenario = 'full';

        if ($model->load(Yii::$app->request->post())) {
            $model->tour_date = Yii::$app->formatter->asDate($model->tour_date, "php:Y-m-d  H:i:s");
            $model->save();
            SendMail::send($model);
        }

        return $this->renderAjax('full', [
            'model' => $model,
        ]);

    }

    public function actionShort()
    {
        $model = new Feedback();
        $model->scenario = 'short';

        if ($model->load(Yii::$app->request->post())) {
            $model->save();
            SendMail::send($model);
        }

        return $this->renderAjax('short', [
            'model' => $model,
        ]);

    }
}
