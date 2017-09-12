<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Status;

/* @var $this yii\web\View */
/* @var $model app\models\tours\ToursPhoto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tours-photo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <span class="img-require-size">*Рекомендуемый размер изображения: 1170x780 пикселей</span>
    <?= $form->field($model, 'photo')->fileInput() ?>

    <?= $form->field($model, 'sort') ?>

    <?= $form->field($model, 'status_id')->dropDownList(Status::statusArray()) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
