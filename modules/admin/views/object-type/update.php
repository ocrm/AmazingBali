<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\selection\ObjectType */

$this->title = 'Редактирование объекта: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Объекты', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="object-type-update">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
