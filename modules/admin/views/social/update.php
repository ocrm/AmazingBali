<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\social\Social */

$this->title = 'Редактирование социальной сети: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Социальные сети', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="social-update">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
