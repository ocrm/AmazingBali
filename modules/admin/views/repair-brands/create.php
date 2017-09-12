<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\repair_brands\RepairBrands */

$this->title = 'Новый бренд';
$this->params['breadcrumbs'][] = ['label' => 'Бренды', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="repair-brands-create">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
