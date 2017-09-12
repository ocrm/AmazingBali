<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\selection\FloorsType */

$this->title = 'Новый этаж';
$this->params['breadcrumbs'][] = ['label' => 'Этажи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="floors-type-create">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
