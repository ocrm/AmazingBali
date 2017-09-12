<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\products\ProductsPhoto */

$this->title = 'Новая фотография оборудования';
$this->params['breadcrumbs'][] = ['label' => 'Оборудование', 'url' => ['/admin/products']];
$this->params['breadcrumbs'][] = ['label' => $model->product->title, 'url' => ['/admin/products/update', 'id' =>  $model->product->id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-photo-create">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
