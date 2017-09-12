<?php
use yii\helpers\Url;
use app\widgets\partners\PartnersWidget;
use app\widgets\elive\EliveWidget;
/* @var $this yii\web\View */

$this->title = $page->title;
$this->registerMetaTag(['name' => 'description', 'content' => $page->meta_description]);
$this->registerMetaTag(['name' => 'keywords', 'content' => $page->meta_keywords]);
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wrapper">
    <?= EliveWidget::widget([
        'model' => $page->parts[0],
        'attribute' => 'data',
        'controller' => 'pages'
    ]) ?>


    <div class="support clearfix">
        <div class="col-md-8">
            <p>ОБРАТИТЬСЯ В АВАРИЙНУЮ СЛУЖБУ <span>8 (926) 140 99 57</span></p>
        </div>
        <div class="col-md-4">
            <div class="blue-btn" data-action="request" data-type="Аварийная служба" data-id="3">ОСТАВИТЬ ЗАЯВКУ</div>
        </div>
    </div>

   <?= PartnersWidget::widget() ?>
</div>    