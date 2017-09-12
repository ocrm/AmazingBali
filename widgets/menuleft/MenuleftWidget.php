<?php
namespace app\widgets\menuleft;

use yii\base\Widget;
use app\models\Category;

class MenuleftWidget extends Widget
{


    public function init()
    {
        parent::init();
        
    }

    public function run()
    {
        return $this->render('menuleft',[
            'roots' => Category::find()->roots()->all(),
        ]);
    }
}