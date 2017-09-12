<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\tours\TourProgram */

$this->title = 'Новая программа тура';
$this->params['breadcrumbs'][] = ['label' => 'Туры', 'url' => ['/admin/tours']];
$this->params['breadcrumbs'][] = ['label' => $model->tour->title, 'url' => ['/admin/tours/update', 'id' =>  $model->tour->id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tour-program-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
