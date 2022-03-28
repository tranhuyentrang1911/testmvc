<?php
require_once "./mvc/controllers/teacherH/teacherPage.php";
class TeacherH extends teacherPage
{
    public function __construct()
    {
        if (!isset($_SESSION["rank"]) && !isset($_SESSION["id"])) {
            header("location:./login");
            exit();
        }
    }
}