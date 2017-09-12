<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\products\Products */

$this->title = 'Редактирование оборудования: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Оборудование', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="products-update">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
