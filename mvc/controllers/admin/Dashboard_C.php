<?php
require_once "./mvc/controllers/admin/Course_C.php";
class Dashboard_C extends Course_C
{
    public function myhome()
    {
        $taecher = $this->model("teacher");
        $item_teacher = json_decode($taecher->getInfor(),true);
        $detail_class = $this->model('DetailClass');
        $item_price = json_decode($detail_class->getPrice(),true);
        $this->view("admin_v",["page"=>"dashboard/thongke","teacher"=>$item_teacher,"price"=>$item_price]);
    }
}