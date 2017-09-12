<?php

namespace app\models\pages;

use Yii;
use app\models\Status;
use app\models\pages\PageParts;
use yii\helpers\ArrayHelper;
use liyunfang\file\UploadImageBehavior;

/**
 * This is the model class for table "pages".
 *
 * @property integer $id
 * @property string $title
 * @property string $meta_keywords
 * @property string $meta_description
 * @property string $data
 * @property integer $status_id
 * @property integer $lock
 * @property string $alias
 *
 * @property Status $status
 */
class Pages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pages';
    }

    function behaviors()
    {
        return [
            [
                'class' => UploadImageBehavior::className(),
                'attributes' => [
                    [
                        'attribute' => 'image',
                        'path' => '@webroot/upload/pages',
                        'url' => '@web/upload/pages',
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
            [['status_id', 'lock'], 'integer'],
            [['data'], 'string'],
            [['title', 'meta_keywords', 'meta_description', 'template'], 'string', 'max' => 255],
            [['status_id'], 'exist', 'skipOnError' => true, 'targetClass' => Status::className(), 'targetAttribute' => ['status_id' => 'id']],
            ['template', 'default', 'value' => 'blank'],
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
            'title' => 'Заголовок',
            'meta_keywords' => 'meta_keywords',
            'meta_description' => 'meta_description',
            'data' => 'Содержимое',
            'status_id' => 'Статус',
            'lock' => 'Блокировка',
            'template' => 'Шаблон',
            'image' => 'Изображение'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    

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
    public function getParts()
    {
        return $this->hasMany(PageParts::className(), ['page_id' => 'id']);
    }

    public static function pagesArray(){
        return ArrayHelper::map(self::find()->orderBy('title')->asArray(false)->all(), 'id', 'title');
    }
}
