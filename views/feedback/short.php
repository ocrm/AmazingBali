<?
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
?>

    <?php $form = ActiveForm::begin([
        'options' => [
            'id' => 'request-form',
            'data-form-type' => 'short'
        ]
    ]); ?>

    <?= $form->field($model, 'subject')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'name')->textInput(['placeholder' => 'Представьтесь, пожалуйста*'])->label(false) ?>

    <?= $form->field($model, 'phone')->textInput(['placeholder' => 'Ваш контактный телефон*'])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton('ОТПРАВИТЬ', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

