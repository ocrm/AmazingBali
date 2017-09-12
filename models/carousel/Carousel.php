<?php

namespace app\models\carousel;

use Yii;
use app\models\Status;
use liyunfang\file\UploadImageBehavior;
use liyunfang\file\UploadBehavior;
/**
 * This is the model class for table "carousel".
 *
 * @property integer $id
 * @property string $title
 * @property string $image
 * @property string $video
 * @property integer $status_id
 *
 * @property Status $status
 */
class Carousel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'carousel';
    }

    function behaviors()
    {
        return [
            [
                'class' => UploadImageBehavior::className(),
                'attributes' => [
                    [
                        'attribute' => 'image',
                        'path' => '@webroot/upload/carousel',
                        'url' => '@web/upload/carousel',
                        'scenarios' => ['create', 'update'],
                        'thumbs' => [
                            'thumb' => ['width' => 100, 'quality' => 90],
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
            [['status_id', 'sort'], 'integer'],
            [['title'], 'string', 'max' => 255],
            [['status_id'], 'exist', 'skipOnError' => true, 'targetClass' => Status::className(), 'targetAttribute' => ['status_id' => 'id']],
            [['image'], 'file', 'maxFiles' => 1, 'skipOnEmpty' => true, 'extensions' => 'png, jpg', 'on' => ['create', 'update']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название',
            'image' => 'Изображение',
            'status_id' => 'Статус',
            'sort' => 'Сортировка'
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
