<?
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<div class="selection-container clearfix">
    <div class="col-md-2">
        <div class="s-label">Подбор оборудования</div>
    </div>

    <?php $form = ActiveForm::begin([
        'action' => '/catalog/selection'
    ]); ?>

        <div class="col-md-2 col-xs-6">
            <?= $form->field($model, 'object_type')->dropDownList(\app\models\selection\ObjectType::typeArray(), ['prompt' => 'Объект'])->label(false) ?>
        </div>
        <div class="col-md-3 col-xs-6">
            <?= $form->field($model, 'task_type')->dropDownList(\app\models\selection\TaskType::typeArray(), ['prompt' => 'Задача оборудования'])->label(false) ?>
        </div>
        <div class="col-md-3 col-xs-6">
            <?= $form->field($model, 'floors_type')->dropDownList(\app\models\selection\FloorsType::typeArray(), ['prompt' => 'Количество этажей'])->label(false) ?>
        </div>
        <div class="col-md-2 col-xs-6">
            <?= Html::submitButton('Подобрать', ['class' => 'sf-submit-btn btn']) ?>
        </div>

    <?php ActiveForm::end(); ?>

</div>