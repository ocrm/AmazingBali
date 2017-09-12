<?php

namespace app\components;
use Yii;
use app\models\Slugs;
use yii\caching\DbDependency;
use yii\web\CompositeUrlRule;
use yii\web\UrlRuleInterface;
use yii\base\InvalidConfigException;

/**
 * Class PagesUrlRule
 *
 * @package app\components
 */
class PagesUrlRule extends CompositeUrlRule{

    public $cacheComponent = 'cache';

    public $cacheID = 'PagesUrlRules';

    public $ruleConfig = ['class' => 'yii\web\UrlRule'];

    /**
     * Creates the URL rules that should be contained within this composite rule.
     *
     * @return \yii\web\UrlRuleInterface[] the URL rules
     * @throws \yii\base\InvalidConfigException
     */
    protected function createRules()
    {
        $cache = \Yii::$app->get($this->cacheComponent)->get($this->cacheID);
        if(!empty($cache))
            return $cache;

        $pages = Slugs::find()->asArray(true)->all();

        $rules = [];
        foreach ($pages as $page) {

            $rule = [
                'pattern' => ltrim($page['alias'], '/'),
                'route' => ltrim($page['route'], '/'),
            ];


            $rule = \Yii::createObject(array_merge($this->ruleConfig, $rule));
            if (!$rule instanceof UrlRuleInterface) {
                throw new InvalidConfigException('URL rule class must implement UrlRuleInterface.');
            }
            $rules[] = $rule;
        }

        $cd= new DbDependency();
        $cd->sql='SELECT MAX(id) FROM '.Slugs::tableName();

        Yii::$app->get($this->cacheComponent)->set($this->cacheID, $rules, 60,$cd);

        return $rules;
    }

    public function __wakeup()
    {
        $this->init();
    }

}