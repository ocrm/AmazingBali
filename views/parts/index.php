<?php
use yii\helpers\Url;
use yii\helpers\Html;
use app\widgets\elive\EliveWidget;
/* @var $this yii\web\View */

$this->title = $page->title;
$this->registerMetaTag(['name' => 'description', 'content' => $page->meta_description]);
$this->registerMetaTag(['name' => 'keywords', 'content' => $page->meta_keywords]);
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-wrapper">
    <?= EliveWidget::widget([
        'model' => $page->parts[2],
        'attribute' => 'data',
        'controller' => 'pages'
    ]) ?>
    <div class="section-wrapper">
        <div class="page-title-block clearfix">
            <div class="col-md-3">
                <?= EliveWidget::widget([
                    'model' => $page->parts[0],
                    'attribute' => 'data',
                    'controller' => 'pages'
                ]) ?>
            </div>
            <div class="col-md-9">
                <?= EliveWidget::widget([
                    'model' => $page->parts[1],
                    'attribute' => 'data',
                    'controller' => 'pages'
                ]) ?>
            </div>
        </div>
    </div>
    <? foreach ($model as $item): ?>
        <div class="parts-block">
        <div class="parts-brand-container clearfix">
            <div class="section-wrapper clearfix">
                <div class="col-md-3">
                    <?= Html::img($item->getUploadUrl('image')) ?>
                </div>
                <div class="col-md-9">
                    <p class="parts-brand-text">
                        <?= Html::encode($item->description) ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="p-dd-head">
            Список запчастей <?= Html::encode($item->brand_name) ?>
        </div>
        <div class="parts-drop-down-container">
            <div class="table-container">
                <table class="table">
                    <thead>
                    <tr>
                        <th class="text-left">Название</th>
                        <th class="text-center">Артикул</th>
                        <th class="text-center">Фото</th>
                    </tr>
                    </thead>
                    <tbody>
                    <? foreach ($item->repairParts as $part): ?>
                        <tr>
                            <td><?= $part->title ?></td>
                            <td align="center"><?= Html::encode($part->article) ?></td>
                            <td align="center"><a class="parts-img" href="<?= Url::to(['/parts/view', 'id' => $part->id]) ?>" data-action="modal"></a></td>
                        </tr>
                    <? endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <? endforeach; ?>
    <div class="support clearfix">
        <div class="col-md-8">
            <p>ОБРАТИТЬСЯ В АВАРИЙНУЮ СЛУЖБУ <span>8 (926) 140 99 57</span></p>
        </div>
        <div class="col-md-4">
            <div class="blue-btn">ОСТАВИТЬ ЗАЯВКУ</div>
        </div>
    </div>
</div>