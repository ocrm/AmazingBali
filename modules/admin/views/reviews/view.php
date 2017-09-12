<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\reviews\Reviews */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Отзывы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reviews-view">



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
            'short_text:ntext',
            'long_text:ntext',
            [
                'label' => $model->getAttributeLabel('client_img'),
                'format' => 'html',
                'value' => Html::img($model->getThumbUploadUrl('client_img'), ['class' => 'img-thumbnail'])
            ],
            [
                'label' => $model->getAttributeLabel('tour_img'),
                'format' => 'html',
                'value' => Html::img($model->getThumbUploadUrl('tour_img'), ['class' => 'img-thumbnail'])
            ],
            'tour_name',
            'cost',
            'name',
            'position',
            'status.label',
        ],
    ]) ?>

</div>
