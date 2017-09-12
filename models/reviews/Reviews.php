<?php

namespace app\models\reviews;

use Yii;
use app\models\Status;
use liyunfang\file\UploadImageBehavior;
use liyunfang\file\UploadBehavior;
use app\models\tours\Tours;

class Reviews extends \yii\db\ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reviews';
    }

    function behaviors()
    {
        return [
            [
                'class' => UploadImageBehavior::className(),
                'attributes' => [
                    [
                        'attribute' => 'tour_img',
                        'path' => '@webroot/upload/reviews/tour_img',
                        'url' => '@web/upload/reviews/tour_img',
                        'scenarios' => ['create', 'update'],
                        'thumbs' => [
                            'thumb' => ['width' => 100, 'quality' => 90],
                        ],
                    ],
                    [
                        'attribute' => 'client_img',
                        'path' => '@webroot/upload/reviews/client_img',
                        'url' => '@web/upload/reviews/client_img',
                        'scenarios' => ['create', 'update'],
                        'thumbs' => [
                            'thumb' => ['width' => 100, 'quality' => 100],
                        ],
                    ],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['short_text', 'long_text'], 'string'],
            [['status_id', 'tour_id'], 'integer'],
            [['name', 'position', 'tour_name', 'cost'], 'string', 'max' => 255],
            [['status_id'], 'exist', 'skipOnError' => true, 'targetClass' => Status::className(), 'targetAttribute' => ['status_id' => 'id']],
            [['tour_img'], 'file', 'maxFiles' => 1, 'skipOnEmpty' => true, 'extensions' => 'png, jpg', 'on' => ['create', 'update']],
            [['client_img'], 'file', 'maxFiles' => 1, 'skipOnEmpty' => true, 'extensions' => 'png, jpg', 'on' => ['create', 'update']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tour_name' => 'Название тура',
            'tour_img' => 'Изображение тура',
            'client_img' => 'Изображение клиента',
            'short_text' => 'Текст отзыва короткий',
            'long_text' => 'Текст отзыва полный',
            'name' => 'Имя',
            'position' => 'Должность',
            'status_id' => 'Статус',
            'cost' => 'Стоимость',
            'tour_id' => 'Тур'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(Status::className(), ['id' => 'status_id']);
    }

    public function getTours()
    {
        return $this->hasOne(Tours::className(), ['id' => 'tours_id']);
    }
}
