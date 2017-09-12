<?php
use yii\helpers\Url;
use yii\helpers\Html;
use app\models\reviews\Reviews;
use app\widgets\elive\EliveWidget;
use app\widgets\reviews\ReviewsWidget;
?>

<section class="section-height-mac context-dark">
    <div data-on="false" data-md-on="true" class="rd-parallax">
        <div data-speed="0.25" data-type="media" data-url="images/1920x900.jpg" class="rd-parallax-layer"></div>
        <div data-speed="0" data-type="html" data-md-fade="false" class="rd-parallax-layer">
            <div class="bg-overlay-darker">
                <div class="shell section-34 section-md-100 section-lg-top-170 section-lg-bottom-165">
                    <h1 class="veil reveal-md-inline-block">Testimonials</h1>
                    <div class="offset-top-4">
                        <h6 class="text-italic">The latest reviews submitted by our clients</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<main class="page-content">
    <section class="section-60">
        <div class="shell">
            <div>
                <h3>
                    <?= EliveWidget::widget([
                        'model' => $model,
                        'attribute' => 'title',
                        'controller' => 'reviews',
                    ]) ?>
                </h3>
            </div>
            <div class="offset-top-0">
                <div>
                    <?= EliveWidget::widget([
                        'model' => $model,
                        'attribute' => 'description',
                        'controller' => 'reviews'
                    ]) ?>
                </div>
            </div>
            <div class="range range-xs-center offset-top-35">
                <div class="cell-sm-10">
                    <div data-items="1" data-stage-padding="0" data-loop="false" data-margin="0" data-mouse-drag="false" data-dots="true" data-nav="true" data-animation-in="fadeIn" data-animation-out="fadeOut" class="owl-carousel owl-dots-primary owl-navs-offset-inverse">
                        <div class="owl-item">
                            <blockquote class="quote quote-fullwidth">
                                <div class="quote-fullwidth-img-wrap"><img src="<?= $model->getUploadUrl('tour_img') ?>" width="770" height="380" alt="" class="img-responsive center-block"></div>
                                <div class="quote-fullwidth-body-top">
                                    <div>
                                        <label class="label-custom label-primary">
                                            <?= EliveWidget::widget([
                                                'model' => $model,
                                                'attribute' => 'cost',
                                                'controller' => 'reviews'
                                            ]) ?>
                                        </label>
                                    </div>
                                    <div class="offset-top-8 offset-xs-top-15">
                                        <h5 class="text-spacing-400 text-ubold">
                                            <?= EliveWidget::widget([
                                                'model' => $model,
                                                'attribute' => 'tour_name',
                                                'controller' => 'reviews',
                                            ]) ?>
                                        </h5>
                                    </div>
                                </div>
                                <div class="quote-fullwidth-body-bottom">
                                    <div class="unit unit-xs-middle unit-xs unit-xs-horizontal">
                                        <div class="unit-left"><img src="<?= $model->getUploadUrl('client_img') ?>" width="80" height="80" alt="" class="img-circle img-responsive"></div>
                                        <div class="unit-body">
                                            <div>
                                                <div class="text-small text-ubold text-uppercase text-ubold text-spacing-200">
                                                    <a href="#" class="text-white">
                                                        <?= EliveWidget::widget([
                                                            'model' => $model,
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
                                                        'model' => $model,
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-70 section-md-bottom-80 bg-wild-wand bg-wild-wand-team-member">
        <?= ReviewsWidget::widget() ?>
    </section>
</main>