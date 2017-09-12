<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\news\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Статьи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Новая статья', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'title',
            'slug',
            'date',
            [
                'attribute' =>'status_id',
                'value' =>'status.label',
                'filter' => \app\models\Status::statusArray()
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{live}{view}{update}{delete}',
                'buttons' => [
                    'live' => function ($url, $model, $key) {
                        return Html::a('<span class="glyphicon glyphicon-edit">', ['/articles/view/', 'slug'=>$model->slug], ['target' => '_blank', 'data-pjax' => 0]);
                    },
                ]
            ],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
