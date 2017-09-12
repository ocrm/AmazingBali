<?
use yii\helpers\Html;
use yii\helpers\Url;
use app\models\reviews\Reviews;
use app\widgets\elive\EliveWidget;
//TODO:Не работает как надо getUploadUrl
?>

<section data-wow-delay=".2s" class="section-70 section-md-bottom-80 wow fadeIn">
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
        <div class="range range-xs-center offset-top-40">
            <div class="cell-md-10 cell-lg-12">
                <div data-items="1" data-sm-items="2" data-lg-items="3" data-stage-padding="5" data-loop="false" data-margin="30" data-mouse-drag="false" data-dots="true" data-nav="true" class="owl-carousel owl-dots-primary">
                    <? foreach ($model as $item): ?>
                        <div class="owl-item">
                            <div class="team-member">
                                <div class="team-member-img-wrap"><img src="<?= $item->getUploadUrl('client_img') ?>" width="100" height="100" alt="" class="img-circle img-responsive center-block"></div>
                                <div class="team-member-body">
                                    <div class="offset-top-20">
                                        <div class="team-member-title text-small text-ubold text-uppercase text-spacing-200 text-gray-base">
                                            <?= EliveWidget::widget([
                                                'model' => $item,
                                                'attribute' => 'name',
                                                'controller' => 'reviews'
                                            ]) ?>
                                        </div>
                                    </div>
                                    <div class="offset-top-20">
                                        <div class="text-small text-italic text-silver-chalice">
                                            <?= EliveWidget::widget([
                                                'model' => $item,
                                                'attribute' => 'short_text',
                                                'controller' => 'reviews'
                                            ]) ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-member-hover-content offset-top-20 offset-lg-top-0">
                                        <?= Html::a('<button type="button" data-toggle="modal" data-target="#teamMember" class="btn btn-primary">Смотреть полностью</button>', ['reviews/view', 'id' => $item->id]) ?>
                                </div>
                            </div>
                        </div>
                    <? endforeach; ?>
                </div>
            </div>
        </div>
        <div class="offset-top-40">
            <?= Html::a('Больше отзывов', ['reviews/index'], ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
</section>

