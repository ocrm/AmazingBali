<?php
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this \yii\web\View view component instance */
/* @var $message \yii\mail\BaseMessage instance of newly created mail message */

?>

<p>Дата сообщения: <?= date("Y-m-d H:i:s"); ?></p>
<p>Имя: <?= $model->name ?></p>
<p>Телефон: <?= $model->phone ?></p>
<p>Почта: <?= $model->email ?></p>
<p>Что интересует: <?= $model->subject ?></p>
<p>Дата тура: <?= Yii::$app->formatter->asDate($model->tour_date, "php:d-m-Y") ?></p>
<p>Текст сообщения: <?= $model->text ?></p>