<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 *
 * @property integer $id
 * @property string $alias
 * @property string $route
 */
class Slugs extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    
    public $dirtySlug;
    
    public static function tableName()
    {
        return 'slugs';
    }

    public function behaviors()
    {
        return [
            'slug' => [
                'class' => 'Zelenin\yii\behaviors\Slug',
                'slugAttribute' => 'alias',
                'attribute' => 'dirtySlug',
                // optional params
                'ensureUnique' => true,
                'replacement' => '-',
                'lowercase' => true,
                'immutable' => false,
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
            [['alias'], 'required', 'on' => 'update'],
            [['alias'], 'string', 'max' => 190],
            [['route'], 'string', 'max' => 255],
            [['alias'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'alias' => 'Адрес',
            'route' => 'Route',
        ];
    }
}