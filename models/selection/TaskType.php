<?php

namespace app\models\selection;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "task_type".
 *
 * @property integer $id
 * @property string $title
 * @property integer $sort
 */
class TaskType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'task_type';
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
            'title' => 'Задача оборудования',
            'sort' => 'Сортировка',
        ];
    }

    public static function typeArray(){
        return ArrayHelper::map(self::find()->orderBy(['sort' => SORT_ASC])->asArray(false)->all(), 'id', 'title');
    }
}
