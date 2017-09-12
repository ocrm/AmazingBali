<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\selection\TaskType */

$this->title = 'Новая задача';
$this->params['breadcrumbs'][] = ['label' => 'Задачи оборудования', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-type-create">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
