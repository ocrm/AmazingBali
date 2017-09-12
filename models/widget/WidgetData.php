<?php

namespace app\models\widget;

use Yii;
use app\models\widget\Widgets;
/**
 * This is the model class for table "widget_data".
 *
 * @property integer $id
 * @property integer $widget_id
 * @property string $data
 *
 * @property Widgets $widget
 */
class WidgetData extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'widget_data';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['widget_id'], 'integer'],
            [['data'], 'string'],
            [['widget_id'], 'exist', 'skipOnError' => true, 'targetClass' => Widgets::className(), 'targetAttribute' => ['widget_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'widget_id' => 'Индификатор',
            'data' => 'Содержимое',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWidget()
    {
        return $this->hasOne(Widgets::className(), ['id' => 'widget_id']);
    }
}
