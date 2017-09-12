<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\models\Category;
use kartik\tree\TreeViewInput;
/* @var $this yii\web\View */
/* @var $searchModel app\models\products\ProductsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Оборудование';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-index">


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Новое оборудование', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'title',
            'brand',
            [

                'attribute' => 'category_id',
                'format' => 'raw',
                
                /**
                'filter' => TreeViewInput::widget([
                        'name' => 'ProductsSearch[category_id]',
                        'value' => 'true', // preselected values
                        'query' => Category::find()->addOrderBy('root, lft'),
                        'headingOptions' => ['label' => 'Категории'],
                        'rootOptions' => ['label'=>'123'],
                        'fontAwesome' => true,
                        'asDropdown' => true,
                        'multiple' => false,
                        'options' => ['disabled' => false]
                    ]),
                 **/
                
                'value' => function($model){
                    return Html::tag('span', $model->category->parents(1)->one()->name, ['class' => 'label label-primary']) .'<br/>'. Html::tag('span', $model->category->name, ['class' => 'label label-default']);
                }
            ],
            'meta_title',
            'meta_keywords',
            'meta_description',
            [
                'attribute' =>'status_id',
                'value' =>'status.label',
                'filter' => \app\models\Status::statusArray()
            ],
            // 'request_blank',
            // 'booklet',
            // 'blueprint',
            'sort',
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{live}{view}{update}{delete}',
                'buttons' => [
                    'live' => function ($url, $model, $key) {
                        return Html::a('<span class="glyphicon glyphicon-edit">', ['/products/view/', 'id'=>$model->id], ['target' => '_blank', 'data-pjax' => 0]);
                    },
                ]
            ],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
