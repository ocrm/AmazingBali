<?
use yii\helpers\Html;
?>


<?= Html::beginTag($container, [
    'class' => 'live-edit '.$className,
    'contenteditable' => Yii::$app->user->isGuest ? 'false' : 'true',
    'data-controller' => $controller,
    'data-id' => $model->id,
    'data-attribute' => $attribute
]) ?>

<?= $model->{$attribute} ?>

<?= Html::endTag($container) ?>
