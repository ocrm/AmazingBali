<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\partners\Partners */

$this->title = 'Редактирование партнера: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Партнеры', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="partners-update">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
