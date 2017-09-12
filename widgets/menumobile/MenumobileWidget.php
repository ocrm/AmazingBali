<?php
namespace app\widgets\menumobile;

use yii\base\Widget;
use app\models\Category;

class MenumobileWidget extends Widget
{


    public function init()
    {
        parent::init();
        
    }

    public function run()
    {
        return $this->render('menumobile',[
            'roots' => Category::find()->roots()->all(),
        ]);
    }
}