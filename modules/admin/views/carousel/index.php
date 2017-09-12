<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\carousel\CarouselSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Карусель';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carousel-index">


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Новый слайд', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            
            'title',
            [
                'attribute' => 'image',
                'format' => 'html',
                'value' =>  function($model){
                    return Html::img($model->getThumbUploadUrl('image'), ['class' => 'img-thumbnail']);
                }
            ],
            [
                'attribute' =>'status_id',
                'value' =>'status.label',
                'filter' => \app\models\Status::statusArray()
            ],
            'sort',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
