<?php

namespace app\controllers;

use app\models\AppModel;
use app\widgets\currency\Currency;
use ishop\App;
use ishop\base\Controller;
use ishop\Cache;

class AppController extends Controller {

    public function __construct($route) {
        parent::__construct($route);
        new AppModel();
        //setcookie('currency', 'EUR', time() +3600*24*7, '/'); //wremmeny cookie//
        App::$app->setProperty('currencies', Currency::getCurrencies());
        App::$app->setProperty('currency',Currency::getCurrency(App::$app->getProperty('currencies')));
        //debug(App::$app->getProperties());
        App::$app->setProperty('cats', self::cacheCategory());

    }

    public static function cacheCategory(){
        $cache =Cache::instance();
        $cats =$cache->get('cats');
        if (!$cats){
            $cats =\R::getAssoc("SELECT * FROM category");
            $cache->set('cats', $cats);
        }
        return $cats;
    }

}