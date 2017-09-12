<?php

namespace app\models\news;

use Yii;
use app\models\Status;
use liyunfang\file\UploadImageBehavior;
use Zelenin\yii\behaviors\Slug;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property string $meta_title
 * @property string $meta_keywords
 * @property string $meta_description
 * @property string $data
 * @property string $preview_img
 * @property string $date
 * @property string $title
 * @property integer $slug_id
 * @property integer $status_id
 *
 * @property Status $status
 * @property Slugs $slug
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    function behaviors()
    {
        return [
            [
                'class' => UploadImageBehavior::className(),
                'attributes' => [
                    [
                        'attribute' => 'preview_img',
                        'path' => '@webroot/upload/news',
                        'url' => '@web/upload/news',
                        'scenarios' => ['create', 'update'],
                        'thumbs' => [
                            'thumb' => ['height' => 270, 'quality' => 90],
                        ],
                    ],
                ],
            ],
            
            'slug' => [
                'class' => 'Zelenin\yii\behaviors\Slug',
                'slugAttribute' => 'slug',
                'attribute' => 'title',
                // optional params
                'ensureUnique' => true,
                'replacement' => '-',
                'lowercase' => true,
                'immutable' => true,
                // If intl extension is enabled, see http://userguide.icu-project.org/transforms/general.
                'transliterateOptions' => 'Russian-Latin/BGN; Any-Latin; Latin-ASCII; NFD; [:Nonspacing Mark:] Remove; NFC;'
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'date'], 'required'],
            [['data', 'prev_text'], 'string'],
            [['date'], 'safe'],
            [['status_id'], 'integer'],
            [['meta_title', 'meta_keywords', 'meta_description', 'preview_img', 'title', 'slug'], 'string', 'max' => 255],
            [['status_id'], 'exist', 'skipOnError' => true, 'targetClass' => Status::className(), 'targetAttribute' => ['status_id' => 'id']],
            [['preview_img'], 'file', 'maxFiles' => 1, 'skipOnEmpty' => true, 'extensions' => 'png, jpg', 'on' => ['create', 'update']],
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
            'data' => 'Содержимое',
            'preview_img' => 'Изображение',
            'date' => 'Дата',
            'title' => 'Заголовок',
            'slug' => 'Адрес',
            'status_id' => 'Статус',
            'prev_text' => 'Текст предпросмотра'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(Status::className(), ['id' => 'status_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    
    public function getRoute(){
        return "/{$this->tableName()}/view/{$this->id}";
    }
}
