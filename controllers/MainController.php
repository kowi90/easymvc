<?php
include 'helpers\BaseController.php';

class MainController extends BaseController {

    public function index(){
        $this->getView('index', [
            'testParam' => 'TEST DATA'
        ]);
    }

    public function articles(){
        $this->getView('articles', [
            'testParam' => 'TEST ARTICLE'
        ]);
    }

}