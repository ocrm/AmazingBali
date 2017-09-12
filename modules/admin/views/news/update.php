<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\news\News */

$this->title = 'Редактирование новости: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Новости', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="news-update">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
