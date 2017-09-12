<?php

namespace app\models\widget;

use Yii;
use app\models\widget\WidgetData;
use yii\db\ActiveRecord;
/**
 * This is the model class for table "widget".
 *
 * @property integer $id
 * @property string $name
 *
 * @property WidgetData[] $widgetDatas
 */
class Widgets extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'widget';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
            [['name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWidgetData()
    {
        return $this->hasMany(WidgetData::className(), ['widget_id' => 'id']);
    }
}
