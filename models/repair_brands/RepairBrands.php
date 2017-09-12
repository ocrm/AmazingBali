<?php

namespace app\models\repair_brands;

use Yii;
use app\models\Status;
use app\models\repair_parts\RepairParts;
use liyunfang\file\UploadImageBehavior;

/**
 * This is the model class for table "repair_brands".
 *
 * @property integer $id
 * @property string $brand_name
 * @property string $image
 * @property string $description
 * @property integer $status_id
 *
 * @property Status $status
 * @property RepairParts[] $repairParts
 */
class RepairBrands extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'repair_brands';
    }

    function behaviors()
    {
        return [
            [
                'class' => UploadImageBehavior::className(),
                'attributes' => [
                    [
                        'attribute' => 'image',
                        'path' => '@webroot/upload/parts_brand',
                        'url' => '@web/upload/parts_brand',
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
            [['description'], 'string'],
            [['status_id'], 'integer'],
            [['brand_name'], 'string', 'max' => 255],
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
            'brand_name' => 'Название',
            'image' => 'Изображение',
            'description' => 'Описание',
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
    public function getRepairParts()
    {
        return $this->hasMany(RepairParts::className(), ['brand_id' => 'id'])->where(['status_id' => Status::STATUS_ACTIVE]);
    }
}
