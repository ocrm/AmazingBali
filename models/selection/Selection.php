<?php

namespace app\models\selection;

use Yii;
use yii\base\Model;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "floors_type".
 *
 * @property integer $id
 * @property string $title
 * @property integer $sort
 */
class Selection extends Model
{
    public $floors_type;
    public $object_type;
    public $task_type;

    public function rules()
    {
        return [
            [['object_type', 'floors_type', 'task_type'], 'integer'],
        ];
    }
}
