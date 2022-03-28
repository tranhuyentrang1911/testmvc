<?php
class home_m extends DB
{

    public function getPost()
    {
        $field = [
            "hinhanh",
            "tieude",
            "noidung"
        ];
        $table = "baiviet";
        $where = [
            "hoatdong = '1'"
        ];
        $top = null;
        return $this->getData($field, $table, $where, $top);
    }
    public function getNotifi()
    {
        $field = [
            "id",
            "title",
            "content",
            "img"
        ];
        $table = "khoahoc";
        $where = [
            "active = '1'"
        ];
        $top = null;
        return $this->getData($field, $table, $where, $top);
    }
    public function addCustomer()
    {
    }
}