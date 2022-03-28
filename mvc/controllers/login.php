<?php
class Login extends Controler
{
    public function myhome()
    {
        if (isset($_SESSION["rank"])) {
            switch ($_SESSION["rank"]) {
                case '1':
                    header("location:./admin");
                    exit();
                    break;
                case '2':
                    header("location:./teacherH");
                    exit();
                    break;
                case '3':
                    header("location:./studentH");
                    exit();
                    break;
            }
        } else $this->view("login_v", []);
    }
    public function check()
    {
        $get = $this->model("users");
        $check = $get->checkUser($_POST['id'], $_POST['password']);
        if ($check == 1) {
            $this->view("admin_v", []);
        } else if ($check == 2) {
            $this->view("teacher_v", []);
        } else if ($check == 3) {
            $this->view("student_v", []);
        } else {
            $this->view("login_v", ["status" => 0]);
            // echo $status = 0;
        }
    }
}