<?php
include './helpers/BaseController.php';

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

    public function blogs($id, $id2){

        $osszead = intval($id) * intval($id2);

        $this->getView('blogs', [
            'aErteke' => $osszead
        ]);
    }

}