<?php

namespace app\controllers;

use RedUNIT\Blackhole\Meta;

class SearchController extends AppController {

    public function typeaheadAction(){
        if($this->isAjax()){
            $query = !empty(trim($_GET['query'])) ? trim($_GET['query']) : null;
            if ($query){
                $products = \R::getAll("SELECT id, title FROM product WHERE title LIKE ? AND status = '1' LIMIT 9", ["%{$query}%"]);
                echo json_encode($products);
            }
        }
        die;
    }

    public function indexAction(){
        $query = !empty(trim($_GET['s'])) ? trim($_GET['s']) : null;
        if ($query){
            $products = \R::find('product', "title LIKE ? AND status = '1'", ["%{$query}%"]);
        }
        $this->setMeta('Пойск по: ' . h($query));
        $this->set(compact('products', 'query'));
    }

}