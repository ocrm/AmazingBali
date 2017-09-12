<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\news\News */

$this->title = 'Новая статья';
$this->params['breadcrumbs'][] = ['label' => 'Статьи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-create">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
