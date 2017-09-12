<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\pages\Pages;
use app\models\Status;
use yii\web\NotFoundHttpException;
class SiteController extends Controller
{

    const PAGE_ID = 1;
    const ERROR_PAGE_ID = 6;

    
    
    public function actionIndex()
    {
        $page = Pages::findOne(self::PAGE_ID);
        if($page->status_id == Status::STATUS_INACTIVE){
            throw new NotFoundHttpException();
        }

        return $this->render('homepage', [
            'page' => $page
        ]);
    }

    public function actionError(){

        $page = Pages::findOne(self::ERROR_PAGE_ID);

        return $this->render('error', [
            'page' => $page
        ]);
    }
}
