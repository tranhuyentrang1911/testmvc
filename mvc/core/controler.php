<?php

class Controler
{
    public function model($model)
    {
        require_once "./mvc/models/" . $model . ".php";
        return new $model;
    }
    public function view($view, $data = array())
    {
        require_once "./mvc/views/" . $view . ".php";
    }
}