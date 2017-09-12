<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\carousel\Carousel */

$this->title = 'Редактирование слайда: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Карусель', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="carousel-update">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
