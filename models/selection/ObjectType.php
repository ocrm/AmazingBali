<?php

namespace app\models\selection;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "object_type".
 *
 * @property integer $id
 * @property string $title
 * @property integer $sort
 */
class ObjectType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'object_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sort'], 'integer'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название объекта',
            'sort' => 'Сортировка',
        ];
    }

    public static function typeArray(){
        return ArrayHelper::map(self::find()->orderBy(['sort' => SORT_ASC])->asArray(false)->all(), 'id', 'title');
    }
}
