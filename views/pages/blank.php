<?php
use app\widgets\elive\EliveWidget;

$this->title = $page->title;
$this->registerMetaTag(['name' => 'description', 'content' => $page->meta_description]);
$this->registerMetaTag(['name' => 'keywords', 'content' => $page->meta_keywords]);
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="page-wrapper">
    <?= EliveWidget::widget([
        'model' => $page->parts[0],
        'attribute' => 'data',
        'controller' => 'pages'
    ]) ?>
</div>
