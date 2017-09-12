<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\map\Map */

$this->title = $model->city;
$this->params['breadcrumbs'][] = ['label' => 'Представительства', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="map-view">



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
            'city',
            'x',
            'y',
            'lat',
            'lng',
            'zoom',
            'text',
            'status.label',
        ],
    ]) ?>

</div>
