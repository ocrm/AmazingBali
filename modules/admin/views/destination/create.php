<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\destination\Destination */

$this->title = 'Новый пункт';
$this->params['breadcrumbs'][] = ['label' => 'Пункты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="destination-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
