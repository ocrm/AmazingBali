<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\tours\ToursType */

$this->title = 'Новая категория';
$this->params['breadcrumbs'][] = ['label' => 'Категории туров', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tours-type-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
