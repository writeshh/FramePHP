<?php
/** Autoloading The required Classes **/
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
        /** Initializing a index.html view Found in (Views/index.html) **/
        Init::view('index');
    }

    public function login()
    {
        echo "Login Method";
    }

    public function showUsers()
    {
        print_r($this->model->getUsers());
    }

    public function data()
    {
        Init::view('main/data', array(
            'posts' => ['post1','post2'],
            'comments' => ['comment1','comment2']
        ));
    }
}
