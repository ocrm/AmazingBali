<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\map\Map */

$this->title = 'Редактировать представительство: ' . $model->city;
$this->params['breadcrumbs'][] = ['label' => 'Представительства', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->city, 'url' => ['view', 'id' => $model->city]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="map-update">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
