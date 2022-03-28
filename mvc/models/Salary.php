<?php

class Salary extends DB
{
    public $table = "luong";
    public function getSalary()
    {
        return $this->getData(["*"],$this->table,null,null);
    }
    public function addSalary($luongcb,$hsl)
    {
        $data = [
            "luongcoban"=>$luongcb,
            "hesoluong"=>$hsl
        ];
        return $this->insertData($this->table,$data);
    }
    public function delSalary($id)
    {
        return $this->delData($this->table,["id = '$id'"]);
    }
}


?>