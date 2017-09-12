<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\selection\TaskType */

$this->title = 'Редактирование задачи: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Задачи оборудования', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="task-type-update">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
