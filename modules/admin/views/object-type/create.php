<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\selection\ObjectType */

$this->title = 'Новый объект';
$this->params['breadcrumbs'][] = ['label' => 'Объекты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="object-type-create">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
