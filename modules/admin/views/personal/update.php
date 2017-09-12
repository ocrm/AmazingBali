<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\personal\Personal */

$this->title = 'Редактирование сотрудника: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Сотрудники', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="personal-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
