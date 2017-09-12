<?php
namespace app\widgets\reviews;

use app\models\Status;
use yii\base\Widget;
use app\models\reviews\Reviews;
use app\models\widget\Widgets;

class ReviewsWidget extends Widget
{
    public $count;
    private $name = 'reviews';

    public function init()
    {
        parent::init();
        if ($this->count === null) {
            $this->count = 4;
        }
    }

    public function run()
    {
        $model = Reviews::find()->where(['status_id' => Status::STATUS_ACTIVE])->orderBy(['id' => SORT_DESC])->limit($this->count)->all();
        return $this->render('reviews',[
            'model' => $model,
            'widget' => Widgets::findOne(['name' => $this->name])
        ]);
    }
}