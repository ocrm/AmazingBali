<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\tours\ToursPhoto */

$this->title = 'Новая фотография';
$this->params['breadcrumbs'][] = ['label' => 'Туры', 'url' => ['/admin/products']];
$this->params['breadcrumbs'][] = ['label' => $model->tours->title, 'url' => ['/admin/tours/update', 'id' =>  $model->tours->id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tours-photo-create">
    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
