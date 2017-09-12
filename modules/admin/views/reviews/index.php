<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\reviews\ReviewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Отзывы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reviews-index">


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Новый отзыв', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tour_name',
            'cost',
            'name',
            'position',
            [
                'attribute' => 'client_img',
                'format' => 'html',
                'value' =>  function($model){
                    return Html::img($model->getThumbUploadUrl('client_img'), ['class' => 'img-thumbnail']);
                }
            ],

            [
                'attribute' => 'tour_img',
                'format' => 'html',
                'value' =>  function($model){
                    return Html::img($model->getThumbUploadUrl('tour_img'), ['class' => 'img-thumbnail']);
                }
            ],

            [
                'attribute' =>'status_id',
                'value' =>'status.label',
                'filter' => \app\models\Status::statusArray()
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?>
</div>
