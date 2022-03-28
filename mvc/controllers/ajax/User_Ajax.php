<?php
require_once "./mvc/controllers/ajax/Teacher_Ajax.php";
class User_Ajax extends Teacher_Ajax
{
    public function checkUser()
    {
        $id = $_POST['id'];
        $pass = $_POST['pass'];
        $users = $this->model("users");
        $notifi = $users->checkUser($id, $pass);
        echo json_decode($notifi);
    }

    public function changePass()
    {
        $pass = $_POST['pass'];
        $newpass = $_POST['newpass'];
        $renewpass = $_POST['renewpass'];

        $users = $this->model('users');
        $check = json_decode($users->checkpass($pass));
        if ($check) {

            if ($newpass == $renewpass) {
                if ($pass != $newpass) {
                    if (json_decode($users->newPass($newpass))) {
                        echo 1;
                    } else echo 2;
                }
                if ($pass == $newpass) echo 4;
            } else echo 3;
        } else echo 0;
    }
    public function addAcc()
    {
        $id = $_POST['id'];
        $pass = $_POST['pass'];
        $repass = $_POST['repass'];
        $rank = $_POST['rank'];
        $ho = $_POST['ho'];
        $ten = $_POST['ten'];
        $ngaysinh = $_POST['ngaysinh'];
        $diachi = $_POST['diachi'];
        $gioitinh = $_POST['gioitinh'];
        $sdt = $_POST['sdt'];
        if ($pass != $repass) {
            echo 0;
        } else {
            $account = $this->model('Account');

            if ($a = $account->addUser($id, $pass, $rank)) {

                $data = [
                    "id_user" => $a,
                    "ho" => $ho,
                    "ten" => $ten,
                    "ngaysinh" => $ngaysinh,
                    "gioitinh" => $gioitinh,
                    "sdt" => $sdt,
                    "diachi" => $diachi
                ];

                if ($account->addInfor($data, $rank)) {
                    echo 1;
                } else echo 2;
            } else echo 0;
        }
    }
}