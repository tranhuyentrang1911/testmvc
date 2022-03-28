<?php

class Customer extends DB
{
    public $table = "khachhang";
    public function listCustomer()
    {
        return $this->getData(["*"], $this->table, null, null);
    }

    public function addCustomer($name, $phone, $email)
    {
        $data = [
            "name" => $name,
            "phone" => $phone,
            "email" => $email

        ];
        return $this->insertData($this->table, $data);
    }
    public function deleteCustomer($idCus)
    {
        $where = [
            "id = '$idCus'",

        ];
        return $this->delData($this->table, $where);
    }
}