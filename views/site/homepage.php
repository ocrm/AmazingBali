<?php
use yii\helpers\Url;
use yii\helpers\Html;
use app\widgets\elive\EliveWidget;
use app\widgets\reviews\ReviewsWidget;
use app\widgets\carousel\CarouselWidget;
use app\widgets\tours\ToursWidget;
/* @var $this yii\web\View */

$this->title = $page->title;
$this->registerMetaTag(['name' => 'description', 'content' => $page->meta_description]);
$this->registerMetaTag(['name' => 'keywords', 'content' => $page->meta_keywords]);
?>

<?= CarouselWidget::widget() ?>

<?= ToursWidget::widget() ?>

<section data-wow-delay=".2s" class="wow fadeIn">
    <div data-on="false" data-md-on="true" class="rd-parallax">
        <div data-speed="0.25" data-type="media" data-url="images/komod.jpg" class="rd-parallax-layer"></div>
        <div data-speed="0" data-type="html" data-md-fade="false" class="rd-parallax-layer">
            <div class="bg-overlay-inverse-md-darker">
                <div class="shell section-80 section-md-top-40 section-md-bottom-40">
                    <?= EliveWidget::widget([
                        'model' => $page->parts[0],
                        'attribute' => 'data',
                        'controller' => 'pages'
                    ]) ?>
                    <div class="range range-xs-center range-md-left text-xs-left offset-top-60">
                        <div class="cell-sm-6 cell-md-4">
                            <div class="box box-sm bg-white reveal-lg-block">
                                <div class="unit unit-xs unit-xs-horizontal unit-spacing-sm">
                                    <div class="unit-left">
                                        <div class="icon-circle icon-circle-lg icon-filled-turquoise center-block"><img src="images/icon-11-20x18.png" width="20" height="18" alt="" class="img-responsive center-block"></div>
                                    </div>
                                    <div class="unit-body offset-top-4 offset-xs-top-0">
                                        <div>
                                            <?= EliveWidget::widget([
                                                'model' => $page->parts[1],
                                                'attribute' => 'data',
                                                'controller' => 'pages'
                                            ]) ?>
                                        </div>
                                        <div class="offset-top-4">
                                            <?= EliveWidget::widget([
                                                'model' => $page->parts[2],
                                                'attribute' => 'data',
                                                'controller' => 'pages'
                                            ]) ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cell-sm-6 cell-md-4 offset-top-45 offset-sm-top-0">
                            <div class="box box-sm bg-white reveal-lg-block">
                                <div class="unit unit-xs unit-xs-horizontal unit-spacing-sm">
                                    <div class="unit-left">
                                        <div class="icon-circle icon-circle-lg icon-filled-turquoise center-block"><img src="images/icon-06-14x21.png" width="14" height="21" alt="" class="img-responsive center-block"></div>
                                    </div>
                                    <div class="unit-body offset-top-4 offset-xs-top-0">
                                        <div>
                                            <div class="offset-top-4">
                                                <?= EliveWidget::widget([
                                                    'model' => $page->parts[3],
                                                    'attribute' => 'data',
                                                    'controller' => 'pages'
                                                ]) ?>
                                            </div>
                                        </div>
                                        <div class="offset-top-4">
                                            <div class="offset-top-4">
                                                <?= EliveWidget::widget([
                                                    'model' => $page->parts[4],
                                                    'attribute' => 'data',
                                                    'controller' => 'pages'
                                                ]) ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cell-sm-6 cell-md-4 offset-top-30 offset-md-top-0">
                            <div class="box box-sm bg-white reveal-lg-block">
                                <div class="unit unit-xs unit-xs-horizontal unit-spacing-sm">
                                    <div class="unit-left">
                                        <div class="icon-circle icon-circle-lg icon-filled-turquoise center-block"><img src="images/icon-07-21x18.png" width="21" height="18" alt="" class="img-responsive center-block"></div>
                                    </div>
                                    <div class="unit-body offset-top-4 offset-xs-top-0">
                                        <div>
                                            <div class="offset-top-4">
                                                <?= EliveWidget::widget([
                                                    'model' => $page->parts[5],
                                                    'attribute' => 'data',
                                                    'controller' => 'pages'
                                                ]) ?>
                                            </div>
                                        </div>
                                        <div class="offset-top-4">
                                            <div class="offset-top-4">
                                                <?= EliveWidget::widget([
                                                    'model' => $page->parts[6],
                                                    'attribute' => 'data',
                                                    'controller' => 'pages'
                                                ]) ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cell-sm-6 cell-md-4 offset-top-50">
                            <div class="box box-sm bg-white reveal-lg-block">
                                <div class="unit unit-xs unit-xs-horizontal unit-spacing-sm">
                                    <div class="unit-left">
                                        <div class="icon-circle icon-circle-lg icon-filled-turquoise center-block"><img src="images/icon-08-17x19.png" width="17" height="19" alt="" class="img-responsive center-block"></div>
                                    </div>
                                    <div class="unit-body offset-top-4 offset-xs-top-0">
                                        <div>
                                            <?= EliveWidget::widget([
                                                'model' => $page->parts[7],
                                                'attribute' => 'data',
                                                'controller' => 'pages'
                                            ]) ?>
                                        </div>
                                        <div class="offset-top-4">
                                            <?= EliveWidget::widget([
                                                'model' => $page->parts[8],
                                                'attribute' => 'data',
                                                'controller' => 'pages'
                                            ]) ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cell-sm-6 cell-md-4 offset-top-50">
                            <div class="box box-sm bg-white reveal-lg-block">
                                <div class="unit unit-xs unit-xs-horizontal unit-spacing-sm">
                                    <div class="unit-left">
                                        <div class="icon-circle icon-circle-lg icon-filled-turquoise center-block"><img src="images/icon-09-20x20.png" width="20" height="20" alt="" class="img-responsive center-block"></div>
                                    </div>
                                    <div class="unit-body offset-top-4 offset-xs-top-0">
                                        <div>
                                            <?= EliveWidget::widget([
                                                'model' => $page->parts[9],
                                                'attribute' => 'data',
                                                'controller' => 'pages'
                                            ]) ?>
                                        </div>
                                        <div class="offset-top-4">
                                            <?= EliveWidget::widget([
                                                'model' => $page->parts[10],
                                                'attribute' => 'data',
                                                'controller' => 'pages'
                                            ]) ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cell-sm-6 cell-md-4 offset-top-50">
                            <div class="box box-sm bg-white reveal-lg-block">
                                <div class="unit unit-xs unit-xs-horizontal unit-spacing-sm">
                                    <div class="unit-left">
                                        <div class="icon-circle icon-circle-lg icon-filled-turquoise center-block"><img src="images/icon-10-25x24.png" width="25" height="24" alt="" class="img-responsive center-block"></div>
                                    </div>
                                    <div class="unit-body offset-top-4 offset-xs-top-0">
                                        <div>
                                            <?= EliveWidget::widget([
                                                'model' => $page->parts[11],
                                                'attribute' => 'data',
                                                'controller' => 'pages'
                                            ]) ?>
                                        </div>
                                        <div class="offset-top-4">
                                            <?= EliveWidget::widget([
                                                'model' => $page->parts[12],
                                                'attribute' => 'data',
                                                'controller' => 'pages'
                                            ]) ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= ReviewsWidget::widget() ?>
