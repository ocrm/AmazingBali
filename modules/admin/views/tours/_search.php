<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\products\ProductsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'meta_title') ?>

    <?= $form->field($model, 'meta_keywords') ?>

    <?= $form->field($model, 'meta_description') ?>

    <?= $form->field($model, 'title') ?>

    <?php // echo $form->field($model, 'brand') ?>

    <?php // echo $form->field($model, 'status_id') ?>

    <?php // echo $form->field($model, 'request_blank') ?>

    <?php // echo $form->field($model, 'booklet') ?>

    <?php // echo $form->field($model, 'blueprint') ?>

    <?php // echo $form->field($model, 'photos') ?>

    <?php // echo $form->field($model, 'description_short') ?>

    <?php // echo $form->field($model, 'description_long') ?>

    <?php // echo $form->field($model, 'specifications') ?>

    <?php // echo $form->field($model, 'options') ?>

    <?php // echo $form->field($model, 'video') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
