<?php

namespace app\models\tours;

use Yii;
use app\models\Status;

/**
 * This is the model class for table "tours_price".
 *
 * @property integer $id
 * @property integer $tour_id
 * @property string $title
 * @property string $price
 * @property string $description
 * @property integer $top
 * @property string $text
 *
 * @property Tours $tour
 */
class ToursPrice extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    
    public $boolArr = [
        0 => 'Нет',
        1 => 'Да'
    ];

    public static function tableName()
    {
        return 'tours_price';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tour_id', 'top', 'status_id', 'sort'], 'integer'],
            [['price'], 'number'],
            [['text'], 'string'],
            [['title', 'description'], 'string', 'max' => 255],
            [['tour_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tours::className(), 'targetAttribute' => ['tour_id' => 'id']],

            ['title', 'default', 'value' => 'Заголовок'],
            ['description', 'default', 'value' => 'Описание'],
            ['price', 'default', 'value' => 0],
            ['text', 'default', 'value' => '<ul><li>Новый элемент</li></ul>'],
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
            'title' => 'Название',
            'price' => 'Цена',
            'description' => 'Описание',
            'top' => 'Хит',
            'text' => 'Преимущества',
            'status_id' => 'Статус',
            'sort' => 'Сортировка'
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
