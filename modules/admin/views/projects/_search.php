<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\projects\ProjectsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="projects-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'meta_title') ?>

    <?= $form->field($model, 'meta_keywords') ?>

    <?= $form->field($model, 'meta_description') ?>

    <?= $form->field($model, 'data') ?>

    <?php // echo $form->field($model, 'preview_img') ?>

    <?php // echo $form->field($model, 'title') ?>

    <?php // echo $form->field($model, 'slug_id') ?>

    <?php // echo $form->field($model, 'photo_1') ?>

    <?php // echo $form->field($model, 'photo_2') ?>

    <?php // echo $form->field($model, 'photo_3') ?>

    <?php // echo $form->field($model, 'photo_4') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
