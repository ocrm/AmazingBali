<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\pages\Pages */

$this->title = 'Новая страница';
$this->params['breadcrumbs'][] = ['label' => 'Страницы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pages-create">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
