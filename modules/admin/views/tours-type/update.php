<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\tours\ToursType */

$this->title = 'Редактирование категории: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Категории туров', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="tours-type-update">
    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
