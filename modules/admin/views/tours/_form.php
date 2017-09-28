<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Status;
use app\models\tours\ToursType;
use app\models\destination\Destination;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\tours\Tours */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tours-form">


    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <div class="col-md-4">
        <?= $form->field($model, 'meta_title')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="col-md-4">
        <?= $form->field($model, 'meta_keywords')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="col-md-4">
        <?= $form->field($model, 'meta_description')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="col-md-8">
        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="col-md-4">
        <?
        echo $form->field($model, 'type_id')->widget(Select2::classname(), [
            'data' => ToursType::typeArray(),
            'options' => ['placeholder' => 'Выберите категорию ...'],
            'pluginOptions' => [
                'allowClear' => true,
                'multiple' => true
            ],
        ]);
        ?>
    </div>

    <div class="col-md-12">
        <?= $form->field($model, 'short_description')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="col-md-12">
        <?= $form->field($model, 'long_description')->textarea(['row' => 6, 'class' => 'ckeditor']) ?>
    </div>

    <div class="col-md-3">
        <?= $form->field($model, 'destination_id')->dropDownList(Destination::destinationArray()) ?>
    </div>

    <div class="col-md-3">
        <?= $form->field($model, 'short_program')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="col-md-2">
        <?= $form->field($model, 'duration_type')->dropDownList($model->durationTypeArr) ?>
    </div>

    <div class="col-md-2">
        <?= $form->field($model, 'duration_time')->textInput() ?>
    </div>

    <div class="col-md-2">
        <?= $form->field($model, 'duration')->textInput() ?>
    </div>


    <div class="col-md-2">
        <?= $form->field($model, 'places')->textInput() ?>
    </div>

    <div class="col-md-1">
        <?= $form->field($model, 'new_price')->textInput() ?>
    </div>

    <div class="col-md-1">
        <?= $form->field($model, 'old_price')->textInput() ?>
    </div>

    <div class="col-md-2">
        <?= $form->field($model, 'stars')->textInput() ?>
    </div>

    <div class="col-md-2">
        <?= $form->field($model, 'hit')->dropDownList($model->boolArr) ?>
    </div>

    <div class="col-md-2">
        <?= $form->field($model, 'sale')->dropDownList($model->boolArr) ?>
    </div>

    <div class="col-md-12">
        <span class="img-require-size">*Рекомендуемый размер изображения: 1920x900 пикселей</span>
        <?= $form->field($model, 'tour_img')->fileInput() ?>
    </div>

    <div class="col-md-3">
        <?= $form->field($model, 'popular')->dropDownList($model->boolArr) ?>
    </div>

    <div class="col-md-3">
        <?= $form->field($model, 'sort') ?>
    </div>

    <div class="col-md-3">
        <?= $form->field($model, 'status_id')->dropDownList(Status::statusArray()) ?>
    </div>

    <div class="col-md-3">
        <?= $form->field($model, 'slug')->textInput() ?>
    </div>

    <div class="col-md-12">
        <hr>
    </div>

    <div class="col-md-12">
        <?= $form->field($model, 'program_description')->textarea(['row' => 6, 'class' => 'ckeditor']) ?>
    </div>

    <div class="col-md-12">
        <? if(!$model->isNewRecord): ?>
            <p>
                <?= Html::a('Новая программа', ['/admin/tours-program/create', 'tourId' => $model->id], ['class' => 'btn btn-success']) ?>
            </p>

            <div class="row">
                <? foreach ($model->program as $item): ?>
                    <div class="col-sm-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <span class="label label-<?= ($item->status_id == Status::STATUS_ACTIVE) ? 'primary' : 'danger' ?>"><?= $item->status->label ?></span>
                                <span class="label label-success"><?= $item->sort ?></span>
                                <?= Html::a('<span class="glyphicon glyphicon-trash"></span>', ['/admin/tours-program/delete', 'id' => $item->id], [
                                    'title' => 'Удалить',
                                    'data-confirm' => 'Вы уверены, что хотите удалить этот элемент?',
                                    'data-method' => 'post',
                                    'class' => 'pull-right'
                                ]) ?>

                                <?= Html::a('<span class="glyphicon glyphicon-pencil"></span>', ['/admin/tours-program/update', 'id' => $item->id], [
                                    'title' => 'Редактировать',
                                    'data-method' => 'post',
                                    'class' => 'pull-right'
                                ]) ?>
                            </div>
                            <div class="panel-body">
                                <span class="label label-default"><?= $item->days ?></span>
                                <span class="label label-default"><?= $item->location ?></span>
                                <hr>
                                <p>
                                    <?= $item->description ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <? endforeach; ?>
            </div>

            <div class="col-md-12">
                <hr>
            </div>

        <? endif ?>

        <? if(!$model->isNewRecord): ?>
            <p>
                <?= Html::a('Новая цена', ['/admin/tours-price/create', 'tourId' => $model->id], ['class' => 'btn btn-success']) ?>
            </p>

            <div class="row">
                <? foreach ($model->prices as $item): ?>
                    <div class="col-sm-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <span class="label label-<?= ($item->status_id == Status::STATUS_ACTIVE) ? 'primary' : 'danger' ?>"><?= $item->status->label ?></span>
                                <span class="label label-success"><?= $item->sort ?></span>
                                <? if ($item->top): ?>
                                    <span class="label label-danger">Хит</span>
                                <? endif; ?>
                                <?= Html::a('<span class="glyphicon glyphicon-trash"></span>', ['/admin/tours-price/delete', 'id' => $item->id], [
                                    'title' => 'Удалить',
                                    'data-confirm' => 'Вы уверены, что хотите удалить этот элемент?',
                                    'data-method' => 'post',
                                    'class' => 'pull-right'
                                ]) ?>

                                <?= Html::a('<span class="glyphicon glyphicon-pencil"></span>', ['/admin/tours-price/update', 'id' => $item->id], [
                                    'title' => 'Редактировать',
                                    'data-method' => 'post',
                                    'class' => 'pull-right'
                                ]) ?>
                            </div>
                            <div class="panel-body">
                                <h4>
                                    <?= $item->title ?> <span class="label label-success"><?= $item->price . '$' ?></span>
                                </h4>
                                <hr>
                                <p>
                                    <?= $item->description ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <? endforeach; ?>
            </div>

            <div class="col-md-12">
                <hr>
            </div>

        <? endif ?>

        <? if(!$model->isNewRecord): ?>

            <p>
                <?= Html::a('Новая фотография', ['/admin/tours-photo/create', 'tourId' => $model->id], ['class' => 'btn btn-success']) ?>
            </p>

            <div class="row">
                <? foreach ($model->photos as $item): ?>
                    <div class="col-sm-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <span class="label label-<?= ($item->status_id == Status::STATUS_ACTIVE) ? 'primary' : 'danger' ?>"><?= $item->status->label ?></span>
                                <span class="label label-success"><?= $item->sort ?></span>
                                <?= Html::a('<span class="glyphicon glyphicon-trash"></span>', ['/admin/tours-photo/delete', 'id' => $item->id], [
                                    'title' => 'Удалить',
                                    'data-confirm' => 'Вы уверены, что хотите удалить этот элемент?',
                                    'data-method' => 'post',
                                    'class' => 'pull-right'
                                ]) ?>

                                <?= Html::a('<span class="glyphicon glyphicon-pencil"></span>', ['/admin/tours-photo/update', 'id' => $item->id], [
                                    'title' => 'Редактировать',
                                    'data-method' => 'post',
                                    'class' => 'pull-right'
                                ]) ?>
                            </div>
                            <div class="panel-body">
                                <?= Html::img($item->getThumbUploadUrl('photo'), [
                                    'class' => 'img-thumbnail',
                                    'style' => 'display:block;margin:0 auto;'
                                ]) ?>
                            </div>
                        </div>
                    </div>
                <? endforeach; ?>
            </div>

            <div class="col-md-12">
                <hr>
            </div>

        <? endif ?>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
