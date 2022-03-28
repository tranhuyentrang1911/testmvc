<?php
class home extends Controler
{
    public function myhome()
    {
        $home_m = $this->model('home_m');

        $post = json_decode($home_m->getPost(), true);
        $notifi = json_decode($home_m->getNotifi(), true);
        $this->view('Home', [

            "post" => $post,
            "notifi" => $notifi
        ]);
    }
}