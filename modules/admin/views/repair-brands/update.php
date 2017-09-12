<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\repair_brands\RepairBrands */

$this->title = 'Редактирование бренда: ' . $model->brand_name;
$this->params['breadcrumbs'][] = ['label' => 'Бренды', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->brand_name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="repair-brands-update">

 

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