<section data-wow-delay=".2s" class="context-dark wow fadeIn section-parallax">
    <div data-on="false" data-md-on="true" class="rd-parallax">
        <div data-speed="0.05" data-type="media" data-url="images/navag.jpg" class="rd-parallax-layer"></div>
        <div data-speed="0" data-type="html" data-md-fade="false" class="rd-parallax-layer">
            <div class="bg-overlay-inverse-md-darker">
                <div class="shell section-80 section-lg-top-145 section-lg-bottom-295">
                    <div class="range range-xs-center range-md-right text-md-right">
                        <div class="cell-sm-10 cell-md-7">
                            <div>
                                <?= EliveWidget::widget([
                                    'model' => $page->parts[13],
                                    'attribute' => 'data',
                                    'controller' => 'pages'
                                ]) ?>
                            </div>
                            <div class="offset-top-30 offset-md-top-40"><?= Html::a('Найдите свой идеальный тур', ['/tours/index'], ['class' => 'btn btn-primary']) ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-80 section-md-bottom-70">
    <div class="shell">
        <div class="range range-xs-center">
            <div class="cell-xs-10 cell-sm-8 cell-md-12">
                <div class="range range-xs-center range-xs-middle">
                    <div data-wow-delay=".6s" class="cell-xs-6 cell-md-3 wow bounceIn">
                        <svg x="0px" y="0px" width="48px" height="60px" viewbox="0 0 32 40">
                            <polygon fill="#FF9800" points="16,33 11,27 11,21 21,21 21,27 "></polygon>
                            <g>
                                <path fill="#FFA726" d="M25,14.15V16c0,0.337-0.021,0.668-0.057,0.994C24.963,16.995,24.981,17,25,17c1.105,0,2-0.895,2-2                    c0-0.739-0.405-1.377-1-1.723V13.3L25,14.15z"></path>
                                <path fill="#FFA726" d="M7,14.15L6,13.3v-0.023C5.405,13.623,5,14.261,5,15c0,1.105,0.895,2,2,2c0.019,0,0.037-0.005,0.057-0.006                    C7.021,16.668,7,16.337,7,16V14.15z"></path>
                                <path fill="#FFB74D" d="M25,14.15L24,15v-5l-4-4L8,10v5l-1-0.85V16c0,0.337,0.021,0.668,0.057,0.994C7.546,21.519,11.337,25,16,25                    s8.454-3.481,8.943-8.006C24.979,16.668,25,16.337,25,16V14.15z M12,16c-0.552,0-1-0.448-1-1s0.448-1,1-1s1,0.448,1,1                    S12.552,16,12,16z M20,16c-0.552,0-1-0.448-1-1s0.448-1,1-1s1,0.448,1,1S20.552,16,20,16z"></path>
                                <path fill="#FF5722" d="M6,11v2.277V13.3l1,0.85L8,15v-5l12-4l4,4v5l1-0.85l1-0.85v-0.023V11c0-4-1-8-6-9l-1-2h-3C9.9,0,6,4.9,6,11                    z"></path>
                                <circle fill="#784719" cx="20" cy="15" r="1"></circle>
                                <circle fill="#784719" cx="12" cy="15" r="1"></circle>
                                <path fill="#CFD8DC" d="M14,30l2-2l-5-1c0,0-11,2-11,13h14l1-9L14,30z"></path>
                                <path fill="#CFD8DC" d="M21,27l-5,1l2,2l-1,1l1,9h14C32,29,21,27,21,27z"></path>
                                <polygon fill="#3F51B5" points="18,30 16,28 14,30 15,31 14,40 18,40 17,31 	"></polygon>
                            </g>
                        </svg>
                        <div class="offset-top-15 offset-md-top-20">
                            <div data-from="0" data-to="624" class="counter h3 text-ubold text-gray-base"></div>
                        </div>
                        <div class="offset-top-4">
                            <p class="text-italic">Счастливых туристов</p>
                        </div>
                    </div>
                    <div data-wow-delay=".2s" class="cell-xs-6 cell-md-3 offset-top-60 offset-xs-top-0 wow bounceIn">
                        <svg x="0px" y="0px" width="72px" height="54px" viewbox="0 0 48 35.7">
                            <polygon fill="#673AB7" points="0,35.7 33,35.7 16.5,11.7 "></polygon>
                            <polygon fill="#9575CD" points="19.2,35.7 48,35.7 33.6,17.7 "></polygon>
                            <path fill="#40C4FF" d="M42.9,0C43.6,1.1,44,2.3,44,3.7c0,3.9-3.1,7-7,7c-0.7,0-1.3-0.1-1.9-0.3c1.2,2,3.4,3.3,5.9,3.3                  c3.9,0,7-3.1,7-7C48,3.5,45.9,0.8,42.9,0z"></path>
                        </svg>
                        <div class="offset-top-15 offset-md-top-20">
                            <div data-from="0" data-to="112" class="counter h3 text-ubold text-gray-base"></div>
                        </div>
                        <div class="offset-top-4">
                            <p class="text-italic">Невероятных туров</p>
                        </div>
                    </div>
                    <div data-wow-delay=".4s" class="cell-xs-6 cell-md-3 offset-top-60 offset-md-top-0 wow bounceIn">
                        <svg x="0px" y="0px" width="60px" height="56px" viewbox="0 0 40 37">
                            <g>
                                <path fill="none" d="M23,2h-6c-0.6,0-1,0.4-1,1v1h8V3C24,2.4,23.6,2,23,2z"></path>
                                <path fill="#263238" d="M5,37h2c0.6,0,1-0.4,1-1H4C4,36.6,4.4,37,5,37z"></path>
                                <path fill="#263238" d="M33,37h2c0.6,0,1-0.4,1-1h-4C32,36.6,32.4,37,33,37z"></path>
                                <path fill="#37474F" d="M16,3c0-0.6,0.4-1,1-1h6c0.6,0,1,0.4,1,1v1h2V3c0-1.7-1.3-3-3-3h-6c-1.7,0-3,1.3-3,3v1h2V3z"></path>
                                <path fill="#78909C" d="M36,4H26h-2h-8h-2H4C1.8,4,0,5.8,0,8v24c0,2.2,1.8,4,4,4h4h24h4c2.2,0,4-1.8,4-4V8C40,5.8,38.2,4,36,4z"></path>
                            </g>
                        </svg>
                        <div class="offset-top-15 offset-md-top-20">
                            <div data-from="0" data-to="594" class="counter h3 text-ubold text-gray-base"></div>
                        </div>
                        <div class="offset-top-4">
                            <p class="text-italic">Партнёроа</p>
                        </div>
                    </div>
                    <div data-wow-delay=".8s" class="cell-xs-6 cell-md-3 offset-top-60 offset-md-top-0 wow bounceIn">
                        <svg x="0px" y="0px" width="60px" height="56px" viewbox="0 0 40 37">
                            <g>
                                <polygon fill="#558B2F" points="24.2,24.2 23.189,21 22.795,21 21.7,24.2 	"></polygon>
                                <path fill="#558B2F" d="M36,14h-3v3c0,2.2-1.8,4-4,4h-3.953l2.553,6.9h-2.2l-0.6-2.1h-3.6l-0.7,2.1h-2.2l2.553-6.9H7v8                    c0,2.2,1.8,4,4,4h25l4,4V18C40,15.8,38.2,14,36,14z"></path>
                                <polygon fill="#1B5E20" points="24.2,24.2 21.7,24.2 22.795,21 20.853,21 18.3,27.9 20.5,27.9 21.2,25.8 24.8,25.8 25.4,27.9                     27.6,27.9 25.047,21 23.189,21 	"></polygon>
                                <path fill="#8BC34A" d="M15.4,12.6c0.2,0.3,0.4,0.5,0.7,0.6c0.3,0.1,0.6,0.2,0.9,0.2c0.7,0,1.3-0.3,1.6-0.8                    c0.4-0.6,0.6-1.4,0.6-2.5V9.7c0-1.1-0.2-1.9-0.6-2.4c-0.4-0.6-0.9-0.8-1.6-0.8s-1.3,0.3-1.6,0.8c-0.4,0.6-0.6,1.4-0.6,2.4v0.5                    c0,0.5,0.1,1,0.2,1.4C15.1,12,15.2,12.4,15.4,12.6z"></path>
                                <path fill="#8BC34A" d="M22.795,21h0.395h1.858H29c2.2,0,4-1.8,4-4v-3V4c0-2.2-1.8-4-4-4H4C1.8,0,0,1.8,0,4v21l4-4h3h13.853H22.795                    z M17.8,15.2c-0.2,0-0.5,0.1-0.8,0.1c-0.6,0-1.2-0.1-1.8-0.3c-0.5-0.2-1-0.6-1.4-1c-0.4-0.4-0.7-1-0.9-1.6                    c-0.2-0.6-0.3-1.3-0.3-2.1V9.9c0-0.8,0.1-1.5,0.3-2.1c0.2-0.6,0.5-1.2,0.9-1.6c0.4-0.4,0.8-0.8,1.4-1C15.7,5,16.3,4.9,17,4.9                    c0.6,0,1.2,0.1,1.8,0.3c0.5,0.2,1,0.6,1.4,1c0.4,0.4,0.7,1,0.9,1.6c0.2,0.6,0.3,1.3,0.3,2.1v0.3c0,1-0.2,1.8-0.5,2.5                    c-0.3,0.7-0.7,1.3-1.3,1.7l1.7,1.3L20,16.9L17.8,15.2z"></path>
                                <path fill="#FFFFFF" d="M19.6,14.4c0.6-0.4,1-1,1.3-1.7c0.3-0.7,0.5-1.5,0.5-2.5V9.9c0-0.8-0.1-1.5-0.3-2.1                    c-0.2-0.6-0.5-1.2-0.9-1.6c-0.4-0.4-0.9-0.8-1.4-1C18.2,5,17.6,4.9,17,4.9c-0.7,0-1.3,0.1-1.8,0.3c-0.6,0.2-1,0.6-1.4,1                    c-0.4,0.4-0.7,1-0.9,1.6c-0.2,0.6-0.3,1.3-0.3,2.1v0.4c0,0.8,0.1,1.5,0.3,2.1c0.2,0.6,0.5,1.2,0.9,1.6c0.4,0.4,0.9,0.8,1.4,1                    c0.6,0.2,1.2,0.3,1.8,0.3c0.3,0,0.6-0.1,0.8-0.1l2.2,1.7l1.3-1.2L19.6,14.4z M14.8,9.7c0-1,0.2-1.8,0.6-2.4                    c0.3-0.5,0.9-0.8,1.6-0.8s1.2,0.2,1.6,0.8c0.4,0.5,0.6,1.3,0.6,2.4v0.4c0,1.1-0.2,1.9-0.6,2.5c-0.3,0.5-0.9,0.8-1.6,0.8                    c-0.3,0-0.6-0.1-0.9-0.2c-0.3-0.1-0.5-0.3-0.7-0.6c-0.2-0.2-0.3-0.6-0.4-1c-0.1-0.4-0.2-0.9-0.2-1.4V9.7z"></path>
                            </g>
                        </svg>
                        <div class="offset-top-15">
                            <div data-from="0" data-to="28" class="counter h3 text-ubold text-gray-base"></div>
                        </div>
                        <div class="offset-top-4">
                            <p class="text-italic">Отзывов клиентов</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="context-dark wow fadeIn section-parallax">
    <div data-on="false" data-md-on="true" class="rd-parallax">
        <div data-speed="0.15" data-type="media" data-url="images/1920x900.jpg" class="rd-parallax-layer"></div>
        <div data-speed="0" data-type="html" data-md-fade="false" class="rd-parallax-layer">
            <div class="bg-overlay-inverse-md-darker">
                <div class="shell section-80 section-lg-top-145 section-lg-bottom-295">
                    <div class="range range-xs-center range-md-left text-md-left">
                        <div class="cell-sm-10 cell-md-7">
                            <div>
                            <?= EliveWidget::widget([
                                'model' => $page->parts[14],
                                'attribute' => 'data',
                                'controller' => 'pages'
                            ]) ?>
                            </div>
                            <div class="offset-top-30 offset-md-top-40"><?= Html::a('Найти свой тур', ['/tours/index'], ['class' => 'btn btn-primary']) ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
