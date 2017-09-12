<?php

use yii\helpers\Html;
use himiklab\sortablegrid\SortableGridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\partners\PartnersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Партнеры';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="partners-index">


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Новый партнер', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= SortableGridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'tableOptions' => ['class' => 'table'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'title',
            [
                'attribute' => 'imageFile',
                'format' => 'html',
                'value' =>  function($model){
                    return Html::img($model->getThumbUploadUrl('imageFile'), ['class' => 'img-thumbnail']);
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
<?php Pjax::end(); ?></div>
