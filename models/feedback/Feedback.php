<?php

namespace app\models\feedback;

use Yii;

/**
 * This is the model class for table "feedback".
 *
 * @property integer $id
 * @property string $city
 * @property string $phone
 * @property string $email
 * @property string $name
 * @property string $text
 * @property integer $type
 * @property string $subject
 * @property integer $status
 */
class Feedback extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    
    const STATUS_OLD = 0;
    const STATUS_NEW = 1;

    public static function tableName()
    {
        return 'feedback';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'phone', 'tour_date'], 'required'],
            [['text'], 'string'],
            [['status'], 'integer'],
            [['phone', 'email', 'name', 'subject'], 'string', 'max' => 255],
        ];
    }
    

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'phone' => 'Телефон',
            'email' => 'E-mail',
            'name' => 'ФИО',
            'text' => 'Текст сообщения',
            'status' => 'Статус',
            'tour_date' => 'Дата тура',
            'date' => 'Дата'
        ];
    }
}
