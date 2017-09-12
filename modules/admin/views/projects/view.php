<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\projects\Projects */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Проекты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="projects-view">



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
            'meta_title',
            'meta_keywords',
            'meta_description',
            'data:ntext',
            'title',
            'slug.alias',
            [
                'label' => $model->getAttributeLabel('preview_img'),
                'format' => 'html',
                'value' => Html::img($model->getThumbUploadUrl('preview_img'), ['class' => 'img-thumbnail'])
            ],
            [
                'label' => $model->getAttributeLabel('photo_1'),
                'format' => 'html',
                'value' => Html::img($model->getThumbUploadUrl('photo_1'), ['class' => 'img-thumbnail'])
            ],
            [
                'label' => $model->getAttributeLabel('photo_2'),
                'format' => 'html',
                'value' => Html::img($model->getThumbUploadUrl('photo_2'), ['class' => 'img-thumbnail'])
            ],
            [
                'label' => $model->getAttributeLabel('photo_3'),
                'format' => 'html',
                'value' => Html::img($model->getThumbUploadUrl('photo_3'), ['class' => 'img-thumbnail'])
            ],
            [
                'label' => $model->getAttributeLabel('photo_4'),
                'format' => 'html',
                'value' => Html::img($model->getThumbUploadUrl('photo_4'), ['class' => 'img-thumbnail'])
            ],
            'status.label',
        ],
    ]) ?>

</div>
