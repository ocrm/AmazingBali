<?php
namespace app\widgets\partners;

use app\models\partners\Partners;
use app\models\Status;
use yii\base\Widget;
use app\models\social\Social;

class PartnersWidget extends Widget
{
    public $message;

    public function init()
    {

    }

    public function run()
    {
        $model = Partners::findAll(['status_id' => Status::STATUS_ACTIVE]);
        return $this->render('partners',[
            'model' => $model
        ]);
    }
}