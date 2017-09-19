<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\feedback\Feedback;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Обратная связь';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="feedback-index">
    <? foreach ($model as $item): ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <span class="label label-info"><?= $item->date ?></span>

            <? if($item->status == Feedback::STATUS_NEW): ?>
                <span class="label label-danger">new</span>
            <? endif; ?>

            <? if($item->subject): ?>
                <span class="label label-warning">бронь</span>
            <? endif; ?>

            <?= Html::a('<span class="glyphicon glyphicon-trash"></span>', ['/admin/feedback/delete', 'id' => $item->id], [
                'title' => 'Удалить',
                'data-confirm' => 'Вы уверены, что хотите удалить этот элемент?',
                'data-method' => 'post',
                'class' => 'pull-right'
            ]) ?>

            <?= Html::a('<span class="glyphicon glyphicon-eye-open"></span>', ['/admin/feedback/read', 'id' => $item->id], [
                'data-method' => 'post',
                'class' => 'pull-right'
            ]) ?>

        </div>
        <div class="panel-body">
            <? if($item->subject): ?>
                <p><strong>Тур: </strong><?= Html::encode($item->subject) ?></p>
                <p><strong>Дата тура: </strong><?= Yii::$app->formatter->asDate($item->tour_date, "php:d-m-Y") ?></p>
            <? endif; ?>
            <p><strong>ФИО: </strong><?= Html::encode($item->name) ?></p>
            <p><strong>Телефон: </strong><?= Html::encode($item->phone) ?></p>
            <p><strong>Email: </strong><?= Html::encode($item->email) ?></p>
            <p><strong>Сообщение: </strong><?= Html::encode($item->text) ?></p>
        </div>
    </div>
    <? endforeach ?>
</div>
