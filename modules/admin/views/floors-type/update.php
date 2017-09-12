<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\selection\FloorsType */

$this->title = 'Редактирование этажа: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Этажи', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="floors-type-update">
    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
