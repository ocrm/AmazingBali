<?php

namespace app\models\map;

use Yii;
use app\models\Status;

/**
 * This is the model class for table "map".
 *
 * @property integer $id
 * @property string $city
 * @property double $x
 * @property double $y
 * @property double $lat
 * @property double $lng
 * @property string $text
 * @property integer $status_id
 *
 * @property Status $status
 */
class Map extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'map';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['city', 'x', 'y', 'lat', 'lng', 'zoom'], 'required'],
            [['x', 'y', 'lat', 'lng'], 'number'],
            [['status_id', 'zoom'], 'integer'],
            [['city', 'text'], 'string', 'max' => 255],
            [['status_id'], 'exist', 'skipOnError' => true, 'targetClass' => Status::className(), 'targetAttribute' => ['status_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'city' => 'Город',
            'x' => 'Положение по оси X в процентах',
            'y' => 'Положение по оси Y в процентах',
            'lat' => 'Широта',
            'lng' => 'Долгота',
            'text' => 'Текст балуна',
            'zoom' => 'Увеличение',
            'status_id' => 'Статус',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(Status::className(), ['id' => 'status_id']);
    }
}
