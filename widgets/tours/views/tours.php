<?
use yii\helpers\Html;
use yii\helpers\Url;
use app\widgets\elive\EliveWidget;

?>

<section class="section-80 section-md-top-70 bg-wild-wand">
    <div class="shell">
        <div>
            <?= EliveWidget::widget([
                'model' => $widget->widgetData[0],
                'attribute' => 'data',
                'controller' => 'widgets'
            ]) ?>
        </div>
        <div class="offset-top-10">
            <?= EliveWidget::widget([
                'model' => $widget->widgetData[1],
                'attribute' => 'data',
                'controller' => 'widgets'
            ]) ?>
        </div>
        <div class="range range-xs-center offset-top-45">
            <? foreach ($model as $item): ?>
                <div class="cell-sm-5 cell-md-4 offset-top-30">
                <div data-wow-delay=".2s" class="box-offer wow bounceIn">
                    <div class="box-offer-img-wrap">
                        <a href="<?= Url::to(['tours/view', 'slug' => $item->slug]) ?>">
                            <div class="read-more-overlay">
                                <div class="read-more-btn">подробнее</div>
                            </div>
                            <img src="<?= $item->getThumbUploadUrl('tour_img') ?>" width="370" height="310" alt="" class="img-responsive center-block">
                        </a>
                    </div>
                    <div class="box-offer-caption text-left">
                        <div class="pull-left">
                            <div class="box-offer-title text-ubold">
                                <a href="<?= Url::to(['tours/view', 'slug' => $item->slug]) ?>" class="text-gray-base">
                                    <?= EliveWidget::widget([
                                        'model' => $item,
                                        'attribute' => 'title',
                                        'controller' => 'tours'
                                    ]) ?>
                                </a>
                            </div>
                        </div>
                        <div class="pull-right">
                            <div class="box-offer-price text-gray-base"><?= $item->new_price ?> $</div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="offset-top-8 offset-xs-top-0">
                            <ul class="list-inline list-inline-13 list-inline-marked text-silver-chalice text-small">
                                <li>
                                    <?= EliveWidget::widget([
                                        'model' => $item,
                                        'attribute' => 'short_program',
                                        'controller' => 'tours'
                                    ]) ?>
                                </li>
                                <li>
                                    <?= EliveWidget::widget([
                                        'model' => $item,
                                        'attribute' => 'duration',
                                        'controller' => 'tours',
                                        'class' => 'inline-block'
                                    ]) ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <? endforeach; ?>
        </div>
        <div class="offset-top-50"><a href="<?= Url::to(['tours/index']) ?>" class="btn btn-primary">Все Туры</a></div>
    </div>
</section>