<?
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
?>

    <?php $form = ActiveForm::begin([
        'options' => [
            'id' => 'request-form',
        ]
    ]); ?>

    <?= $form->field($model, 'subject')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'name')->textInput(['placeholder' => 'Представьтесь, пожалуйста*'])->label(false) ?>

    <?= $form->field($model, 'phone')->textInput(['placeholder' => 'Ваш контактный телефон*'])->label(false) ?>

    <?= $form->field($model, 'email')->textInput(['placeholder' => 'E-mail'])->label(false) ?>

    <?= $form->field($model, 'tour_date')->widget(\yii\jui\DatePicker::classname(), [
        'dateFormat' => 'dd-MM-yyyy',
        'options' => [
            'class' => 'form-control',
            'placeholder' => 'Дата тура*'
        ]
    ])->label(false) ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 5, 'placeholder' => 'Текст сообщения'])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton('ОТПРАВИТЬ', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

