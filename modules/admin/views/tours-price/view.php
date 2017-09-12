<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\tours\ToursPrice */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Цены тура', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tours-price-view">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'tour_id',
            'title',
            'price',
            'description',
            'top',
            'text:ntext',
        ],
    ]) ?>

</div>
