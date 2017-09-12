<?
use yii\helpers\Html;
use yii\helpers\Url;

?>

<div class="projects">
    <div class="projects-header">
        <span class="header-title">ПРОЕКТЫ</span>
        <div class="filter-button-group">
                <span class="button-filter" data-filter="*">Все проекты</span>
            <? foreach ($type as $item): ?>
                <span class="button-filter" data-filter=".p<?= $item->id ?>"><?= $item->title ?></span>
            <? endforeach; ?>
        </div>
    </div>
    <ul id="da-projects" class="da-projects">
        <? foreach ($model as $item): ?>
        <li class="p<?= $item->type_id ?>">
            <?= Html::img($item->getUploadUrl('preview_img')) ?>
            <div>
                <span><?= $item->title ?></span>
                <a class="detailed-btn" href="<?= Url::to(['/projects/view', 'id' => $item->id]) ?>" data-action="modal">Подробнее</a>
            </div>
        </li>
        <? endforeach; ?>
    </ul>
</div>