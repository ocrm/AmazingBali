<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
use yii\helpers\Html;
use app\widgets\elive\EliveWidget;
/* @var $this yii\web\View */

$this->title = $page->title;
$this->registerMetaTag(['name' => 'description', 'content' => $page->meta_description]);
$this->registerMetaTag(['name' => 'keywords', 'content' => $page->meta_keywords]);
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-wrapper">
    <? foreach ($model as $item): ?>
    <div class="news-block clearfix">
        <div class="col-md-12 col-sm-12">
                <span class="news-date"><?= \Yii::$app->formatter->asDatetime($item->date, "php:d F Y "); ?></span>
                <div>
                    <a href="<?= Url::to(['articles/view', 'slug' => $item->slug]) ?>"><h3 class="news-title"><?= $item->title ?></h3></a>
                </div>
                <p class="news-text">
                    <?= EliveWidget::widget([
                        'model' => $item,
                        'attribute' => 'prev_text',
                        'controller' => 'articles'
                    ]) ?>
                </p>
        </div>
    </div>
    <? endforeach; ?>

<?
echo LinkPager::widget([
    'pagination' => $pages,
]);
?>
</div>
