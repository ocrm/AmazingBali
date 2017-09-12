<?php
use yii\helpers\Url;
use app\widgets\reviews\ReviewsWidget;
use app\widgets\elive\EliveWidget;
/* @var $this yii\web\View */

$this->title = $page->title;
$this->registerMetaTag(['name' => 'description', 'content' => $page->meta_description]);
$this->registerMetaTag(['name' => 'keywords', 'content' => $page->meta_keywords]);
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wrapper">
    <?= EliveWidget::widget([
        'model' => $page->parts[0],
        'attribute' => 'data',
        'controller' => 'pages'
    ]) ?>
    <div class="section-wrapper">
        <div class="page-title-block clearfix">
            <div class="col-md-2">
                <?= EliveWidget::widget([
                    'model' => $page->parts[1],
                    'attribute' => 'data',
                    'controller' => 'pages'
                ]) ?>
            </div>
            <div class="col-md-10">
                <?= EliveWidget::widget([
                    'model' => $page->parts[2],
                    'attribute' => 'data',
                    'controller' => 'pages'
                ]) ?>
                <div class="read-more-btn margin">читать далее</div>
            </div>
        </div>
    </div>
    <div class="facts-container">
        <div class="facts-numbers-container">
            <div class="facts-header">наша компания в цифрах</div>
            <div class="col-md-3 col-xs-6">
                <div class="fact-number" data-target="3450">0</div>
                <div class="fact-description">проектов</div>
            </div>
            <div class="col-md-3 col-xs-6">
                <div class="fact-number" data-target="760">0</div>
                <div class="fact-description">клиентов</div>
            </div>
            <div class="col-md-3 col-xs-6">
                <div class="fact-number" data-target="65">0</div>
                <div class="fact-description">наград</div>
            </div>
            <div class="col-md-3 col-xs-6">
                <div class="fact-number" data-target="10">0</div>
                <div class="fact-description">лет опыта</div>
            </div>
        </div>
    </div>
    <div class="privilege clearfix">
        <div class="col-md-6">
            <div class="p-block p-block-9">
                <?= EliveWidget::widget([
                    'model' => $page->parts[3],
                    'attribute' => 'data',
                    'controller' => 'pages'
                ]) ?>
                <div class="read-more-btn">читать далее</div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="p-block p-block-10">
                <?= EliveWidget::widget([
                    'model' => $page->parts[4],
                    'attribute' => 'data',
                    'controller' => 'pages'
                ]) ?>
                <div class="read-more-btn">читать далее</div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="p-block p-block-11">
                <?= EliveWidget::widget([
                    'model' => $page->parts[5],
                    'attribute' => 'data',
                    'controller' => 'pages'
                ]) ?>
                <div class="read-more-btn">читать далее</div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="p-block p-block-12">
                <?= EliveWidget::widget([
                    'model' => $page->parts[6],
                    'attribute' => 'data',
                    'controller' => 'pages'
                ]) ?>
                <div class="read-more-btn">читать далее</div>
            </div>
        </div>
    </div>
    <?= ReviewsWidget::widget(['count' => 4]) ?>
</div>