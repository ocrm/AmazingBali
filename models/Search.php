<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Search extends Model
{
    public $text;

    public function formName()
    {
        return '';
    }

    function attributeLabels()
    {
        return [
            'text' => 'Текст поиска'
        ];
    }
}
