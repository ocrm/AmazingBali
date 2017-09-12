<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\repair_brands\RepairBrandsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Бренды';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="repair-brands-index">


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Новый бренд', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php //Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'brand_name',
            'image',
            [
                'attribute' =>'status_id',
                'value' =>'status.label',
                'filter' => \app\models\Status::statusArray()
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{parts}{view}{update}{delete}',
                'buttons' => [
                    'parts' => function ($url, $model, $key) {
                        return Html::a('<span class="glyphicon glyphicon-list">', ['/admin/repair-parts/index', 'brand_id'=>$model->id]);
                    },
                ]
            ],
        ],
    ]); ?>
<?php //Pjax::end(); ?></div>
