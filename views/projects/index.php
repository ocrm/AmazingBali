<?php
use yii\helpers\Url;
use app\widgets\projects\ProjectsWidget;
/* @var $this yii\web\View */

$this->title = $page->title;
$this->registerMetaTag(['name' => 'description', 'content' => $page->meta_description]);
$this->registerMetaTag(['name' => 'keywords', 'content' => $page->meta_keywords]);
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="wrapper">
    <?= ProjectsWidget::widget() ?>
</div>
