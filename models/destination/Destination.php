<?php

namespace app\models\destination;

use Yii;
use app\models\tours\Tours;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "destination".
 *
 * @property integer $id
 * @property string $title
 *
 * @property Tours[] $tours
 */
class Destination extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'destination';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
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
            'title' => 'Пункт',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTours()
    {
        return $this->hasMany(Tours::className(), ['destination_id' => 'id']);
    }

    public static function destinationArray(){
        return ArrayHelper::map(self::find()->orderBy(['title' => SORT_ASC])->asArray(false)->all(), 'id', 'title');
    }
}
