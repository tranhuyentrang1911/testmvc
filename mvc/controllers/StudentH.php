<?php
require_once "./mvc/controllers/studentH/studentPage.php";
class StudentH extends studentPage
{
    public function __construct()
    {
        if (!isset($_SESSION["rank"]) && !isset($_SESSION["id"])) {
            header("location:./login");
            exit();
        }
    }
}