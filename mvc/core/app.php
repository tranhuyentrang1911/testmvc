<?php
    class App
    {
        
        public $controler = "home";
        public $action = "myhome";
        public $params = [];

        public function __construct()
        {
            $arr = $this->UrlProcess();
            
            if (file_exists("./mvc/controllers/".$arr[0].".php")) {
                $this->controler = $arr[0];
                unset($arr[0]);
            }
            require_once "./mvc/controllers/".$this->controler.".php";
            $this->controler = new $this->controler;

            if (isset($arr[1])) {
                if (method_exists($this->controler, $arr[1])) {
                    $this->action = $arr[1];              
                }
                unset($arr[1]);
            }
            if (isset($arr)) {
                $this->params = array_values($arr);
            }
            else $this->params = [];
            call_user_func_array([$this->controler,$this->action],$this->params);

        }
        public function UrlProcess()
        {
            if (isset($_GET['url'])) {
                return explode("/",strtolower(preg_replace('/\s+/', '', $_GET['url'])));
            }
            else return ['']; 
        }
    }