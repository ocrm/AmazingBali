<?php
namespace app\components;

use Yii;

class SendMail{
    static function send($model){
        Yii::$app->mailer->compose('base', [
            'model' => $model
        ])
            ->setFrom('info@amazingbali.ru')
            ->setTo('info@amazingbali.ru')
            ->setCc('gid@amazingbali.ru')
            ->setSubject('Новое сообщение на сайте amazingbali.ru')
            ->send();
    }
}