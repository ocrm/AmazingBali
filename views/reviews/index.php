<?php
use yii\helpers\Url;
use yii\bootstrap\Html;
use app\models\reviews\Reviews;
/* @var $this yii\web\View */

$this->title = $page->title;
$this->registerMetaTag(['name' => 'description', 'content' => $page->meta_description]);
$this->registerMetaTag(['name' => 'keywords', 'content' => $page->meta_keywords]);
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-wrapper">
    <? foreach ($model as $key => $item): ?>
    <div class="review-container clearfix <?= ($key%2 == 0) ? '' : 'invert' ?>">
        <div class="review-img">
            <?= Html::img($item->getUploadUrl('preview_img')) ?>
            <? if($item->type == Reviews::YOUTUBE || $item->type == Reviews::VIDEO_FILE): ?>
                <div class="review-overlay">
                    <a class="play-review-video" data-action="modal" href="<?= Url::to(['/reviews/view', 'id' => $item->id]) ?>"></a>
                </div>
            <? endif ?>
            <? if($item->type == Reviews::PDF_FILE): ?>
                <div class="review-overlay">
                    <a class="review-file" data-action="modal" href="<?= Url::to(['/reviews/view', 'id' => $item->id]) ?>">Благодарность<br /><?= $item->department ?></a>
                </div>
            <? endif ?>
        </div>
        <div class="review-data">
            <div class="quotes-up"></div>
            <div class="quotes-down"></div>
            <div class="review-name"><?= $item->name ?></div>
            <div class="review-position"><?= $item->position ?></div>
            <p class="review-text">
                <?= $item->data ?>
            </p>
        </div>
    </div>
    <? endforeach; ?>
</div>