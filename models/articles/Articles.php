<?php

namespace app\models\articles;

use Yii;
use app\models\Status;
use Zelenin\yii\behaviors\Slug;

/**
 * This is the model class for table "articles".
 *
 * @property integer $id
 * @property string $meta_title
 * @property string $meta_keywords
 * @property string $meta_description
 * @property string $data
 * @property string $preview_img
 * @property string $date
 * @property string $title
 * @property integer $status_id
 * @property Status $status
 * @property Slugs $slug
 */
class Articles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'articles';
    }

    public function behaviors()
    {
        return [
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
            [['meta_title', 'meta_keywords', 'meta_description', 'title', 'slug'], 'string', 'max' => 255],
            [['status_id'], 'exist', 'skipOnError' => true, 'targetClass' => Status::className(), 'targetAttribute' => ['status_id' => 'id']],
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
