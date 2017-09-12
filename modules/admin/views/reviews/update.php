<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\reviews\Reviews */

$this->title = 'Редактирование отзыва: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Отзывы', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="reviews-update">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
