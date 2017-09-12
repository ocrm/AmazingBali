<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\carousel\Carousel */

$this->title = 'Новый слайд';
$this->params['breadcrumbs'][] = ['label' => 'Карусель', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carousel-create">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
