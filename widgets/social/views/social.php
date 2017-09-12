<?
use yii\helpers\Html;
?>

<div class="social-icons-container">
    <? foreach ($model as $item): ?>
        <?= Html::a('', $item->url, ['class' => 'social-icon socicon-'.$item->title, 'target' => '_blank']) ?>
    <? endforeach; ?>
</div>
