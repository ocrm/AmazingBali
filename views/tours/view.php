<?php
use yii\helpers\Url;
use yii\helpers\Html;
use app\widgets\elive\EliveWidget;
use app\models\Status;
use app\widgets\social\SocialWidget;
use yii\bootstrap\ActiveForm;
/* @var $this yii\web\View */

$this->title = $model->meta_title;
$this->registerMetaTag(['name' => 'description', 'content' => $model->meta_description]);
$this->registerMetaTag(['name' => 'keywords', 'content' => $model->meta_keywords]);
?>

<section class="section-height-mac context-dark">

    <div data-on="false" data-md-on="true" class="rd-parallax">
        <div data-speed="0.25" data-type="media" data-url="<?= $model->getUploadUrl('tour_img') ?>" class="rd-parallax-layer"></div>
        <div data-speed="0" data-type="html" data-md-fade="false" class="rd-parallax-layer">
            <div class="shell">
                <div class="range">
                    <div class="range range-xs-center range-xs-middle section-100 section-md-top-145 section-md-bottom-100 section-lg-top-100 section-cover">
                        <div class="cell-xs-12">
                            <h1 class="reveal-md-inline-block" data-shadow="<?= $model->title ?>">
                                <?= EliveWidget::widget([
                                    'model' => $model,
                                    'attribute' => 'title',
                                    'controller' => 'tours',
                                ]) ?>
                            </h1>
                            <div class="offset-top-4">
                                <h6 class="text-italic" data-shadow="<?= $model->short_description ?>">
                                    <?= EliveWidget::widget([
                                        'model' => $model,
                                        'attribute' => 'short_description',
                                        'controller' => 'tours',
                                    ]) ?>
                                </h6>
                            </div>
                            <div class="offset-top-20 offset-md-top-40">
                                <a href="#" data-subject="<?= $model->title ?>" data-target="#booknow" data-form-type="short" class="btn btn-primary">БРОНИРОВАТЬ ТУР</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<main class="page-content">
    <section class="section-34 section-md-bottom-45 bg-alabaster">
        <div class="shell">
            <div class="range range-xs-center">
                <div class="cell-xs-10 cell-sm-8 cell-md-12">
                    <div class="range range-xs-center list-inline-dashed-vertival">
                        <div class="cell-xs-6 cell-sm-5 cell-md-3">
                            <div>
                                <p class="text-extra-small text-silver-chalice text-italic text-uppercase text-spacing-200">ПУНКТ НАЗНАЧЕНИЯ</p>
                            </div>
                            <div class="offset-top-0">
                                <div class="text-big text-ubold text-gray-base text-uppercase">
                                    <?= $model->destination->title ?>
                                </div>
                            </div>
                        </div>
                        <div class="cell-xs-6 cell-sm-5 cell-md-3 offset-top-40 offset-xs-top-0">
                            <div>
                                <p class="text-extra-small text-silver-chalice text-italic text-uppercase text-spacing-200">ПРОДОЛЖИТЕЛЬНОСТЬ</p>
                            </div>
                            <div class="offset-top-0">
                                <div class="text-big text-ubold text-gray-base text-uppercase">
                                    <?= EliveWidget::widget([
                                        'model' => $model,
                                        'attribute' => 'duration',
                                        'controller' => 'tours',
                                    ]) ?>
                                </div>
                            </div>
                        </div>
                        <div class="cell-xs-6 cell-sm-5 cell-md-3 offset-top-40 offset-md-top-0">
                            <div>
                                <p class="text-extra-small text-silver-chalice text-italic text-uppercase text-spacing-200">ЦЕНА</p>
                            </div>
                            <div class="offset-top-0">
                                <div class="text-big text-ubold text-gray-base text-uppercase">
                                    <span>от</span>
                                    <?= EliveWidget::widget([
                                        'model' => $model,
                                        'attribute' => 'new_price',
                                        'controller' => 'tours',
                                        'className' => 'inline-block'
                                    ]) ?>
                                    <span>$</span>
                                </div>
                            </div>
                        </div>
                        <div class="cell-xs-6 cell-sm-5 cell-md-3 offset-top-40 offset-md-top-0">
                            <div>
                                <p class="text-extra-small text-silver-chalice text-italic text-uppercase text-spacing-200">РАЗМЕР ГРУППЫ</p>
                            </div>
                            <div class="offset-top-0">
                                <div class="text-big text-ubold text-gray-base text-uppercase">
                                    <?= EliveWidget::widget([
                                        'model' => $model,
                                        'attribute' => 'places',
                                        'controller' => 'tours',
                                    ]) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-60 text-sm-left">
        <div class="shell">
            <div class="range range-xs-center">
                <div class="cell-md-10 cell-lg-12">
                    <div>
                        <?= EliveWidget::widget([
                            'model' => $model,
                            'attribute' => 'program_description',
                            'controller' => 'tours',
                            'className' => 'paragraph'
                        ]) ?>
                    </div>
                    <div class="offset-top-60">
                        <hr class="hr bg-alto">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <? if($model->activeProgram): ?>
    <section class="section-20 section-md-bottom-80">
        <div class="shell">
            <div>
                <?= EliveWidget::widget([
                    'model' => $page->parts[0],
                    'attribute' => 'data',
                    'controller' => 'pages',
                ]) ?>

            </div>
            <!--
            <div class="offset-top-0">
                <?php /**EliveWidget::widget([
                    'model' => $page->parts[1],
                    'attribute' => 'data',
                    'controller' => 'pages',
                ]) **/ ?>
            </div>
            -->
            <div class="offset-top-0 text-left">
                <div class="range range-xs-center offset-top-0">
                    <? foreach ($model->activeProgram as $item): ?>
                        <div class="cell-xs-6 cell-sm-6 cell-md-6 offset-top-50">
                            <div class="unit unit-horizontal unit-spacing-sm">
                                <div class="unit-left text-center">
                                    <div>
                                        <h3 class="text-ubold text-primary line-height-1">
                                            <?= EliveWidget::widget([
                                                'model' => $item,
                                                'attribute' => 'days',
                                                'controller' => 'tours-program',
                                            ]) ?>
                                        </h3>
                                    </div>
                                    <div class="offset-top-8 inset-left-10">
                                        <div class="text-extra-small text-spacing-1000 text-gray-base text-uppercase line-height-1">
                                            <?= EliveWidget::widget([
                                                'model' => $item,
                                                'attribute' => 'day_hour',
                                                'controller' => 'tours-program',
                                            ]) ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="unit-body offset-top-8">
                                    <div class="text-small text-ubold text-uppercase text-gray-base">
                                        <?= EliveWidget::widget([
                                            'model' => $item,
                                            'attribute' => 'location',
                                            'controller' => 'tours-program',
                                        ]) ?>
                                    </div>
                                </div>
                            </div>
                            <div class="offset-top-12 inset-left-10 inset-right-10">
                                <div>
                                    <hr class="hr bg-gallery">
                                </div>
                                <div class="offset-top-20">
                                    <div class="text-small text-silver-chalice">
                                        <?= EliveWidget::widget([
                                            'model' => $item,
                                            'attribute' => 'description',
                                            'controller' => 'tours-program',
                                            'className' => 'paragraph',
                                        ]) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <? endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <? endif; ?>

    <section>
        <div data-photo-swipe-gallery="gallery" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="5" data-stage-padding="20" data-loop="true" data-margin="6" data-mouse-drag="false" data-dots="true" data-nav="true" class="owl-carousel owl-carusel-inset-bottom owl-nav-type-3 owl-dots-primary">
            <? if ($model->activePhotos ): ?>
                <? foreach ($model->activePhotos as $key => $photo): ?>
                    <div class="owl-item">
                        <a data-photo-swipe-item="" data-size="1170x780" href="<?= $photo->getUploadUrl('photo') ?>" class="thumbnail-rayen"><span class="figure"><img width="370" height="310" src="<?= $photo->getThumbUploadUrl('photo') ?>" alt="" class="img-responsive center-block"><span class="figcaption"><span class="icon icon-xl fa fa-search-plus text-white"></span></span></span></a>
                    </div>
                <? endforeach; ?>
            <? else: ?>
                <?= Html::img('/img/empty.jpg', ['class' => 'active']) ?>
            <? endif; ?>
        </div>
    </section>

    <section id="prices" class="section-45 bg-wild-wand offset-top-80">
        <div class="shell">
            <div>
                <?= EliveWidget::widget([
                    'model' => $page->parts[2],
                    'attribute' => 'data',
                    'controller' => 'pages',
                ]) ?>
            </div>
            <!--
            <div class="offset-top-0">
                <?php /**EliveWidget::widget([
                        'model' => $page->parts[3],
                        'attribute' => 'data',
                        'controller' => 'pages',
                ]) **/ ?>
            </div>
            -->
            <div class="range range-xs-center offset-top-45">
                <? foreach ($model->activePrices as $price): ?>
                    <div class="cell-xs-8 cell-sm-5 cell-md-3 offset-top-50 offset-sm-top-0">
                        <div class="box-pricing<?= ($price->top) ? ' active' : '' ?>">
                            <div class="box-pricing-inner">
                                <div class="box-pricing-label">
                                    <svg viewbox="0 0 86 86" class="box-pricing-svg">
                                        <path style="fill:#2dc2b4" d="m 0.18220359,63.058649 0,-22.759147 20.25893341,-20.240853 20.258932,-20.24085223 22.741068,0 22.74107,0 0,3.00000003 c 0,2.718907 -0.305,3 -3.25507,3 -2.94829,0 -6.74123,3.487112 -40.244933,37.0000002 -20.344425,20.35 -36.4296454,37 -35.7449324,37 0.716591,0 1.244932,1.27318 1.244932,3 0,2.833333 -0.222222,3 -4,3 l -4.00000001,0 0,-22.759148 z"></path>
                                    </svg>
                                    <span>ПОПУЛЯРНЫЙ</span> </div>
                                <div class="text-bold text-ubold text-uppercase text-gray-base text-big">
                                    <?= EliveWidget::widget([
                                        'model' => $price,
                                        'attribute' => 'title',
                                        'controller' => 'tours-price',
                                    ]) ?>
                                </div>
                                <div class="box-pricing-price text-primary"><sup>$</sup>
                                    <?= EliveWidget::widget([
                                        'model' => $price,
                                        'attribute' => 'price',
                                        'controller' => 'tours-price',
                                        'className' => 'inline-block'
                                    ]) ?>
                                </div>
                                <div class="offset-top-8">
                                    <div class="text-extra-small text-silver-chalice">
                                        <?= EliveWidget::widget([
                                            'model' => $price,
                                            'attribute' => 'description',
                                            'controller' => 'tours-price',
                                            'className' => 'img-fixed'
                                        ]) ?>
                                    </div>
                                </div>
                                <div class="offset-top-25">
                                    <hr class="hr bg-gallery">
                                </div>
                                <div class="offset-top-25">
                                    <div class="list list-12 list-marked-icon text-gray-base text-small text-left">
                                        <?= EliveWidget::widget([
                                            'model' => $price,
                                            'attribute' => 'text',
                                            'controller' => 'tours-price',
                                        ]) ?>
                                    </div>
                                </div>
                            </div>
                            <div class="offset-top-4"><a href="#" data-subject="<?= $model->title.' - '.$price->title ?>" data-target="#booknow" data-form-type="full" class="btn btn-block btn-primary">Оставить заявку</a></div>
                        </div>
                    </div>
                <? endforeach ?>
            </div>
        </div>
    </section>

    <? if(count($model->reviews) > 0): ?>
        <section class="section-60">
        <div class="shell">
            <div>
                <?= EliveWidget::widget([
                    'model' => $page->parts[4],
                    'attribute' => 'data',
                    'controller' => 'pages',
                ]) ?>
            </div>
            <!--
            <div class="offset-top-0">
                <?php /**EliveWidget::widget([
                        'model' => $page->parts[1],
                        'attribute' => 'data',
                        'controller' => 'pages',
                        ]) **/ ?>
            </div>
            -->
            <div class="range range-xs-center offset-top-35">
                <div class="cell-sm-10">
                    <div data-items="1" data-stage-padding="0" data-loop="true" data-margin="0" data-mouse-drag="false" data-dots="true" data-nav="true" data-animation-in="fadeIn" data-animation-out="fadeOut" class="owl-carousel owl-dots-primary owl-navs-offset-inverse">
                        <? foreach ($model->reviews as $item): ?>
                            <div class="owl-item">
                                <blockquote class="quote quote-fullwidth">
                                    <div class="quote-fullwidth-img-wrap"><img src="<?= $item->getUploadUrl('tour_img') ?>" width="770" height="380" alt="" class="img-responsive center-block"></div>
                                    <div class="quote-fullwidth-body-top">
                                        <div>
                                            <label class="label-custom label-primary">
                                                <?= EliveWidget::widget([
                                                    'model' => $item,
                                                    'attribute' => 'cost',
                                                    'controller' => 'reviews'
                                                ]) ?>
                                            </label>
                                        </div>
                                        <div class="offset-top-8 offset-xs-top-15">
                                            <h5 class="text-spacing-400 text-ubold">
                                                <?= EliveWidget::widget([
                                                    'model' => $item,
                                                    'attribute' => 'tour_name',
                                                    'controller' => 'reviews',
                                                ]) ?>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="quote-fullwidth-body-bottom">
                                        <div class="unit unit-xs-middle unit-xs unit-xs-horizontal">
                                            <div class="unit-left"><img src="<?= $item->getUploadUrl('client_img') ?>" width="80" height="80" alt="" class="img-circle img-responsive"></div>
                                            <div class="unit-body">
                                                <div>
                                                    <div class="text-small text-ubold text-uppercase text-ubold text-spacing-200">
                                                        <a class="text-white">
                                                            <?= EliveWidget::widget([
                                                                'model' => $item,
                                                                'attribute' => 'name',
                                                                'controller' => 'reviews',
                                                            ]) ?>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="offset-top-4">
                                                    <div class="text-small text-italic">
                                                        <q>
                                                            <?= EliveWidget::widget([
                                                                'model' => $item,
                                                                'attribute' => 'long_text',
                                                                'controller' => 'reviews',
                                                            ]) ?>
                                                        </q>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                        <? endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <? endif; ?>
    <section class="section-34 section-lg-bottom-45 offset-top-20 bg-alabaster">
        <div class="shell">
            <div data-items="1" data-start-position="-5" data-sm-items="2" data-stage-padding="5" data-loop="false" data-margin="30" data-mouse-drag="false" data-dots="false" data-nav="false" class="owl-carousel owl-carousel-sm owl-navs-offset-0 owl-dots-primary owl-nav-alabaster list-inline-dashed-vertival">

                <div class="owl-item">
                    <div class="next-tour" style="background-image: url(<?=$prev->getThumbUploadUrl('tour_img')?>)"></div>
                    <div>
                        <p class="text-extra-small text-silver-chalice text-italic text-uppercase text-spacing-200">Предыдущий Тур</p>
                    </div>
                    <div class="offset-top-0">
                        <p class="text-big text-ubold text-uppercase"><a href="<?= Url::to(['tours/view', 'slug' => $prev->slug]) ?>" class="text-gray-base"><?= $prev->title ?></a></p>
                    </div>
                </div>

                <div class="owl-item">
                    <div class="next-tour" style="background-image: url(<?=$next->getThumbUploadUrl('tour_img')?>)"></div>
                    <div>
                        <p class="text-extra-small text-silver-chalice text-italic text-uppercase text-spacing-200">Следующий Тур</p>
                    </div>
                    <div class="offset-top-0">
                        <p class="text-big text-ubold text-uppercase"><a href="<?= Url::to(['tours/view', 'slug' => $next->slug]) ?>" class="text-gray-base"><?= $next->title ?></a></p>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>


<div id="booknow" tabindex="-1" role="dialog" class="modal modal-custom fade text-center">
    <div role="document" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="shell">
                    <div class="range range-xs-center range-xs-middle">
                        <div class="cell-sm-12">
                            <div class="modal-body-column-content">
                                <div>
                                    <h5 class="text-ubold form-subject-header"></h5>
                                </div>
                                <div class="offset-top-35">
                                    <div class="request-form">
                                        
                                    </div>
                                </div>
                                <div class="offset-top-35">
                                    <?= SocialWidget::widget() ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>