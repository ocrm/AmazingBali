<?
use yii\helpers\Html;
?>
<div class="partners">
    <div class="block-title">НАШИ ПАРТНЕРЫ</div>
    <div class="partners-container clearfix">
                <? foreach ($model as $key => $item): ?>
                    <div>
                    <?= Html::a(
                        Html::img($item->getUploadUrl('imageFile'), ['class' => 'partner-img']), ($item->url) ? $item->url : null,
                        ['rel' => 'nofollow', 'target' => '_blank']
                    )
                    ?>
                    </div>
                <? endforeach; ?>
    </div>
    <div class="blue-btn" data-action="request" data-type="Стать партнером" data-id="5">СТАТЬ ПАРТНЕРОМ</div>
</div>