<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\destination\Destination */

$this->title = 'Редактирование пункта: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Пункты', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="destination-update">
    
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
