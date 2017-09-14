<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\widgets\carousel\CarouselWidget;
use app\assets\LiveEditAsset;
use app\models\tours\ToursType;
use app\models\pages\PageParts;
use app\widgets\elive\EliveWidget;
use app\widgets\social\SocialWidget;

AppAsset::register($this);
if(! Yii::$app->user->isGuest){
    LiveEditAsset::register($this);
}

$toursType = ToursType::find()->orderBy(['title' => SORT_ASC])->all();
$parts = PageParts::find()->where(['page_id' => 9])->all();

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="wide smoothscroll">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <?= Html::csrfMetaTags() ?>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <!— Yandex.Metrika counter —> <script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter45722304 = new Ya.Metrika({ id:45722304, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/45722304" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!— /Yandex.Metrika counter —>
    <!— Facebook Pixel Code —> <script> !function(f,b,e,v,n,t,s) {if(f.fbq)return;n=f.fbq=function(){n.callMethod? n.callMethod.apply(n,arguments):n.queue.push(arguments)}; if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0'; n.queue=[];t=b.createElement(e);t.async=!0; t.src=v;s=b.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t,s)}(window, document,'script', 'https://connect.facebook.net/en_US/fbevents.js'); fbq('init', '113567879339745'); fbq('track', 'PageView'); </script> <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=113567879339745&ev=PageVie.." /></noscript> <!— End Facebook Pixel Code —>
</head>
<body>
<?php $this->beginBody() ?>

<div class="page text-center">
    <header class="page-header slider-menu-position">
        <div class="contacts-header">
            <div class="inner-container">
                    <?= SocialWidget::widget() ?>
                    <?= EliveWidget::widget([
                        'model' => $parts[0],
                        'attribute' => 'data',
                        'controller' => 'pages',
                        'className' => 'phone'
                    ]) ?>
                    <?= EliveWidget::widget([
                        'model' => $parts[10],
                        'attribute' => 'data',
                        'controller' => 'pages',
                        'className' => 'mail'
                    ]) ?>
            </div>
        </div>
        <div class="rd-navbar-wrap">
            <nav data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-stick-up-offset="1px" data-lg-stick-up-offset="1px" class="rd-navbar rd-navbar-transparent rd-navbar-dark-stuck" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fullwidth" data-lg-layout="rd-navbar-static">
                <div class="rd-navbar-inner">
                    <div class="rd-navbar-panel">
                        <button data-rd-navbar-toggle=".rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
                        <div class="rd-navbar-brand veil reveal-md-block"><a href="/" class="brand-name"><img  height="65" src="/images/logo-light-299x60.png" alt=""></a></div>
                        <div class="rd-navbar-brand veil-md reveal-tablet-md-inline-block"><a href="/" class="brand-name"><img  height="45" src="/images/logo-dark-299x60.png" alt=""></a></div>
                    </div>
                    <div class="rd-navbar-nav-wrap">
                        <ul class="rd-navbar-nav">
                            <li><a href="/">Главная</a> </li>
                            <li><a href="<?= Url::to(['tours/index']) ?>">Туры</a>
                                <ul class="rd-navbar-dropdown">
                                    <? foreach ($toursType as $item): ?>
                                        <li><?= Html::a($item->title,['tours/index', 'type_id' => $item->id]) ?></li>
                                    <? endforeach; ?>
                                </ul>
                            </li>
                            <li><a href="<?= Url::to(['about/index']) ?>">О Нас</a>
                            </li>
                            <li><a href="<?= Url::to(['news/index']) ?>">Блог</a>
                            </li>
                            <li><a href="<?= Url::to(['contacts/index']) ?>">Контакты</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <main class="page-content">
        <?= $content ?>
    </main>
    <footer class="page-footer section-top-80 section-bottom-34 section-lg-bottom-15 text-sm-left">
        <div class="shell">
            <div class="range range-xs-center">
                <div class="cell-sm-8 cell-md-12">
                    <div class="range range-xs-center">
                        <div class="cell-sm-6 cell-md-3 cell-lg-4 cell-md-push-1"><a href="index.html"><img  height="65" src="/images/logo-dark-299x60.png" alt=""></a>
                            <div class="offset-top-20 inset-lg-right-80">
                                <div class="text-small">
                                    <?= EliveWidget::widget([
                                        'model' => $parts[1],
                                        'attribute' => 'data',
                                        'controller' => 'pages',
                                    ]) ?>
                                </div>
                            </div>
                        </div>
                        <div class="cell-sm-6 cell-md-3 cell-lg-2 cell-md-push-4">
                            <div class="text-big text-gray-base">
                                <?= EliveWidget::widget([
                                    'model' => $parts[8],
                                    'attribute' => 'data',
                                    'controller' => 'pages',
                                ]) ?>
                            </div>
                            <div class="offset-top-20">
                                <?= SocialWidget::widget() ?>
                            </div>
                            <div class="offset-top-20">
                                <a href="http://www.asitabali.org/" target="_blank">
                                    <img class="association association-1" src="/images/asita_image.jpg" alt="Asita">
                                </a>

                                <a href="http://baliweddingassociation.com/" target="_blank">
                                    <img class="association association-2" src="/images/bwa_image.jpg" alt="Bali wedding association">
                                </a>
                            </div>
                            <div class="offset-top-20 offset-md-top-40">
                                <!--<button type="button" data-toggle="modal" data-target="#subscribe" style="min-width:160px;" class="btn btn-primary">Subscribe</button>-->
                            </div>
                        </div>
                        <div class="cell-xs-8 cell-sm-12 cell-md-3 offset-top-40 offset-md-top-0 cell-md-push-2">
                            <div class="text-big text-gray-base">
                                <?= EliveWidget::widget([
                                    'model' => $parts[2],
                                    'attribute' => 'data',
                                    'controller' => 'pages',
                                ]) ?>
                            </div>

                            <div class="offset-top-8 offset-sm-top-20">
                                <address class="contact-info text-left">
                                    <div class="range range-xs-center">
                                        <div class="cell-sm-12">
                                            <div>
                                                <div class="reveal-block text-small">
                                                    <span class="unit unit-horizontal unit-spacing-xs">
                                                        <span class="unit-left">
                                                            <img src="/images/icon-01-16x21.png" width="16" height="21" alt="" class="img-responsive center-block offset-top-4">
                                                        </span>
                                                        <span class="unit-body">
                                                            <?= EliveWidget::widget([
                                                                'model' => $parts[3],
                                                                'attribute' => 'data',
                                                                'controller' => 'pages',
                                                            ]) ?>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="offset-top-20">
                                                <div class="reveal-inline-block text-small">
                                                        <span class="unit unit-middle unit-horizontal unit-spacing-xs">
                                                            <span class="unit-left">
                                                                <img src="/images/icon-02-19x19.png" width="19" height="19" alt="" class="img-responsive center-block">
                                                            </span>
                                                            <span class="unit-body">
                                                                <?= EliveWidget::widget([
                                                                    'model' => $parts[4],
                                                                    'attribute' => 'data',
                                                                    'controller' => 'pages',
                                                                ]) ?>
                                                            </span>
                                                        </span>
                                                </div>
                                            </div>
                                            <!--
                                            <div class="offset-top-20">
                                                <div class="reveal-inline-block text-small">
                                                        <span class="unit unit-middle unit-horizontal unit-spacing-xs">
                                                            <span class="unit-left">
                                                                <img src="/images/icon-03-12x20.png" width="12" height="20" alt="" class="img-responsive center-block">
                                                            </span>
                                                            <span class="unit-body">
                                                                <?= EliveWidget::widget([
                                                                    'model' => $parts[5],
                                                                    'attribute' => 'data',
                                                                    'controller' => 'pages',
                                                                ]) ?>
                                                            </span>
                                                        </span>
                                                </div>
                                            </div>
                                            -->
                                            <div class="offset-top-20">
                                                <div>
                                                    <div class="reveal-inline-block text-small">
                                                            <span class="unit unit-middle unit-horizontal unit-spacing-xs">
                                                                <span class="unit-left">
                                                                    <img src="/images/icon-04-20x13.png" width="20" height="13" alt="" class="img-responsive center-block">
                                                                </span>
                                                                <span class="unit-body">
                                                                    <span>
                                                                        <?= EliveWidget::widget([
                                                                            'model' => $parts[6],
                                                                            'attribute' => 'data',
                                                                            'controller' => 'pages',
                                                                        ]) ?>
                                                                    </span>
                                                                </span>
                                                            </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--
                                            <div class="offset-top-20">
                                                <div class="reveal-inline-block text-small">
                                                        <span class="unit unit-middle unit-horizontal unit-spacing-xs">
                                                            <span class="unit-left">
                                                                <img src="/images/icon-05-19x19.png" width="19" height="19" alt="" class="img-responsive center-block">
                                                            </span>
                                                            <span class="unit-body">
                                                                <?= EliveWidget::widget([
                                                                    'model' => $parts[7],
                                                                    'attribute' => 'data',
                                                                    'controller' => 'pages',
                                                                ]) ?>
                                                            </span>
                                                        </span>
                                                </div>
                                            </div>
                                            -->
                                        </div>
                                    </div>
                                </address>
                            </div>
                        </div>
                        <div class="cell-xs-8 cell-sm-12 cell-md-3 offset-top-40 offset-md-top-0 cell-md-push-2">
                            <div class="text-big text-gray-base">
                                <?= EliveWidget::widget([
                                    'model' => $parts[11],
                                    'attribute' => 'data',
                                    'controller' => 'pages',
                                ]) ?>
                            </div>
                            <div class="offset-top-8 offset-sm-top-20">
                                <address class="contact-info text-left">
                                    <div class="range range-xs-center">
                                        <div class="cell-sm-12">
                                            <div class="offset-top-0">
                                                <div class="reveal-inline-block text-small">
                                                    <ul>
                                                        <? foreach ($toursType as $key => $item): ?>
                                                            <li class="offset-top-<?= ($key == 0) ? '0' : '20' ?>"><?= Html::a($item->title,['tours/index', 'type_id' => $item->id]) ?></li>
                                                        <? endforeach; ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offset-top-110">
                <div class="hr bg-gallery"></div>
            </div>
            <div class="range range-xs-center range-sm-justify offset-top-8">
                <div class="cell-sm-5 cell-md-4 text-sm-left">
                    <div class="text-extra-small">
                        <?= EliveWidget::widget([
                            'model' => $parts[9],
                            'attribute' => 'data',
                            'controller' => 'pages',
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<div id="form-output-global" class="snackbars"></div>
<div tabindex="-1" role="dialog" aria-hidden="true" class="pswp">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <button title="Close (Esc)" class="pswp__button pswp__button--close"></button>
                <button title="Share" class="pswp__button pswp__button--share"></button>
                <button title="Toggle fullscreen" class="pswp__button pswp__button--fs"></button>
                <button title="Zoom in/out" class="pswp__button pswp__button--zoom"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>
            <button title="Previous (arrow left)" class="pswp__button pswp__button--arrow--left"></button>
            <button title="Next (arrow right)" class="pswp__button pswp__button--arrow--right"></button>
            <div class="pswp__caption">
                <div class="pswp__caption__cent"></div>
            </div>
            <div class="pswp__counter"></div>
        </div>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>