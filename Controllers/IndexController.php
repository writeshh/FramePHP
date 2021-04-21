<?php

class IndexController
{
    private $model;

    public function __construct($tile)
    {
        /** Loading the corresponding Model class **/
        $this->model = new $tile;
    }

    public function index()
    {
        Init::view('index', [
            'posts' => $this->model->getPosts(),
            'title' => 'MVC Example',
        ]);
    }

}
