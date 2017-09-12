<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\projects\Projects */

$this->title = 'Редактирование проекта: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Проекты', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="projects-update">



    <?= $this->render('_form', [
        'model' => $model,
        'slug' => $slug
    ]) ?>

</div>
