<?
use yii\helpers\Html;
use yii\helpers\Url;
use app\widgets\social\SocialWidget;
use kartik\form\ActiveForm;
?>


<div class="mobile-menu show-on-small-screen">
    <ul class="m-top">
        <div class="mobile-search">
            <?php $form = ActiveForm::begin([
                'options' => ['enctype' => 'multipart/form-data'],
                'action' => ['site/search'],
                'method' => 'get',
            ]); ?>
            <?= $form->field(new \app\models\Search(), 'text')->textInput(['maxlength' => true, 'placeholder' => 'Поиск по сайту...'])->label(false) ?>
            <?php ActiveForm::end(); ?>
        </div>
        <li><a href="<?= Url::to(['/site/about']) ?>">О компании</a><div class="collapse-btn"></div>
            <ul class="second-level collapse-m">
                <li><a href="<?= Url::to(['/pages/view', 'id' => 3]) ?>">О нас</a></li>
                <li><a href="<?= Url::to(['/pages/view', 'id' => 4]) ?>">Наше Произовдство</a></li>
                <li><a href="<?= Url::to(['/pages/view', 'id' => 19]) ?>">СМИ о Нас</a></li>
                <li><a href="<?= Url::to(['/reviews/index']) ?>">Отзывы клиентов</a></li>
                <li><a href="<?= Url::to(['/pages/view', 'id' => 6]) ?>">Сотрудничество</a></li>
                <li><a href="<?= Url::to(['/pages/view', 'id' => 7]) ?>">Региональные представители</a></li>
            </ul>
        </li>
        <li><a href="<?= Url::to(['/pages/view', 'id' => 8]) ?>">Сервис</a></li>
        <li><a href="<?= Url::to(['/projects/index']) ?>">Проекты</a></li>
        <li><a href="<?= Url::to(['/news/index']) ?>">Новости</a></li>
        <li><a href="<?= Url::to(['/articles/index']) ?>">Полезное</a></li>
        <li><a href="<?= Url::to(['/reviews/index']) ?>">Отзывы</a></li>
        <li><a href="<?= Url::to(['/contacts/index']) ?>">Контакты</a></li>
    </ul>
    <hr>

    <ul class="m-left">
        <? foreach ($roots as $key => $root): ?>
            <li><?= Html::a($root->name, ['pages/view', 'id' => $root->page_id], ['class' => 'icon-link-'.($key + 1)]) ?><div class="collapse-btn"></div>
                <ul class="second-level collapse-m">
                    <div class="cat-container">
                        <? foreach ($root->children(1)->all() as $children): ?>
                            <a href="<?=($children->page_id) ? Url::to(['pages/view', 'id' => $children->page_id]) : Url::to(['catalog/view', 'id' => $children->id]) ?>"><?= $children->name ?></a>
                            <? if($children->isLeaf()): ?>
                                <ul class="second-cat">
                                    <? foreach ($children->products as $product): ?>
                                        <li><a href="<?= Url::to(['products/view', 'id' => $product->id]) ?>"><b><?= $product->brand ?></b> <?= $product->title ?></a></li>
                                    <? endforeach; ?>
                                </ul>
                            <? endif ?>
                            <ul class="first-cat">
                                <? foreach ($children->children(1)->all() as $children2): ?>
                                    <a href="<?=($children2->page_id) ? Url::to(['pages/view', 'id' => $children2->page_id]) : Url::to(['catalog/view', 'id' => $children->id, '#' => $children2->id]) ?>"><?= $children2->name ?></a>
                                    <ul class="second-cat">
                                        <? foreach ($children2->products as $product): ?>
                                            <li><a href="<?= Url::to(['products/view', 'id' => $product->id]) ?>"><b><?= $product->brand ?></b> <?= $product->title ?></a></li>
                                        <? endforeach; ?>
                                    </ul>
                                <? endforeach; ?>
                            </ul>
                        <? endforeach; ?>
                    <div>
                </ul>
            </li>
        <? endforeach; ?>
        <li><a class="icon-link-10" href="<?= Url::to(['parts/index']) ?>">Запчасти</a></li>
    </ul>
    <?= SocialWidget::widget() ?>
</div>