<?php
use yii\helpers\Url;

?>
<? if($type == 'booklet'): ?>
    <div class="pdf-not-support">Если ваш браузер не поддерживает просмотр PDF, пожалуйста скачайте файл для его просмотра: <a href="<?= Url::to($model->getUploadUrl('booklet')) ?>">Скачать PDF</a></div>
    <embed src="<?= Url::to($model->getUploadUrl('booklet')) ?>" width="100%" height="600px" type='application/pdf'></embed>
<? endif ?>

<? if($type == 'blueprint'): ?>
    <div class="pdf-not-support">Если ваш браузер не поддерживает просмотр PDF, пожалуйста скачайте файл для его просмотра: <a href="<?= Url::to($model->getUploadUrl('blueprint')) ?>">Скачать PDF</a></div>
    <embed src="<?= Url::to($model->getUploadUrl('blueprint')) ?>" width="100%" height="600px" type='application/pdf'></embed>
<? endif ?>    