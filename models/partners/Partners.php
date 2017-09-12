<?php

namespace app\models\partners;

use Yii;
use app\models\Status;
use mongosoft\file\UploadImageBehavior;
use himiklab\sortablegrid\SortableGridBehavior;
/**
 * This is the model class for table "partners".
 *
 * @property integer $id
 * @property string $title
 * @property string $imageFile
 * @property integer $status_id
 *
 * @property Status $status
 */
class Partners extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'partners';
    }

    function behaviors()
    {
        return [
            [
                'class' => UploadImageBehavior::className(),
                'attribute' => 'imageFile',
                'scenarios' => ['create', 'update'],
                'path' => '@webroot/upload/partners',
                'url' => '@web/upload/partners',
                'thumbs' => [
                    'thumb' => ['width' => 100, 'quality' => 90],
                ],
            ],

            'sort' => [
                'class' => SortableGridBehavior::className(),
                'sortableAttribute' => 'sortOrder'
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['status_id'], 'integer'],
            [['title', 'url',], 'string', 'max' => 255],
            ['url', 'url'],
            [['status_id'], 'exist', 'skipOnError' => true, 'targetClass' => Status::className(), 'targetAttribute' => ['status_id' => 'id']],
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg', 'on' => ['create', 'update']],
            [['sortOrder'], 'safe']
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
            'imageFile' => 'Изображение',
            'status_id' => 'Статус',
            'url' => 'Ссылка'
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
