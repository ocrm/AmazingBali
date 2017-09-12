<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\repair_parts\RepairPartsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Запчасти '.$searchModel->brand->brand_name;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="repair-parts-index">


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Новая запчасть', ['create', 'brand_id' => $brand_id], ['class' => 'btn btn-success']) ?>
    </p>
<?php //Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'article',
            'title',
            [
                'attribute' => 'photo',
                'format' => 'html',
                'value' =>  function($model){
                    return Html::img($model->getThumbUploadUrl('photo'), ['class' => 'img-thumbnail']);
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
<?php //Pjax::end(); ?></div>
