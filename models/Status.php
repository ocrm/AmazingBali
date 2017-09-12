<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "status".
 *
 * @property integer $id
 * @property string $label
 */
class Status extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;

    public static function tableName()
    {
        return 'status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'label'], 'required'],
            [['id'], 'integer'],
            [['label'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'label' => 'Статус',
        ];
    }

    public static function statusArray(){
        return ArrayHelper::map(self::find()->orderBy('sort')->asArray(false)->all(), 'id', 'label');
    }
}
