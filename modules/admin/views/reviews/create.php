<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\reviews\Reviews */

$this->title = 'Новый отзыв';
$this->params['breadcrumbs'][] = ['label' => 'Отзывы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reviews-create">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
