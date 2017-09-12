<?php
use yii\helpers\Url;
use app\widgets\elive\EliveWidget;
/* @var $this yii\web\View */

$this->title = $model->title;
$this->registerMetaTag(['name' => 'description', 'content' => $model->meta_description]);
$this->registerMetaTag(['name' => 'keywords', 'content' => $model->meta_keywords]);
$this->params['breadcrumbs'][] = ['label' => 'Новости', 'url' => ['news/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="section-height-mac">
    <div data-on="false" data-md-on="true" class="rd-parallax">
        <div data-speed="0.25" data-type="media" data-url="<?= $model->getUploadUrl('preview_img') ?>" class="rd-parallax-layer"></div>
        <div data-speed="0" data-type="html" data-md-fade="false" class="rd-parallax-layer">
            <div class="bg-overlay-darker">
                <div class="shell section-100 section-md-60 section-lg-115">
                    <h1 class="reveal-md-inline-block text-white"><?= $model->title ?></h1>
                    <div class="offset-md-top-35">
                        <ul class="list-inline list-inline-dashed list-inline-dashed-sm text-small text-white">
                            <li class="text-uppercase"><span class="text-middle inset-left-10"><?= \Yii::$app->formatter->asDatetime($model->date, "php:d F Y "); ?></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<main class="page-content">
    <section class="section-80 bg-wild-wand text-sm-left">
        <div class="shell">
            <div class="range range-xs-center">
                <div class="cell-md-10 cell-lg-12">
                    <div class="box box-lg box-single-post bg-white reveal-block">
                        <h4 class="text-ubold"><?= $model->title ?></h4>
                        <div class="blog offset-top-35 text-silver-chalice text-small text-left">
                            <?= EliveWidget::widget([
                                'model' => $model,
                                'attribute' => 'data',
                                'controller' => 'news',
                                'className' => 'paragraph'
                            ]) ?>
                        </div>
                    </div>
                    <div class="offset-top-60">
                        <hr class="hr bg-alto">
                    </div>
                </div>
            </div>
            <div class="range range-xs-center offset-top-60">
                <div class="cell-md-10 cell-lg-12">
                    <div class="range range-xs-center">
                        <? foreach ($lastNews as $item): ?>
                            <div class="cell-sm-6 cell-lg-4">
                            <div class="inset-left-10 inset-right-10 inset-xs-left-50 inset-xs-right-50 inset-sm-left-20 inset-sm-right-20 inset-md-left-10 inset-md-right-10 inset-lg-left-0 inset-lg-right-0">
                                <div class="post-box reveal-block text-left">
                                    <div class="post-box-img-wrap"><a href="<?= Url::to(['news/view', 'slug' => $item->slug]) ?>"><img src="<?= $item->getThumbUploadUrl('preview_img') ?>" alt=""/></a></div>
                                    <div class="post-box-caption">
                                        <div class="post-box-title text-ubold"><a href="<?= Url::to(['news/view', 'slug' => $item->slug]) ?>" class="text-gray-base"><?= $item->title ?></a></div>
                                        <ul class="list-inline post-box-meta list-inline-dashed list-inline-dashed-xs text-extra-small-10 offset-top-12 text-silver-chalice">
                                            <li class="text-uppercase"><?= \Yii::$app->formatter->asDatetime($item->date, "php:d F Y "); ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <? endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
