<?php
namespace app\widgets\carousel;

use app\models\Status;
use app\models\widget\WidgetData;
use yii\base\Widget;
use app\models\carousel\Carousel;
use app\models\widget\Widgets;

class CarouselWidget extends Widget
{   
    private $name = "carousel";

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $model = Carousel::find()->where(['status_id' => Status::STATUS_ACTIVE])->orderBy('sort')->all();
        
        return $this->render('carousel',[
            'model' => $model,
            'widget' => Widgets::findOne(['name' => $this->name])
        ]);
    }
}