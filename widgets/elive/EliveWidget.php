<?php
namespace app\widgets\elive;

use yii\base\Widget;

class EliveWidget extends Widget
{

    public $controller;
    public $attribute;
    public $model;
    public $container = 'div';
    public $className;

    public function init()
    {
        
    }

    public function run()
    {
        return $this->render('elive',[
            'controller' => $this->controller,
            'attribute' => $this->attribute,
            'model' => $this->model,
            'container' => $this->container,
            'className' => $this->className,
        ]);
    }
}