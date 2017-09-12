<?php

use yii\helpers\Html;
use kartik\tree\TreeView;
use app\models\Category;
use kartik\tree\Module;
/* @var $this yii\web\View */
/* @var $searchModel app\models\social\SocialSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Категории';
$this->params['breadcrumbs'][] = $this->title;
?>

<?=
    TreeView::widget([
        // single query fetch to render the tree
        // use the Product model you have in the previous step
        'query' => Category::find()->addOrderBy('root, lft'),
        'headingOptions' => ['label' => 'Категории'],
        'fontAwesome' => true,     // optional
        'displayValue' => 1,        // initial display value
        'softDelete' => true,       // defaults to true
        'cacheSettings' => [
            'enableCache' => true   // defaults to true
        ],
        'nodeAddlViews' => [Module::VIEW_PART_2 => '@app/modules/admin/views/category/_treePart2'],
    ]);
?>
