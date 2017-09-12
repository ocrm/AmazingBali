<?php

namespace app\models\tours;

use Yii;
use app\models\Status;
use liyunfang\file\UploadImageBehavior;

/**
 * This is the model class for table "tours_photo".
 *
 * @property integer $id
 * @property string $photo
 * @property string $title
 * @property integer $tour_id
 * @property integer $status_id
 *
 * @property Tours $tour
 * @property Status $status
 */
class ToursPhoto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tours_photo';
    }

    function behaviors()
    {
        return [
            [
                'class' => UploadImageBehavior::className(),
                'attributes' => [
                    [
                        'attribute' => 'photo',
                        'path' => '@webroot/upload/tours/photo',
                        'url' => '@web/upload/tours/photo',
                        'scenarios' => ['create', 'update'],
                        'thumbs' => [
                            'thumb' => ['width' => 370, 'quality' => 90],
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
            [['tour_id', 'status_id', 'sort'], 'integer'],
            [['title'], 'string', 'max' => 255],
            [['tour_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tours::className(), 'targetAttribute' => ['tour_id' => 'id']],
            [['status_id'], 'exist', 'skipOnError' => true, 'targetClass' => Status::className(), 'targetAttribute' => ['status_id' => 'id']],
            [['photo'], 'file', 'maxFiles' => 1, 'skipOnEmpty' => true, 'extensions' => 'png, jpg', 'on' => ['create', 'update']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'photo' => 'Фотография',
            'title' => 'Название',
            'tour_id' => 'Тур',
            'status_id' => 'Статус',
            'sort' => 'Порядок'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTours()
    {
        return $this->hasOne(Tours::className(), ['id' => 'tour_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(Status::className(), ['id' => 'status_id']);
    }
}
