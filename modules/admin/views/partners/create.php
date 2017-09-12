<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\partners\Partners */

$this->title = 'Новый партнер';
$this->params['breadcrumbs'][] = ['label' => 'Партнеры', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="partners-create">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
