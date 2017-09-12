<?php

namespace app\models\projects;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "projects_type".
 *
 * @property integer $id
 * @property string $title
 *
 * @property Projects[] $projects
 */
class ProjectsType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'projects_type';
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjects()
    {
        return $this->hasMany(Projects::className(), ['type_id' => 'id']);
    }

    public static function typeArray(){
        return ArrayHelper::map(self::find()->asArray(false)->all(), 'id', 'title');
    }
}
