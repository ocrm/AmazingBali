<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\tours\Products */

$this->title = 'Редактирование тура: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Туры', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="tours-update">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
