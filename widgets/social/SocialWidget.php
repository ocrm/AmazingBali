<?php
namespace app\widgets\social;

use app\models\Status;
use yii\base\Widget;
use app\models\social\Social;

class SocialWidget extends Widget
{

    public function init()
    {

    }

    public function run()
    {
        $model = Social::findAll(['status_id' => Status::STATUS_ACTIVE]);
        return $this->render('social',[
            'model' => $model
        ]);
    }
}