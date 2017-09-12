<?php
namespace app\widgets\selection;

use app\models\Status;
use yii\base\Widget;
use app\models\selection\Selection;
class SelectionWidget extends Widget
{

    public function init()
    {
        
    }

    public function run()
    {
        $model = new Selection();
        
        return $this->render('selection',[
            'model' => $model,
        ]);
    }
}