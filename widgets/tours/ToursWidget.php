<?php
namespace app\widgets\tours;

use app\models\Status;
use yii\base\Widget;
use app\models\tours\Tours;
use app\models\widget\Widgets;

class ToursWidget extends Widget
{
    public $count;
    private $name = "tours";

    public function init()
    {
        parent::init();
        
    }

    public function run()
    {

        if($this->count === null){

            $model = Tours::find()->where(['status_id' => Status::STATUS_ACTIVE, 'popular' => 1])->all();

        } else {

            $model = Tours::find()->where(['status_id' => Status::STATUS_ACTIVE, 'popular' => 1])->limit($this->count)->all();

        }

        return $this->render('tours',[
            'model' => $model,
            'widget' => Widgets::findOne(['name' => $this->name])
        ]);
    }
}