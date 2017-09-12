<?php
namespace app\widgets\news;

use app\models\Status;
use yii\base\Widget;
use app\models\news\News;

class NewsWidget extends Widget
{
    public $newsCount;

    public function init()
    {
        parent::init();
        if ($this->newsCount === null) {
            $this->newsCount = 4;
        }
    }

    public function run()
    {
        $model = News::find()->where(['status_id' => Status::STATUS_ACTIVE])->orderBy(['date' => SORT_DESC])->limit($this->newsCount)->all();
        return $this->render('news',[
            'model' => $model
        ]);
    }
}