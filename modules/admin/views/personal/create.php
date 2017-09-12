<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\personal\Personal */

$this->title = 'Новый сотрудник';
$this->params['breadcrumbs'][] = ['label' => 'Сотрудники', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="personal-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
