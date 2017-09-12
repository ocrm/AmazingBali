<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\projects\Projects */

$this->title = 'Новый проект';
$this->params['breadcrumbs'][] = ['label' => 'Проекты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="projects-create">



    <?= $this->render('_form', [
        'model' => $model,
        'slug' => $slug
    ]) ?>

</div>
