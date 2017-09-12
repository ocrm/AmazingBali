<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<canvas id="canvas"></canvas>

<div class="login-container">
        <div class="admin-login">
            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
            ]); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder' => 'Пользователь'])->label(false) ?>

                <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Пароль'])->label(false) ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <?= Html::submitButton('вход', ['class' => 'btn btn-primary login-btn', 'name' => 'login-button']) ?>

            <?php ActiveForm::end(); ?>
        </div>
</div>