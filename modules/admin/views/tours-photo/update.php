<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\tours\ToursPhoto */

$this->title = 'Редактирование фотографии тура: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Туры', 'url' => ['/admin/tours']];
$this->params['breadcrumbs'][] = ['label' => $model->tours->title, 'url' => ['/admin/tours/update', 'id' =>  $model->tours->id]];
$this->params['breadcrumbs'][] = 'Редактирование фотографии';
?>
<div class="tours-photo-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
