<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\tours\Tours */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Туры', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tours-view">

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
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
            'sort',
            'meta_title',
            'meta_keywords',
            'meta_description',
            'title',
            'status.label',
            'type.title',
            'stars',
            'duration',
            'short_description',
            'long_description',
            'places',
            'destination.title',
            'new_price',
            'old_price',
            'popularLabel',
            'tour_img',
            'short_program',
            'slug'
        ],
    ]) ?>

</div>
