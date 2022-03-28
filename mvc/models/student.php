<?php
class student extends DB
{
    public $table = "hocsinh";
    public function getDataSt()
    {
        $field = [
            "*"

        ];

        return $this->getData($field, $this->table, null, null);
    }
    public function getDataStById($idSt)
    {
        return $this->getData(["*"], $this->table, ["id = '$idSt'"], null);
    }
    public function getDataStByIdUser()

    {
        $id = $_SESSION['id'];
        return $this->getData(["*"], $this->table, ["id_user = '$id'"], null);
    }

    public function update($data = [], $where = [])
    {
        return $this->updateData($this->table, $data, $where);
    }
}