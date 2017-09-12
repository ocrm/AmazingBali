<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\models\tours\ToursType;
/* @var $this yii\web\View */
/* @var $searchModel app\models\tours\ToursSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Туры';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tours-index">


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Новый тур', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'title',
            [
                'attribute' => 'type_id',
                'value' => 'type.title',
                'filter' => ToursType::typeArray()
            ],

            'meta_title',
            'meta_keywords',
            'meta_description',
            [
                'attribute' =>'status_id',
                'value' =>'status.label',
                'filter' => \app\models\Status::statusArray()
            ],
            [
                'attribute' => 'tour_img',
                'format' => 'html',
                'value' =>  function($model){
                    return Html::img($model->getThumbUploadUrl('tour_img'), ['class' => 'img-thumbnail']);
                }
            ],
            'sort',
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{live}{view}{update}{delete}',
                'buttons' => [
                    'live' => function ($url, $model, $key) {
                        return Html::a('<span class="glyphicon glyphicon-edit">', ['/tours/view/', 'slug' => $model->slug], ['target' => '_blank', 'data-pjax' => 0]);
                    },
                ]
            ],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
