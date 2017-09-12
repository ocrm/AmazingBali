<?php

namespace app\models\tours;

use Yii;
use app\models\Status;
/**
 * This is the model class for table "tour_program".
 *
 * @property integer $id
 * @property integer $tour_id
 * @property string $days
 * @property string $location
 * @property string $description
 *
 * @property Tours $tour
 */
class ToursProgram extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tour_program';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tour_id', 'status_id', 'sort'], 'integer'],
            [['description'], 'string'],
            [['days', 'location', 'day_hour'], 'string', 'max' => 255],
            [['tour_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tours::className(), 'targetAttribute' => ['tour_id' => 'id']],

            ['description', 'default', 'value' => 'Описание'],
            ['days', 'default', 'value' => '0-0'],
            ['location', 'default', 'value' => 'Места'],
            ['day_hour', 'default', 'value' => 'Дни-часы'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tour_id' => 'Тур',
            'days' => 'Дни',
            'location' => 'Места',
            'description' => 'Описание',
            'status_id' => 'Статус',
            'sort' => 'Сортировка',
            'day_hour' => 'Дни - часы'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTour()
    {
        return $this->hasOne(Tours::className(), ['id' => 'tour_id']);
    }

    public function getStatus()
    {
        return $this->hasOne(Status::className(), ['id' => 'status_id']);
    }
}
