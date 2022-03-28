<?php

class Logout extends Controler
{
    public function myhome()
    {
        session_destroy();
        header('location: ./login');
    }
}


?>