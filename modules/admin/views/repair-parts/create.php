<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\repair_parts\RepairParts */

$this->title = 'Новая запчасть';
$this->params['breadcrumbs'][] = ['label' => 'Запчасти', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="repair-parts-create">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
