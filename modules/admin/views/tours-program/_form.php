<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Status;

/* @var $this yii\web\View */
/* @var $model app\models\tours\TourProgram */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tour-program-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'days')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'day_hour')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status_id')->dropDownList(Status::statusArray()) ?>

    <?= $form->field($model, 'sort')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
