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

<section class="section-height-mac context-dark">
    <div data-on="false" data-md-on="true" class="rd-parallax">
        <div data-speed="0.25" data-type="media" data-url="<?= $page->getUploadUrl('image') ?>" class="rd-parallax-layer"></div>
        <div data-speed="0" data-type="html" data-md-fade="false" class="rd-parallax-layer">
            <div class="bg-overlay-darker">
                <div class="shell section-34 section-md-100 section-lg-top-170 section-lg-bottom-165">
                    <h1 class="veil reveal-md-inline-block">
                        <?= EliveWidget::widget([
                            'model' => $page->parts[0],
                            'attribute' => 'data',
                            'controller' => 'pages',
                        ]) ?>
                    </h1>
                    <div class="offset-top-4">
                        <h6 class="text-italic">
                            <?= EliveWidget::widget([
                                'model' => $page->parts[1],
                                'attribute' => 'data',
                                'controller' => 'pages',
                            ]) ?>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<main class="page-content">
    <section class="section-80 bg-wild-wand">
        <div class="shell">
            <div class="range range-xs-center">
                <div class="cell-sm-11 cell-md-9 cell-md-push-1">

                    <div class="range range-xs-justify">
                        <!--<div class="cell-sm-6 cell-sm-3 text-sm-left">
                            <div class="reveal-inline-block inset-sm-left-20 inset-md-left-0">
                                <div class="pull-left inset-right-10">
                                    <p class="text-extra-small text-uppercase text-gray-base">Сортировать:</p>
                                </div>
                                <div class="pull-right shadow-drop-xs reveal-inline-block select-xs">
                                    <select data-minimum-results-for-search="Infinity" data-constraints="@Required" class="form-control select-filter">
                                        <option value="2">Новые</option>
                                        <option value="3">Старые</option>
                                    </select>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <!--
                        <div class="cell-sm-6 cell-sm-3 offset-top-20 offset-sm-top-0 text-sm-right">
                            <div class="reveal-inline-block inset-sm-right-20 inset-md-right-0">
                                <div class="pull-left inset-right-10">
                                    <p class="text-extra-small text-uppercase text-gray-base">Вид:</p>
                                </div>
                                <div class="pull-right">
                                    <ul class="list-inline list-primary-filled text-center">
                                        <li><a href="blog-list-sidebar-left.html" class="shadow-drop-lg"><span class="icon icon-sm icon-square bg-primary mdi mdi-view-stream text-white"></span></a></li>
                                        <li><a href="blog-list-variant-2-sidebar-left.html" class="shadow-drop-lg"><span class="icon icon-sm icon-square bg-white mdi mdi-format-list-bulleted text-silver"></span></a></li>
                                        <li><a href="blog-grid-sidebar-left.html" class="shadow-drop-lg"><span class="icon icon-sm icon-square bg-white mdi mdi-view-module text-silver"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        -->
                    </div>

                    <? foreach ($model as $item): ?>

                        <div class="offset-top-50 offset-md-top-25">
                            <div class="post-box post-box-wide reveal-block text-left">
                                <div class="post-box-img-wrap"><a href="<?= Url::to(['news/view', 'slug' => $item->slug]) ?>"><img src="<?= $item->getUploadUrl('preview_img') ?>" width="1170" height="440" alt=""/></a></div>
                                <div class="post-box-caption">
                                    <div class="post-box-title h5 text-ubold"><a href="<?= Url::to(['news/view', 'slug' => $item->slug]) ?>" class="text-gray-base"><?= $item->title ?></a></div>
                                    <ul class="list-inline post-box-meta list-inline-dashed list-inline-dashed-sm text-extra-small text-silver-chalice offset-top-4">
                                        <li class="text-uppercase"><img src="/images/icon-16-16x15.png" width="16" height="15" alt=""/><span class="text-middle inset-left-0"><?= \Yii::$app->formatter->asDatetime($item->date, "php:d F Y "); ?></span></li>
                                    </ul>
                                    <div class="offset-top-12">
                                        <div class="text-small text-silver-chalice">
                                            <?= EliveWidget::widget([
                                                'model' => $item,
                                                'attribute' => 'prev_text',
                                                'controller' => 'news'
                                            ]) ?>
                                        </div>
                                    </div>
                                    <div class="offset-top-25"><a href="<?= Url::to(['news/view', 'slug' => $item->slug]) ?>" class="btn btn-primary btn-width-110">Читать подробнее</a></div>
                                </div>
                            </div>
                        </div>

                    <? endforeach; ?>

                    <div class="offset-top-50">
                        <nav>
                            <?
                            echo LinkPager::widget([
                                'pagination' => $pages,
                                'options' => ['class' => 'pagination-classic']
                            ]);
                            ?>
                        </nav>

                    </div>
                </div>
                <!--<div class="cell-sm-11 cell-md-3 offset-top-50 offset-md-top-0 text-md-left">
                    <aside class="blog-aside box box-xs reveal-block bg-white">
                        <p class="text-gray-base text-ubold text-uppercase text-spacing-200">Поиск</p>
                        <div class="offset-top-20">
                            <form action="search-results.html" method="GET" class="form-blog-search form-blog-search-type-2 form-search rd-search">
                                <button type="submit" class="form-search-submit"><span class="fa fa-search"></span></button>
                                <div class="form-group form-group-xs">
                                    <label for="blog-sidebar-form-search-widget" class="form-label form-search-label form-label-sm">Текст поиска</label>
                                    <input id="blog-sidebar-form-search-widget" type="text" name="s" autocomplete="off" class="form-search-input input-sm form-control input-sm">
                                </div>
                            </form>
                        </div>
                        <div class="offset-top-40">
                            <hr class="hr bg-gallery">
                        </div>
                        <div class="offset-top-35">
                            <p class="text-gray-base text-ubold text-uppercase text-spacing-200">Категории</p>
                            <div class="offset-top-20">
                                <ul class="list list-1 list-modern">
                                    <li class="text-small"><a href="#" class="text-silver-chalice"><span class="pull-left">Family (26)</span><span class="pull-right text-ubold icon mdi mdi-chevron-right"></span><span class="clearfix"></span></a></li>
                                    <li class="text-small"><a href="#" class="text-silver-chalice"><span class="pull-left">Adventure (66)</span><span class="pull-right text-ubold icon mdi mdi-chevron-right"></span><span class="clearfix"></span></a></li>
                                    <li class="text-small"><a href="#" class="text-silver-chalice"><span class="pull-left">Romantic (59)</span><span class="pull-right text-ubold icon mdi mdi-chevron-right"></span><span class="clearfix"></span></a></li>
                                    <li class="text-small"><a href="#" class="text-silver-chalice"><span class="pull-left">Wildlife (55)</span><span class="pull-right text-ubold icon mdi mdi-chevron-right"></span><span class="clearfix"></span></a></li>
                                    <li class="text-small"><a href="#" class="text-silver-chalice"><span class="pull-left">Beach (89)</span><span class="pull-right text-ubold icon mdi mdi-chevron-right"></span><span class="clearfix"></span></a></li>
                                    <li class="text-small"><a href="#" class="text-silver-chalice"><span class="pull-left">Honeymoon (27)</span><span class="pull-right text-ubold icon mdi mdi-chevron-right"></span><span class="clearfix"></span></a></li>
                                    <li class="text-small"><a href="#" class="text-silver-chalice"><span class="pull-left">Island (45)</span><span class="pull-right text-ubold icon mdi mdi-chevron-right"></span><span class="clearfix"></span></a></li>
                                </ul>
                            </div>
                            <div class="offset-top-30">
                                <hr class="hr bg-gallery">
                            </div>
                            <div class="offset-top-30">
                                <p class="text-gray-base text-ubold text-uppercase text-spacing-200">Тэги</p>
                                <div class="group group-xs btn-tags offset-top-25 text-left"><a href="#" class="btn btn-sm btn-gray">Travel</a><a href="#" class="btn btn-sm btn-gray">Adventure</a><a href="#" class="btn btn-sm btn-gray">Relax</a><a href="#" class="btn btn-sm btn-gray">Brasil</a><a href="#" class="btn btn-sm btn-gray">Trip</a><a href="#" class="btn btn-sm btn-gray">Honeymoon</a><a href="#" class="btn btn-sm btn-gray">Promotions</a><a href="#" class="btn btn-sm btn-gray">North America</a></div>
                            </div>
                        </div>
                    </aside>
                </div>-->
            </div>
        </div>
    </section>
</main>
