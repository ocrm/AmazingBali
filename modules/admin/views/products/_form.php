<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Status;
use app\models\Category;
use kartik\tree\TreeViewInput;
use app\models\selection\ObjectType;
use app\models\selection\TaskType;
use app\models\selection\FloorsType;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\products\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'meta_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meta_keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meta_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'brand')->textInput(['maxlength' => true]) ?>

    <? echo $form->field($model, 'category_id')->widget(TreeViewInput::classname(),
        [
            'name' => 'category_id',
            'value' => 'true', // preselected values
            'query' => Category::find()->addOrderBy('root, lft'),
            'headingOptions' => ['label' => 'Категории'],
            'rootOptions' => ['label'=>''],
            'fontAwesome' => true,
            'asDropdown' => false,
            'multiple' => false,
            'options' => ['disabled' => false]
        ])->label(false); ?>

    <div class="row">
        <div class="col-md-4">
            <?
            echo $form->field($model, 'object_id')->widget(Select2::classname(), [
                'data' => ObjectType::typeArray(),
                'options' => ['placeholder' => 'Выберите объект ...'],
                'pluginOptions' => [
                    'allowClear' => true,
                    'multiple' => true
                ],
            ]);
            ?>
        </div>
        <div class="col-md-4">
            <?
            echo $form->field($model, 'task_id')->widget(Select2::classname(), [
                'data' => TaskType::typeArray(),
                'options' => ['placeholder' => 'Выберите задачу ...'],
                'pluginOptions' => [
                    'allowClear' => true,
                    'multiple' => true
                ],
            ]);
            ?>
        </div>
        <div class="col-md-4">
            <?
            echo $form->field($model, 'floors_id')->widget(Select2::classname(), [
                'data' => FloorsType::typeArray(),
                'options' => ['placeholder' => 'Выберите этажи ...'],
                'pluginOptions' => [
                    'allowClear' => true,
                    'multiple' => true
                ],
            ]);
            ?>
        </div>
    </div>

    <?= $form->field($model, 'sort') ?>

    <?= $form->field($model, 'status_id')->dropDownList(Status::statusArray()) ?>

    <?= $form->field($model, 'request_blank')->fileInput() ?>

    <?= $form->field($model, 'booklet')->fileInput() ?>

    <?= $form->field($model, 'blueprint')->fileInput() ?>

    <? if(!$model->isNewRecord): ?>
        <p>
            <?= Html::a('Новая фотография', ['/admin/products-photo/create', 'productId' => $model->id], ['class' => 'btn btn-success']) ?>
        </p>

        <div class="row">
            <? foreach ($model->photos as $item): ?>
                <div class="col-sm-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="label label-<?= ($item->status_id == Status::STATUS_ACTIVE) ? 'primary' : 'danger' ?>"><?= $item->status->label ?></span>
                            <span class="label label-success"><?= $item->sort ?></span>
                            <?= Html::a('<span class="glyphicon glyphicon-trash"></span>', ['/admin/products-photo/delete', 'id' => $item->id], [
                                'title' => 'Удалить',
                                'data-confirm' => 'Вы уверены, что хотите удалить этот элемент?',
                                'data-method' => 'post',
                                'class' => 'pull-right'
                            ]) ?>

                            <?= Html::a('<span class="glyphicon glyphicon-pencil"></span>', ['/admin/products-photo/update', 'id' => $item->id], [
                                'title' => 'Редактировать',
                                'data-method' => 'post',
                                'class' => 'pull-right'
                            ]) ?>
                        </div>
                        <div class="panel-body">
                            <?= Html::img($item->getThumbUploadUrl('photo'), [
                                'class' => 'img-thumbnail',
                                'style' => 'display:block;margin:0 auto;'
                            ]) ?>
                        </div>
                    </div>
                </div>
            <? endforeach; ?>
        </div>
    <? endif ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
