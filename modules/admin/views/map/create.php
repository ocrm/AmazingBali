<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\map\Map */

$this->title = 'Новое представительство';
$this->params['breadcrumbs'][] = ['label' => 'Представительства', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="map-create">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
