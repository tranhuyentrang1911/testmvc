<?php

class teacher extends DB
{
    public $table = "giaovien";
    public function getInfor()
    {
        $field = [
            "giaovien.*",
            "luong.hesoluong AS hsl",
            "(luong.hesoluong*luong.luongcoban) AS luong"
        ];
        $join = [
            "LEFT JOIN luong ON giaovien.id_luong = luong.id"
        ];
        return $this->getJoinData($field, $this->table, $join, null, null);
    }
    public function getInforById($id)
    {
        $field = [
            "giaovien.*",
            "luong.hesoluong AS hsl",
            "(luong.hesoluong*luong.luongcoban) AS luong"
        ];
        $join = [
            "LEFT JOIN luong ON giaovien.id_luong = luong.id"
        ];
        $where = [
            "giaovien.id = '$id'"
        ];
        return $this->getJoinData($field, $this->table, $join, $where, null);
    }
    public function getInforByIdUser()
    {
        $id = $_SESSION['id'];
        $field = [
            "giaovien.*",
            "luong.hesoluong AS hsl",
            "(luong.hesoluong*luong.luongcoban) AS luong"
        ];
        $join = [
            "LEFT JOIN luong ON giaovien.id_luong = luong.id"
        ];
        $where = [
            "giaovien.id_user = '$id'"
        ];
        return $this->getJoinData($field, $this->table, $join, $where, null);
    }

    public function update($data = [], $where = [])
    {
        return $this->updateData($this->table, $data, $where);
    }
}