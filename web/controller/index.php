<?php namespace web\controller;

use core\View;

class Index {
    public function __construct () {
        $this->view = new View();
    }

    public function show () {
        return $this->view->make ( 'index' )->with('version','1.0');
    }

    public function post () {
        echo 'post';
    }
}
