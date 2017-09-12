<?php

namespace app\models\repair_parts;

use Yii;
use app\models\Status;
use app\models\repair_brands\RepairBrands;
use liyunfang\file\UploadImageBehavior;

/**
 * This is the model class for table "repair_parts".
 *
 * @property integer $id
 * @property string $title
 * @property integer $brand_id
 * @property string $article
 * @property string $photo
 * @property integer $status_id
 *
 * @property Status $status
 * @property RepairBrands $brand
 */
class RepairParts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'repair_parts';
    }

    function behaviors()
    {
        return [
            [
                'class' => UploadImageBehavior::className(),
                'attributes' => [
                    [
                        'attribute' => 'photo',
                        'path' => '@webroot/upload/parts',
                        'url' => '@web/upload/parts',
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
            [['brand_id', 'status_id'], 'integer'],
            [['title', 'article'], 'string', 'max' => 255],
            [['status_id'], 'exist', 'skipOnError' => true, 'targetClass' => Status::className(), 'targetAttribute' => ['status_id' => 'id']],
            [['brand_id'], 'exist', 'skipOnError' => true, 'targetClass' => RepairBrands::className(), 'targetAttribute' => ['brand_id' => 'id']],
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
            'title' => 'Название',
            'brand_id' => 'Брэнд',
            'article' => 'Артикул',
            'photo' => 'Изображение',
            'status_id' => 'Статус',
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
    public function getBrand()
    {
        return $this->hasOne(RepairBrands::className(), ['id' => 'brand_id']);
    }
}
