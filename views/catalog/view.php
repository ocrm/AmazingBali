<?php
use yii\helpers\Url;
use yii\helpers\Html;
use app\widgets\elive\EliveWidget;
/* @var $this yii\web\View */

$this->title = $model->name;
$this->registerMetaTag(['name' => 'description', 'content' => $page->meta_description]);
$this->registerMetaTag(['name' => 'keywords', 'content' => $page->meta_keywords]);

$this->params['breadcrumbs'][] = ['label' => $model->parents(1)->one()->name, 'url' => ['pages/view', 'id' => $model->parents(1)->one()->page_id]];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="page-wrapper">

<? if ($model->isLeaf()): ?>

        <div class="clearfix">
            <? foreach ($model->products as $product): ?>
            <div class="col-sm-6">
                <div class="product-container margin-right">
                    <?= Html::img($product->photos[0]->getUploadUrl('photo')) ?>
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
        </div>

<? else: ?>

    <? foreach ($model->children(1)->all() as $child): ?>

        <div class="section-wrapper">
            <div class="page-title-block clearfix">
                <div class="col-md-3">
                    <div class="anchor" id="<?= $child->id ?>"></div>
                    <span><?= $child->name ?></span>
                </div>
                <div class="col-md-9 description">
                        <?= EliveWidget::widget([
                            'model' => $child,
                            'attribute' => 'description',
                            'controller' => 'category'
                        ]) ?>
                </div>
            </div>
        </div>

        <div class="clearfix">
            <? foreach ($child->products as $product): ?>
                <div class="col-sm-6">
                    <div class="product-container margin-right">
                        
                        <?= Html::img(
                            ($product->photos[0]->photo) ? $product->photos[0]->getUploadUrl('photo') : '/img/empty.jpg'
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
        </div>

    <? endforeach; ?>
    </div>

<? endif; ?>