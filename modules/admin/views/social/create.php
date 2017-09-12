<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\social\Social */

$this->title = 'Create Social';
$this->params['breadcrumbs'][] = ['label' => 'Socials', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="social-create">
    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
