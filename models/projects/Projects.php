<?php

namespace app\models\projects;

use Yii;
use app\models\Slugs;
use app\models\Status;
use liyunfang\file\UploadImageBehavior;
use yii\imagine\Image;


/**
 * This is the model class for table "projects".
 *
 * @property integer $id
 * @property string $meta_title
 * @property string $meta_keywords
 * @property string $meta_description
 * @property string $data
 * @property string $preview_img
 * @property string $title
 * @property integer $slug_id
 * @property string $photo_1
 * @property string $photo_2
 * @property string $photo_3
 * @property string $photo_4
 * @property integer $status
 *
 * @property Slugs $slug
 */
class Projects extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'projects';
    }

    function behaviors()
    {
        return [
            [
                'class' => UploadImageBehavior::className(),
                'attributes' => [
                    [
                        'attribute' => 'preview_img',
                        'path' => '@webroot/upload/projects',
                        'url' => '@web/upload/projects',
                        'scenarios' => ['create', 'update'],
                        'thumbs' => [
                            'thumb' => ['width' => 100, 'quality' => 90],
                        ],
                    ],
                    [
                        'attribute' => 'photo_1',
                        'path' => '@webroot/upload/projects',
                        'url' => '@web/upload/projects',
                        'scenarios' => ['create', 'update'],
                        'thumbs' => [
                            'thumb' => ['width' => 100, 'quality' => 90],
                        ],
                    ],
                    [
                        'attribute' => 'photo_2',
                        'path' => '@webroot/upload/projects',
                        'url' => '@web/upload/projects',
                        'scenarios' => ['create', 'update'],
                        'thumbs' => [
                            'thumb' => ['width' => 100, 'quality' => 90],
                        ],
                    ],
                    [
                        'attribute' => 'photo_3',
                        'path' => '@webroot/upload/projects',
                        'url' => '@web/upload/projects',
                        'scenarios' => ['create', 'update'],
                        'thumbs' => [
                            'thumb' => ['width' => 100, 'quality' => 90],
                        ],
                    ],
                    [
                        'attribute' => 'photo_4',
                        'path' => '@webroot/upload/projects',
                        'url' => '@web/upload/projects',
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
            [['title', 'type_id'], 'required'],
            [['data'], 'string'],
            [['slug_id', 'status_id'], 'integer'],
            [['meta_title', 'meta_keywords', 'meta_description', 'title'], 'string', 'max' => 255],
            [['status_id'], 'exist', 'skipOnError' => true, 'targetClass' => Status::className(), 'targetAttribute' => ['status_id' => 'id']],
            //[['slug_id'], 'exist', 'skipOnError' => true, 'targetClass' => Slugs::className(), 'targetAttribute' => ['slug_id' => 'id']],
            [['preview_img', 'photo_1', 'photo_2', 'photo_3', 'photo_4'], 'file', 'maxFiles' => 4, 'skipOnEmpty' => true, 'extensions' => 'png, jpg', 'on' => ['create', 'update']],
            [['photo_1', 'photo_2', 'photo_3', 'photo_4'], 'image', 'minWidth' => 870, 'maxWidth' => 870,'minHeight' => 530, 'maxHeight' => 530,],
            [['preview_img'], 'image', 'minWidth' => 400, 'maxWidth' => 400,'minHeight' => 400, 'maxHeight' => 400,]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'meta_title' => 'meta_title',
            'meta_keywords' => 'meta_keywords',
            'meta_description' => 'meta_description',
            'data' => 'Описание',
            'preview_img' => 'Изображение',
            'title' => 'Заголовок',
            'slug_id' => 'Адрес',
            'photo_1' => 'Фотография №1',
            'photo_2' => 'Фотография №2',
            'photo_3' => 'Фотография №3',
            'photo_4' => 'Фотография №4',
            'status_id' => 'Статус',
            'type_id' => 'Категория проекта'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSlug()
    {
        return $this->hasOne(Slugs::className(), ['id' => 'slug_id']);
    }

    public function getStatus()
    {
        return $this->hasOne(Status::className(), ['id' => 'status_id']);
    }

    public function getRoute(){
        return "/{$this->tableName()}/view/{$this->id}";
    }

    public function afterSave()
    {
        ($this->photo_1) ? Image::watermark($this->getUploadPath('photo_1'), "@webroot/upload/overlay.png", [0,0])->save() : false;
        ($this->photo_2) ? Image::watermark($this->getUploadPath('photo_2'), "@webroot/upload/overlay.png", [0,0])->save() : false;
        ($this->photo_3) ? Image::watermark($this->getUploadPath('photo_3'), "@webroot/upload/overlay.png", [0,0])->save() : false;
        ($this->photo_4) ? Image::watermark($this->getUploadPath('photo_4'), "@webroot/upload/overlay.png", [0,0])->save() : false;
    }
}
