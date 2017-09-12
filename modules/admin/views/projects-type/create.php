<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\projects\ProjectsType */

$this->title = 'Новый категория проектов';
$this->params['breadcrumbs'][] = ['label' => 'Новая категория проектов', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="projects-type-create">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
