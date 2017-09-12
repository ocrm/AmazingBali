<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\projects\ProjectsType */

$this->title = 'Редактирование категории: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Категории проектов', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="projects-type-update">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
