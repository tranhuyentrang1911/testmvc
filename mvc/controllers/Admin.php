<?php
require_once "./mvc/controllers/admin/Teacher_C.php";
class Admin extends Teacher_C
{
    public function __construct()
    {
        if (!isset($_SESSION["rank"]) && !isset($_SESSION["id"])) {
            header("location:./login");
            exit();
        }
    }
}