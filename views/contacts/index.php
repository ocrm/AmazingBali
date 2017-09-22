<?php
use yii\helpers\Url;
use yii\helpers\Html;
use app\widgets\elive\EliveWidget;
use yii\widgets\ActiveForm;


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
                    <h1 class="reveal-md-inline-block" data-shadow="<?= $page->parts[0]->data ?>">
                        <?= EliveWidget::widget([
                            'model' => $page->parts[0],
                            'attribute' => 'data',
                            'controller' => 'pages',
                        ]) ?>
                    </h1>
                    <div class="offset-top-4">
                        <h6 class="text-italic" data-shadow="<?= $page->parts[1]->data ?>">
                            <?= EliveWidget::widget([
                                'model' => $page->parts[1],
                                'attribute' => 'data',
                                'controller' => 'pages',
                            ]) ?>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<main class="page-content">
    <section class="section-80 bg-wild-wand">
        <div class="shell">
            <div class="box box-insets-off bg-white reveal-lg-block">
                <div class="range range-xs-center range-md-justify text-sm-left">
                    <div class="cell-sm-8 cell-sm-push-1">
                        <div class="box-inner">
                            <h5 class="text-ubold">
                                <?= EliveWidget::widget([
                                    'model' => $page->parts[2],
                                    'attribute' => 'data',
                                    'controller' => 'pages',
                                ]) ?>
                            </h5>
                            <div class="offset-top-25">
                                <div class="text-small text-left">
                                    <?= EliveWidget::widget([
                                        'model' => $page->parts[3],
                                        'attribute' => 'data',
                                        'controller' => 'pages',
                                    ]) ?>
                                </div>
                            </div>
                            <div class="range range-xs-center offset-top-40">
                                <div class="cell-sm-6">
                                    <h5 class="text-ubold">
                                        <?= EliveWidget::widget([
                                            'model' => $page->parts[4],
                                            'attribute' => 'data',
                                            'controller' => 'pages',
                                        ]) ?>
                                    </h5>
                                    <div class="offset-top-25">
                                        <address class="contact-info text-left">
                                            <?= EliveWidget::widget([
                                                'model' => $page->parts[6],
                                                'attribute' => 'data',
                                                'controller' => 'pages',
                                            ]) ?>
                                        </address>
                                    </div>
                                </div>
                                <div class="cell-sm-6">
                                    <h5 class="text-ubold">
                                        <?= EliveWidget::widget([
                                            'model' => $page->parts[5],
                                            'attribute' => 'data',
                                            'controller' => 'pages',
                                        ]) ?>
                                    </h5>
                                    <div class="offset-top-25">

                                        <?php $form = ActiveForm::begin([
                                            'options' => [
                                                'id' => 'сontact-form',
                                                'class' => 'text-left'
                                            ]
                                        ]); ?>


                                        <?= $form->field($model, 'name')->textInput(['placeholder' => 'Имя*'])->label(false) ?>

                                        <?= $form->field($model, 'phone')->textInput(['placeholder' => 'Телефон*'])->label(false) ?>

                                        <?= $form->field($model, 'email')->textInput(['placeholder' => 'E-mail'])->label(false) ?>

                                        <?= $form->field($model, 'text')->textarea(['rows' => 5, 'placeholder' => 'Текст сообщения'])->label(false) ?>

                                        <? if($msg): ?>
                                            <h5><?= $msg ?></h5>
                                        <? else: ?>
                                            <div class="form-group">
                                                <?= Html::submitButton('ОТПРАВИТЬ', ['class' => 'btn btn-width-110 btn-primary']) ?>
                                            </div>
                                        <? endif;?>

                                        <?php ActiveForm::end(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cell-sm-4 section-map-fullheight inset-lg-right-20">
                        <div class="rd-google-map-custom">
                            <iframe  class="rd-google-map__model" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.6668264852165!2d115.26290661470412!3d-8.627948590082411!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23fea3b030aa9%3A0x607eb12083a14427!2zR2cuIEt1dGlsYW5nLCBCYXR1YnVsYW4sIFN1a2F3YXRpLCBLYWJ1cGF0ZW4gR2lhbnlhciwgQmFsaSA4MDU4Miwg0JjQvdC00L7QvdC10LfQuNGP!5e0!3m2!1sru!2sru!4v1503318921699" style="border:0;width:100%" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>