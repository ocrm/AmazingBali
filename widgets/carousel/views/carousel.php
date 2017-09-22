<?
use yii\helpers\Html;
use app\widgets\elive\EliveWidget;
use yii\helpers\Url;
//TODO не правильно работает getUploadUrl()
?>

<div data-height="" data-min-height="400px" data-simulate-touch="false" data-slide-effect="fade" class="swiper-container swiper-slider">
    <div class="swiper-wrapper">
        <? foreach ($model as $key => $item): ?>
            <div data-slide-bg="<?= $item->getUploadUrl('image') ?>" class="swiper-slide"></div>
        <? endforeach; ?>
    </div>
    <div class="swiper-caption-absolute">
        <div class="shell">
            <div class="range range-xs-center">
                <div class="cell-lg-10">
                    <div>
                        <div class="text-white" data-shadow="<?= strip_tags($widget->widgetData[0]->data) ?>">
                            <?= EliveWidget::widget([
                                'model' => $widget->widgetData[0],
                                'attribute' => 'data',
                                'controller' => 'widgets'
                            ]) ?>
                        </div>
                    </div>
                    <div class="offset-top-8">
                        <div class="h6 text-white" data-shadow="<?= strip_tags($widget->widgetData[0]->data) ?>">
                            <?= EliveWidget::widget([
                                'model' => $widget->widgetData[1],
                                'attribute' => 'data',
                                'controller' => 'widgets'
                            ]) ?>
                        </div>
                    </div>
                    <div class="offset-top-30 offset-md-top-60 inset-left-20 inset-right-20 inset-sm-left-0 inset-sm-right-0">
                        <a href="<?= Url::to(['tours/index']) ?>" class="btn btn-primary">Посмотреть все Туры</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"><span class="icon icon-xxs icon-circle icon-filled-white mdi mdi-chevron-left text-gray"></span></div>
    <div class="swiper-button-next"><span class="icon icon-xxs icon-circle icon-filled-white mdi mdi-chevron-right text-gray"></span></div>
</div>
