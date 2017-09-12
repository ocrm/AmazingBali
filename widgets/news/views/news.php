<?
use yii\helpers\Html;
use yii\helpers\Url;
?>

<div class="news">
    <div class="section-wrapper">
        <div class="block-title">НОВОСТИ</div>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <? foreach ($model as $key => $item): ?>
                    <li data-target="#carousel-example-generic" data-slide-to="<?= $key ?>" class="<?= ($key == 0) ? 'active' : '' ?>"></li>
                <? endforeach; ?>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <? foreach ($model as $key => $item): ?>
                    <div class="item <?= ($key == 0) ? 'active' : '' ?>">
                    <div class="col-md-5">
                        <div class="news-img">
                            <?= Html::img($item->getUploadUrl('preview_img')) ?>
                            <div class="read-more-overlay">
                                <?= Html::a('Подробнее', ['news/view', 'slug' => $item->slug], ['class' => 'news-detailed-btn']) ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="news-container">
                            <span class="news-date"><?= \Yii::$app->formatter->asDatetime($item->date, "php:d F Y "); ?></span>
                            <div><h3 class="news-title"><?= $item->title ?></h3></div>
                            <p class="news-text"><?= $item->prev_text ?></p>
                        </div>
                    </div>
                </div>
                <? endforeach; ?>
            </div>
        </div>
        <a href="<?=Url::to(['news/index']) ?>" class="blue-btn">ВСЕ НОВОСТИ</a>
    </div>
</div>
