<?php
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this \yii\web\View view component instance */
/* @var $message \yii\mail\BaseMessage instance of newly created mail message */

?>

<p>Дата сообщения: <?= $model->date ?></p>
<br />
<p>Имя: <?= $model->name ?></p>
<br />
<p>Телефон: <?= $model->phone ?></p>
<br />
<p>Почта: <?= $model->email ?></p>
<br />
<p>Что интересует: <?= $model->subject ?></p>
<br />
<p>Дата тура: <?= $model->tour_date ?></p>
<br />
<p>Текст сообщения: <?= $model->text ?></p>