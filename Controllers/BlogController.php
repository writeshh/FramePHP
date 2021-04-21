<?php

namespace Controller\Controller;

class BlogController
{
    private $model;

    public function __construct($tile)
    {
        /** Loading the corresponding Model class **/
        $this->model = new $tile;
    }

    public function index()
    {
        Init::view('index', $this->model->getBlogs());
    }
}
