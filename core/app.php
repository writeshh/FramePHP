<?php

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class Init
{
    /*
    * Class Properties Declaration
    */
    public $environment;
    public $capsule;
    public $controller_path;
    public $req_controller;
    public $req_model;
    public $view_render;
    public $req_param;
    public $req_method;
    public $load;
    /**
    *Split server path request into Array
    *@return capsule;
    */
    public function path_split($path)
    {
        $this->capsule = explode('/', ltrim($path));

        return $this->capsule;
    }

    /**
    *Check is url results to a trailing Slash
    *@return bool;
    */
    public static function is_slash($path)
    {
        /**
        *Is path = '/' | != '/'
        *@return true|false;
        */
        if ($path == '/') {
            return true;
        } else {
            return false;
        }
    }

    public static function view($template_name, $data = array())
    {
        $loader = new FilesystemLoader('Views');
        $twig = new Environment($loader);
        $template = $twig->load($template_name . '.html');
        echo $template->render($data);
    }
}
