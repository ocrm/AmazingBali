<?php
use yii\helpers\Url;
use yii\helpers\Html;
use app\widgets\elive\EliveWidget;
use app\models\Status;
use yii\widgets\LinkPager;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */

$this->title = $page->title;
$this->registerMetaTag(['name' => 'description', 'content' => $page->meta_description]);
$this->registerMetaTag(['name' => 'keywords', 'content' => $page->meta_keywords]);
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
                        <h6 class="text-italic"><?= count($model) ?> туров найдено</h6>
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
                        <div class="cell-sm-6 cell-sm-3 text-sm-left">
                            <div class="reveal-inline-block inset-sm-left-20 inset-md-left-0">
                                <div class="pull-left inset-right-10">
                                    <p class="text-extra-small text-uppercase text-gray-base">Сортировать по:</p>
                                </div>
                                <div class="pull-right shadow-drop-xs reveal-inline-block select-xs">
                                    <select name="sort" data-minimum-results-for-search="Infinity" data-constraints="@Required" class="form-control select-filter">
                                        <option value="popularity">Популярности</option>
                                        <option value="newest">Новизне</option>
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
                                        <li><a href="" class="shadow-drop-lg"><span class="icon icon-sm icon-square bg-white mdi mdi-format-list-bulleted text-silver"></span></a></li>
                                        <li><a href="" class="shadow-drop-lg"><span class="icon icon-sm icon-square bg-primary mdi mdi-view-module text-white"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        -->
                    </div>
                    <? Pjax::begin(['id' => 'pjax-content', 'timeout' => 10000]) ?>
                    <div class="range range-xs-center range-sm-left range-md-center offset-top-50 offset-md-top-25">
                        <? foreach ($model as $item): ?>
                            <div class="cell-sm-6 cell-md-4 offset-top-30">
                            <div class="box-offer box-offer-xs">
                                <div class="box-offer-img-wrap">
                                    <a href="<?= Url::to(['tours/view', 'slug' => $item->slug]) ?>">
                                        <img src="<?= $item->getThumbUploadUrl('tour_img') ?>" width="270" height="240" alt="" class="img-responsive center-block">
                                        <div class="hot-label-container">
                                            <? if ($item->hit): ?>
                                                <div class="hot-label hit">HIT</div>
                                            <? endif; ?>
                                            <? if ($item->sale): ?>
                                                <div class="hot-label sale">SALE %</div>
                                            <? endif; ?>
                                        </div>
                                    </a>
                                </div>
                                <div class="box-offer-caption text-left">
                                    <div class="pull-left">
                                        <div class="box-offer-title text-ubold">
                                            <a href="<?= Url::to(['tours/view', 'slug' => $item->slug]) ?>" class="text-gray-base">
                                                <?= EliveWidget::widget([
                                                    'model' => $item,
                                                    'attribute' => 'title',
                                                    'controller' => 'tours',
                                                ]) ?>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="pull-right">
                                        <div class="box-offer-price text-gray-base">
                                            <?= EliveWidget::widget([
                                                'model' => $item,
                                                'attribute' => 'new_price',
                                                'controller' => 'tours',
                                                'className' => 'inline-block'
                                            ]) ?>
                                            $</div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="offset-top-8 offset-xs-top-4">
                                        <ul class="list-inline list-inline-13 list-inline-marked list-inline-marked-offset-inverse-top text-silver-chalice text-extra-small">
                                            <li>
                                                <?= EliveWidget::widget([
                                                    'model' => $item,
                                                    'attribute' => 'short_program',
                                                    'controller' => 'tours',
                                                ]) ?>
                                            </li>
                                            <li>
                                                <?= EliveWidget::widget([
                                                    'model' => $item,
                                                    'attribute' => 'duration',
                                                    'controller' => 'tours',
                                                ]) ?>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <? endforeach; ?>
                    </div>
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
                    <? Pjax::end() ?>
                </div>

                <div class="cell-sm-10 cell-md-3 offset-top-50 offset-md-top-0 text-md-left">
                    <aside class="blog-aside box box-xs reveal-block bg-white">
                        <form id="tours-filter" action="<?= Url::to(['tours/index']) ?>" method="post">
                        <p class="text-gray-base text-ubold text-uppercase text-spacing-200">Поиск</p>
                        <div class="offset-top-20">
                                <div class="form-blog-search">
                                    <button class="form-search-submit"><span><img src="images/icon-34-16x21.png" width="16" height="21" alt="" class="img-responsive center-block"></span></button>
                                    <select name="ToursFilter[destination_id]" data-minimum-results-for-search="Infinity" data-constraints="@Required" class="form-control select-filter form-search-input input-sm">
                                        <option selected value>Все пункты</option>
                                        <? foreach ($destination as $item): ?>
                                            <option value="<?= $item->id ?>"><?= $item->title ?></option>
                                        <? endforeach; ?>
                                    </select>
                                </div>
                        </div>
                        <div class="offset-top-40">
                            <hr class="hr bg-gallery">
                        </div>
                        <div class="offset-top-35">
                            <p class="text-gray-base text-ubold text-uppercase text-spacing-200">Стоимость</p>
                            <div class="offset-top-15">
                                <div data-min="<?= $rangeMin['min'] ?>" data-max="<?= $rangeMax['max'] ?>" data-start="[<?= $rangeMin['min'] ?>, <?= $rangeMax['max'] ?>]" data-step="1" data-tooltip="true" data-min-diff="200" data-input=".rd-range-input-value-1" data-input-2=".rd-range-input-value-2" class="rd-range"></div>
                                <input name="ToursFilter[new_price][0]" class="rd-range-input-value-1 hidden">
                                <input name="ToursFilter[new_price][1]" class="rd-range-input-value-2 hidden">
                            </div>
                        </div>
                        <div class="offset-top-60">
                            <hr class="hr bg-gallery">
                        </div>
                        <div class="offset-top-30">
                            <p class="text-gray-base text-ubold text-uppercase text-spacing-200">Категории</p>
                            <div class="offset-top-15">
                                <ul class="list list-1 list-checkboxs text-left">
                                    <? foreach ($toursType as $key => $value): ?>
                                    <li>
                                        <label class="checkbox-inline checkbox-inline-left">
                                            <input name="ToursFilter[type_id][<?= $key ?>]" value="<?= $value->id ?>" class="checkbox-custom" type="checkbox"><span class="checkbox-custom-dummy"></span>
                                            <span class="text-small"><?= $value->title ?> (<?= $value->toursCount ?>)</span> </label>
                                    </li>
                                    <? endforeach; ?>
                                </ul>
                            </div>
                            <!--<div class="offset-top-25"><button type="submit" class="btn btn-primary btn-width-110">Поиск</button></div>-->
                        </div>
                        </form>
                    </aside>
                </div>

            </div>
        </div>
    </section>
</main>

<style>
    .box-offer-img-wrap{
        position: relative;
    }
    .hot-label-container{
        position: absolute;
        bottom: 2px;
        right: 0px;
        z-index: 1;
        font-size: 0;
    }
    .hot-label{
        display: inline-block;
        font-size: 10px;
        padding: 2px 5px;
        color: white;
        margin-right: 2px;
        border-radius: 3px;
    }
    .hot-label.hit{
        background-color: #dd4b39;
    }
    .hot-label.sale{
        background-color: #2d5cdd;
    }
</style>