<?php

namespace app\models\tours;

use app\models\reviews\Reviews;
use Yii;
use app\models\Status;
use app\models\tours\ToursPhoto;
use liyunfang\file\UploadImageBehavior;
use liyunfang\file\UploadBehavior;
use app\models\Category;
use app\models\tours\ToursPrice;
use app\models\destination\Destination;
use yii\helpers\ArrayHelper;
/**
 * This is the model class for table "tours".
 *
 * @property integer $id
 * @property string $meta_title
 * @property string $meta_keywords
 * @property string $meta_description
 * @property string $title
 * @property string $brand
 * @property integer $status_id
 * @property string $request_blank
 * @property string $booklet
 * @property string $blueprint
 * @property string $description_short
 * @property string $description_long
 * @property string $specifications
 * @property string $options
 * @property string $video
 */
class Tours extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    
    public $boolArr = [
        0 => 'Нет',
        1 => 'Да'
    ];

    public $durationTypeArr = [
        0 => 'Дни',
        1 => 'Часы'
    ];

    public static function tableName()
    {
        return 'tours';
    }
    
    function behaviors()
    {
        return [
            [
                'class' => UploadImageBehavior::className(),
                'attributes' => [
                    [
                        'attribute' => 'tour_img',
                        'path' => '@webroot/upload/tours/',
                        'url' => '@web/upload/tours/',
                        'scenarios' => ['create', 'update'],
                        'thumbs' => [
                            'thumb' => ['height' => 370, 'quality' => 90],
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
            [['status_id', 'type_id', 'sort', 'stars', 'popular', 'hit', 'sale', 'duration_type', 'duration_time', 'destination_id'], 'integer'],
            [['new_price', 'old_price'], 'double'],
            [['long_description', 'program_description'], 'string'],
            [['meta_title', 'meta_keywords', 'meta_description', 'title', 'short_description', 'short_program', 'slug', 'duration', 'places'], 'string', 'max' => 255],
            [['tour_img'], 'file', 'maxFiles' => 1, 'skipOnEmpty' => true, 'extensions' => 'png, jpg', 'on' => ['create', 'update']],

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'meta_title' => 'Meta Title',
            'meta_keywords' => 'Meta Keywords',
            'meta_description' => 'Meta Description',
            'title' => 'Заголовок',
            'status_id' => 'Статус',
            'type_id' => 'Категория',
            'sort' => 'Порядок',
            'stars' => 'Звезды',
            'duration' => 'Продолжительность(текстовое)',
            'short_description' => 'Короткое описание',
            'long_description' => 'Полное описание',
            'places' => 'Доступные места',
            'destination_id' => 'Пункт назначения',
            'new_price' => 'Новая цена',
            'old_price' => 'Старая цена',
            'tour_img' => 'Изображение тура',
            'short_program' => 'Программа',
            'slug' => 'Ссылка',
            'popular' => 'Популярный',
            'popularLabel' => 'Популярный',
            'duration_type' => 'Тип продолжительности',
            'duration_time' => 'Продолжительность(числовое)',
            'program_description' => 'Описание программы'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPopularLabel()
    {
        return $this->boolArr[$this->popular];
    }

    public function getStatus()
    {
        return $this->hasOne(Status::className(), ['id' => 'status_id']);
    }

    public function getPhotos()
    {
        return $this->hasMany(ToursPhoto::className(), ['tour_id' => 'id'])->orderBy(['sort' => SORT_ASC]);
    }

    public function getActivePhotos()
    {
        return $this->hasMany(ToursPhoto::className(), ['tour_id' => 'id'])->where(['status_id' => Status::STATUS_ACTIVE])->orderBy(['sort' => SORT_ASC]);
    }

    public function getType()
    {
        return $this->hasOne(ToursType::className(), ['id' => 'type_id']);
    }

    public function getProgram()
    {
        return $this->hasMany(ToursProgram::className(), ['tour_id' => 'id'])->orderBy(['sort' => SORT_ASC]);
    }

    public function getActiveProgram()
    {
        return $this->hasMany(ToursProgram::className(), ['tour_id' => 'id'])->where(['status_id' => Status::STATUS_ACTIVE])->orderBy(['sort' => SORT_ASC]);
    }

    public function getPrices()
    {
        return $this->hasMany(ToursPrice::className(), ['tour_id' => 'id'])->orderBy(['sort' => SORT_ASC]);
    }

    public function getActivePrices(){
        return $this->hasMany(ToursPrice::className(), ['tour_id' => 'id'])->where(['status_id' => Status::STATUS_ACTIVE])->orderBy(['sort' => SORT_ASC]);
    }

    public function getReviews()
    {
        return $this->hasMany(Reviews::className(), ['tour_id' => 'id'])->orderBy(['sort' => SORT_ASC]);
    }

    public function getActiveReviews(){
        return $this->hasMany(Reviews::className(), ['tour_id' => 'id'])->where(['status_id' => Status::STATUS_ACTIVE])->orderBy(['sort' => SORT_ASC]);
    }

    public function getDestination()
    {
        return $this->hasOne(Destination::className(), ['id' => 'destination_id'])->orderBy(['title' => SORT_ASC]);
    }

    public static function toursArray(){
        return ArrayHelper::map(self::find()->orderBy(['title' => SORT_ASC])->asArray()->all(), 'id', 'title');
    }
}
