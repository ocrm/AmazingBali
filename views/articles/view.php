<?php
use yii\helpers\Url;
use app\widgets\elive\EliveWidget;
/* @var $this yii\web\View */

$this->title = $model->title;
$this->registerMetaTag(['name' => 'description', 'content' => $model->meta_description]);
$this->registerMetaTag(['name' => 'keywords', 'content' => $model->meta_keywords]);
$this->params['breadcrumbs'][] = ['label' => 'Полезное', 'url' => ['articles/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-wrapper">
    <?= EliveWidget::widget([
        'model' => $model,
        'attribute' => 'data',
        'controller' => 'articles'
    ]) ?>
</div>
