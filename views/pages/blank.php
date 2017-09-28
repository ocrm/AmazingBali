<?php
use app\widgets\elive\EliveWidget;

$this->title = $page->title;
$this->registerMetaTag(['name' => 'description', 'content' => $page->meta_description]);
$this->registerMetaTag(['name' => 'keywords', 'content' => $page->meta_keywords]);
$this->params['breadcrumbs'][] = $this->title;
?>


<section class="section-height-mac context-dark">
    <div data-on="false" data-md-on="true" class="rd-parallax">
        <div data-speed="0.25" data-type="media" data-url="<?= $page->getUploadUrl('image') ?>" class="rd-parallax-layer"></div>
        <div data-speed="0" data-type="html" data-md-fade="false" class="rd-parallax-layer">
            <div class="bg-overlay-darker">
                <div class="shell section-100 section-md-100 section-lg-top-170 section-lg-bottom-165">
                    <h1 class="reveal-md-inline-block">
                        <?= $page->title ?>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</section>
<main class="page-content">
    <section class="section-80 section-md-top-125">
        <div class="shell">
            <?= EliveWidget::widget([
                'model' => $page->parts[0],
                'attribute' => 'data',
                'controller' => 'pages'
            ]) ?>
        </div>
    </section>
</main>
