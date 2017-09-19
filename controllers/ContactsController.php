<?php

namespace app\controllers;

use app\models\map\Map;
use Yii;
use yii\web\Controller;
use app\models\Status;
use app\models\pages\Pages;
use yii\web\NotFoundHttpException;
use app\models\feedback\Feedback;
class ContactsController extends Controller
{

    /**
     * @inheritdoc
     */
    const PAGE_ID = 5;

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
        $model = new Feedback();
        $model->scenario = 'contacts';
        $page = Pages::findOne(self::PAGE_ID);
        if($page->status_id == Status::STATUS_INACTIVE){
            throw new NotFoundHttpException();
        }

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->render('index', [
                'page' => $page,
                'model' => $model,
                'msg' => 'Ваше сообщение отправлено'
            ]);
        }
        
        return $this->render('index', [
            'page' => $page,
            'model' => $model,
        ]);
    }
}
