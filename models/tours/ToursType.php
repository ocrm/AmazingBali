<?php

namespace app\models\tours;

use app\models\Status;
use Yii;
use yii\helpers\ArrayHelper;
/**
 * This is the model class for table "tours_type".
 *
 * @property integer $id
 * @property string $title
 */
class ToursType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tours_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название категории',
        ];
    }

    public static function typeArray(){
        return ArrayHelper::map(self::find()->orderBy(['title' => SORT_ASC])->asArray(false)->all(), 'id', 'title');
    }

    public function getTours()
    {
        return $this->hasMany(Tours::className(), ['type_id' => 'id']);
    }

    public function getToursCount()
    {
        return $this->hasMany(Tours::className(), ['type_id' => 'id'])->where(['status_id' => Status::STATUS_ACTIVE])->count();
    }
}
