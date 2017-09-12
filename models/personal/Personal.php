<?php

namespace app\models\personal;

use Yii;
use liyunfang\file\UploadImageBehavior;
/**
 * This is the model class for table "personal".
 *
 * @property integer $id
 * @property string $title
 * @property string $position
 * @property string $description
 * @property string $photo
 */
class Personal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'personal';
    }

    function behaviors()
    {
        return [
            [
                'class' => UploadImageBehavior::className(),
                'attributes' => [
                    [
                        'attribute' => 'photo',
                        'path' => '@webroot/upload/personal/',
                        'url' => '@web/upload/personal',
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
            [['sort'], 'integer'],
            [['title', 'position', 'description', 'photo'], 'string', 'max' => 255],
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
            'title' => 'Имя',
            'position' => 'Должность',
            'description' => 'Описание',
            'photo' => 'Фото',
            'sort' => 'Сортировка'
        ];
    }
}
