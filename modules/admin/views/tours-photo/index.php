<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\tours\ToursPhotoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Фотографии туров';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-photo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Новая фотография', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'photo',
            'title',
            'product_id',
            [
                'attribute' =>'status_id',
                'value' =>'status.label',
                'filter' => \app\models\Status::statusArray()
            ],
            'image',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
