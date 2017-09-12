<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\projects\Projects */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="projects-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'meta_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meta_keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meta_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type_id')->dropDownList(\app\models\projects\ProjectsType::typeArray(), ['prompt' => 'Выберете категорию']) ?>

    <? //$form->field($slug, 'alias')->textInput() ?>

    <?= $form->field($model, 'status_id')->dropDownList(\app\models\Status::statusArray()) ?>

    <span class="img-require-size">*Рекомендуемый размер изображения: 400x400 пикселей</span>
    <?= $form->field($model, 'preview_img')->fileInput() ?>

    <span class="img-require-size">*Рекомендуемый размер фотографий: 870x530 пикселей</span>
    <?= $form->field($model, 'photo_1')->fileInput() ?>

    <?= $form->field($model, 'photo_2')->fileInput() ?>

    <?= $form->field($model, 'photo_3')->fileInput() ?>

    <?= $form->field($model, 'photo_4')->fileInput() ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
