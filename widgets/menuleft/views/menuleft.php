<?
use yii\helpers\Html;
use yii\helpers\Url;
use app\widgets\social\SocialWidget;
?>
<div class="nav-left hide-on-small-screen">
    <ul>
        <? foreach ($roots as $key => $root): ?>
        <li><div class="animation-helper"><?= Html::a($root->name, ['pages/view', 'id' => $root->page_id], ['class' => 'icon-link-'.($key + 1)]) ?></div>
            <ul class="second-level scrollable-menu">
                <div class="second-level-container">
                <? foreach ($root->children(1)->all() as $children): ?>
                    <a href="<?= ($children->page_id) ? Url::to(['pages/view', 'id' => $children->page_id]) : Url::to(['catalog/view', 'id' => $children->id]) ?>"><?= $children->name ?></a>
                    <? if($children->isLeaf()): ?>
                        <ul class="second-cat">
                            <? foreach ($children->products as $product): ?>
                                <li><a href="<?= Url::to(['products/view', 'id' => $product->id]) ?>"><b><?= $product->brand ?></b> <?= $product->title ?></a></li>
                            <? endforeach; ?>
                        </ul>
                    <? endif ?>
                    <ul class="first-cat">
                    <? foreach ($children->children(1)->all() as $children2): ?>
                        <a href="<?= ($children2->page_id) ? Url::to(['pages/view', 'id' => $children2->page_id]) : Url::to(['catalog/view', 'id' => $children->id, '#' => $children2->id]) ?>"><?= $children2->name ?></a>
                        <ul class="second-cat">
                            <? foreach ($children2->products as $product): ?>
                            <li><a href="<?= Url::to(['products/view', 'id' => $product->id]) ?>"><b><?= $product->brand ?></b> <?= $product->title ?></a></li>
                            <? endforeach; ?>
                        </ul>
                    <? endforeach; ?>
                    </ul>
                <? endforeach; ?>
                </div>    
            </ul>
        </li>
        <? endforeach; ?>
        <li><div class="animation-helper"><a class="icon-link-10" href="<?= Url::to(['parts/index']) ?>">Запчасти</a></div></li>
    </ul>
    <?= SocialWidget::widget() ?>
</div>