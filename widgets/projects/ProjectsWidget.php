<?php
namespace app\widgets\projects;

use app\models\projects\Projects;
use app\models\Status;
use yii\base\Widget;
use app\models\projects\ProjectsType;

class ProjectsWidget extends Widget
{
    public $count;

    public function init()
    {
        parent::init();
        
    }

    public function run()
    {

        if($this->count === null){

            $model= Projects::find()->where(['status_id' => Status::STATUS_ACTIVE])->all();

        } else {

            $model= Projects::find()->where(['status_id' => Status::STATUS_ACTIVE])->limit($this->count)->all();

        }

        return $this->render('projects',[
            'model' => $model,
            'type' => ProjectsType::find()->orderBy('title')->all()
        ]);
    }
}