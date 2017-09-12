<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\carousel\Carousel */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Карусель', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carousel-view">



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
            'title',
            [
                'label' => $model->getAttributeLabel('image'),
                'format' => 'html',
                'value' => Html::img($model->getThumbUploadUrl('image'), ['class' => 'img-thumbnail'])
            ],
            'status.label',
            'sort'
        ],
    ]) ?>

</div>
