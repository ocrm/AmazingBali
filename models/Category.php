<?php
namespace app\models;

use Yii;
use app\models\products\Products;
class Category extends \kartik\tree\models\Tree
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * Override isDisabled method if you need as shown in the
     * example below. You can override similarly other methods
     * like isActive, isMovable etc.
     */

    public function getProducts()
    {
        return $this->hasMany(Products::className(), ['category_id' => 'id'])->orderBy(['sort' => SORT_ASC]);
    }

    public function rules()
    {
        $rules = parent::rules();
        $rules[] = [
            ['page_id', 'description', 'title', 'meta_description', 'meta_keywords', 'description'], 'safe',
        ];
        return $rules;
    }

    public function attributeLabels()
    {
        $labels = parent::attributeLabels();
        $labels2 = [
            'description' => 'Описание',
            'page_id' => 'Страница'
        ];
        return array_merge($labels, $labels2);
    }
  
}