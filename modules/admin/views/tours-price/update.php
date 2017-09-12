<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\tours\ToursPrice */

$this->title = 'Редактирование цены тура: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Туры', 'url' => ['/admin/tours']];
$this->params['breadcrumbs'][] = ['label' => $model->tour->title, 'url' => ['/admin/tours/update', 'id' =>  $model->tour->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="tours-price-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
