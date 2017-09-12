<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\tours\Tours */

$this->title = 'Новый тур';
$this->params['breadcrumbs'][] = ['label' => 'Туры', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tours-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
