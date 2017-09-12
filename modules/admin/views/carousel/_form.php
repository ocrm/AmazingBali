<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Status;
/* @var $this yii\web\View */
/* @var $model app\models\carousel\Carousel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="carousel-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_id')->dropDownList(Status::statusArray()) ?>

    <?= $form->field($model, 'sort')->textInput() ?>

    <span class="img-require-size">*Рекомендуемый размер изображения:  пикселей</span>
    <?= $form->field($model, 'image')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
