<?php

use yii\helpers\Html;
use app\models\pages\Pages;

echo $form->field($node, 'description')->textArea();
echo $form->field($node, 'page_id')->dropDownList(Pages::pagesArray(), ['prompt' => 'Использовать страницу....']);
echo $form->field($node, 'meta_description')->textInput();
echo $form->field($node, 'meta_keywords')->textInput();