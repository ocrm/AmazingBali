<?php
use yii\helpers\Url;
use yii\helpers\Html;
use app\widgets\elive\EliveWidget;
use yii\widgets\ActiveForm;


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
                    <div class="shell section-100 section-md-100 section-lg-top-170 section-lg-bottom-165">
                        <h1 class="reveal-md-inline-block" data-shadow="<?= strip_tags($page->parts[0]->data) ?>">
                            <?= EliveWidget::widget([
                                'model' => $page->parts[0],
                                'attribute' => 'data',
                                'controller' => 'pages',
                            ]) ?>
                        </h1>
                        <div class="offset-top-4">
                            <h6 class="text-italic" data-shadow="<?= strip_tags($page->parts[1]->data) ?>">
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
        <section class="section-80 section-md-top-125">
            <div class="shell">
                <div class="range range-xs-center range-lg-justify">
                    <div class="cell-sm-6 cell-sm-push-1 cell-lg-5 text-sm-left">
                        <h3>
                            <?= EliveWidget::widget([
                                'model' => $page->parts[2],
                                'attribute' => 'data',
                                'controller' => 'pages',
                            ]) ?>
                        </h3>
                        <div class="offset-top-15">
                            <?= EliveWidget::widget([
                                'model' => $page->parts[3],
                                'attribute' => 'data',
                                'controller' => 'pages',
                            ]) ?>
                        </div>
                        <div class="offset-top-20 offset-md-top-45"><a href="<?= Url::to(['tours/index']) ?>" class="btn btn-primary">смотреть туры</a></div>
                    </div>
                    <div class="cell-sm-5 cell-lg-preffix-1 offset-top-60 offset-sm-top-0 text-center">
                        <div class="range range-xs-bottom range-xs-left range-md-center">
                            <a href="/" class="reveal-inline-block">
                                <img src="/images/ab.jpg" alt="" class="img-responsive img-semi-transparent-inverse center-block">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-80 section-md-top-70 bg-wild-wand bg-wild-wand-team-member">
            <div class="shell">
                <div>
                    <h3>
                        <?= EliveWidget::widget([
                            'model' => $page->parts[4],
                            'attribute' => 'data',
                            'controller' => 'pages',
                        ]) ?>
                    </h3>
                </div>
                <div class="offset-top-10">
                    <?= EliveWidget::widget([
                        'model' => $page->parts[5],
                        'attribute' => 'data',
                        'controller' => 'pages',
                    ]) ?>
                </div>
                <div class="offset-top-40">
                    <div data-items="1" data-sm-items="3" data-md-items="3" data-stage-padding="5" data-loop="false" data-margin="30" data-mouse-drag="false" data-dots="true" data-nav="true" class="owl-carousel owl-dots-primary">
                        <? foreach ($personal as $item): ?>
                            <div class="owl-item">
                            <div class="team-member">
                                <div class="team-member-img-wrap team-member-img-wrap-border-darker">
                                    <img src="<?= $item->getUploadUrl('photo') ?>" width="100" height="100" alt="" class="img-circle img-responsive center-block">
                                </div>
                                <div class="team-member-body">
                                    <div class="offset-top-20">
                                        <div class="team-member-title text-small text-ubold text-uppercase text-spacing-200 text-gray-base">
                                            <?= EliveWidget::widget([
                                                'model' => $item,
                                                'attribute' => 'title',
                                                'controller' => 'personal',
                                            ]) ?>
                                        </div>
                                    </div>
                                    <div class="offset-top-8">
                                        <div class="team-member-description text-spacing-300 text-italic text-uppercase text-silver-chalice">
                                            <?= EliveWidget::widget([
                                                'model' => $item,
                                                'attribute' => 'position',
                                                'controller' => 'personal',
                                            ]) ?>
                                        </div>
                                    </div>
                                    <div class="offset-top-20">
                                        <div class="text-small text-italic text-silver-chalice">
                                            <?= EliveWidget::widget([
                                                'model' => $item,
                                                'attribute' => 'description',
                                                'controller' => 'personal',
                                            ]) ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <? endforeach; ?>
                    </div>
                </div>
                <!--<div class="offset-top-20 offset-md-top-45"><a href="" class="btn btn-primary">View More</a></div>-->
            </div>
        </section>
    </main>
