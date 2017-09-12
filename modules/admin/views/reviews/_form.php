<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\tours\Tours;

/* @var $this yii\web\View */
/* @var $model app\models\reviews\Reviews */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reviews-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'tour_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tour_id')->dropDownList(Tours::toursArray()) ?>

    <?= $form->field($model, 'cost')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'position')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'short_text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'long_text')->textarea(['rows' => 6]) ?>

    <span class="img-require-size">*Рекомендуемый размер изображения: 770x380 пикселей</span>
    <?= $form->field($model, 'tour_img')->fileInput() ?>

    <span class="img-require-size">*Рекомендуемый размер изображения: 100x100 пикселей</span>
    <?= $form->field($model, 'client_img')->fileInput() ?>

    <?= $form->field($model, 'status_id')->dropDownList(\app\models\Status::statusArray()) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
