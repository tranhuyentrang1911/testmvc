<?php
require_once "./mvc/controllers/admin/Option_C.php";
class Profile_C extends Option_C
{
    public function changePassword()
    {
        $this->view("admin_v",[
            'page'=>'profile/ChangePassword'
            ]);
    }
}