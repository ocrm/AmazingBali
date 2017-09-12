
<?php
use yii\helpers\Url;
use yii\helpers\Html;
use app\widgets\selection\SelectionWidget;

/* @var $this yii\web\View */

$this->title = 'Подбор оборудования';
$this->registerMetaTag(['name' => 'description', 'content' => 'Подбор оборудования']);
$this->registerMetaTag(['name' => 'keywords', 'content' => '']);

$this->params['breadcrumbs'][] = $this->title;

?>
<div class="page-wrapper clearfix">
    
    <? foreach ($model as $product): ?>
        <div class="col-sm-6">
            <div class="product-container margin-right">

                <?= Html::img(
                    ($product->photos[0]->photo) ? $product->photos[0]->getUploadUrl('photo') : ''
                ) ?>

                <div class="product-info-block">
                    <p>
                        <?= $product->description_short ?>
                    </p>
                </div>
                <div class="product-title-bar">
                    <a href="<?=Url::to(['products/view', 'id' => $product->id]) ?>" class="product-read-info-btn"></a>
                    <?= $product->brand.' '.$product->title ?>
                </div>
            </div>
        </div>
    <? endforeach; ?>

    <? if ( ! $model): ?>
        <p>По вашему запросу ничего не нашлось</p>
    <? endif; ?>
</div>