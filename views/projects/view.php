<?php
use yii\helpers\Url;
use yii\helpers\Html;
?>
<div class="projects-foto clearfix">
    <div class="pf-place-holder"><img style="float: left; width: 100%; visibility: hidden" data-target="1" src="/img/projects-foto/1.jpg" alt=""></div>
    <?= ($model->photo_1) ? Html::img($model->getUploadUrl('photo_1'), ['data-target' => 1, 'alt' => $model->title]) : '' ?>
    <?= ($model->photo_2) ? Html::img($model->getUploadUrl('photo_2'), ['data-target' => 2, 'alt' => $model->title]) : '' ?>
    <?= ($model->photo_3) ? Html::img($model->getUploadUrl('photo_3'), ['data-target' => 3, 'alt' => $model->title]) : '' ?>
    <?= ($model->photo_4) ? Html::img($model->getUploadUrl('photo_4'), ['data-target' => 4, 'alt' => $model->title]) : '' ?>
    <div class="project-info-block active">
        <button type="button" class="close project-close-info" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3><?= $model->title ?></h3>
        <p>
            <?= $model->data ?>
        </p>
    </div>
    <div class="title-bar hide-on-mobile">
        <div class="project-read-info-btn"></div>
        <?= $model->title ?>
    </div>
</div>
<div class="projects-preview-container row">

    <? if ($model->photo_1): ?>
        <div class="col-xs-3 p-prev-img">
            <?= Html::img($model->getUploadUrl('photo_1'), ['data-target' => 1, 'alt' => $model->title]) ?>
        </div>
    <? endif ?>

    <? if ($model->photo_2): ?>
    <div class="col-xs-3 p-prev-img">
        <?= Html::img($model->getUploadUrl('photo_2'), ['data-target' => 2, 'alt' => $model->title]) ?>
    </div>
    <? endif ?>

    <? if ($model->photo_3): ?>
    <div class="col-xs-3 p-prev-img">
        <?= Html::img($model->getUploadUrl('photo_3'), ['data-target' => 3, 'alt' => $model->title]) ?>
    </div>
    <? endif ?>

    <? if ($model->photo_4): ?>
    <div class="col-xs-3 p-prev-img">
        <?= Html::img($model->getUploadUrl('photo_4'), ['data-target' => 4, 'alt' => $model->title]) ?>
    </div>
    <? endif ?>

</div>