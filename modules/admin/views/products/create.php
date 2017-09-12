<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\products\Products */

$this->title = 'Новое оборудование';
$this->params['breadcrumbs'][] = ['label' => 'Оборудование', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-create">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
