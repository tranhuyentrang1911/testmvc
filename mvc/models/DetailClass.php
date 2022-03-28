<?php
class DetailClass extends DB
{
    public $table = "lopchitiet";
    public function statusClass($id)
    {
        $field = [
            "lopchitiet.*",
            "lop.sobuoi"
        ];
        $join = [
            "JOIN lop ON lopchitiet.id_lop = lop.id"
        ];
        $where = [
            "lopchitiet.id_lop = '$id'"
        ];
        $top = [
            "1"
        ];
        return $this->getJoinData($field, $this->table, $join, $where, $top);
    }
    public function getDataByIdSt($id)
    {
        $field = [
            "lop.id AS idclass",
            "lop.tenlop",
            "lop.khoa",
            "lop.hoatdong",
            "lop.sobuoi",
            "lop.lichhoc",
            "concat(hocsinh.ho,' ',hocsinh.ten) AS hs",
            "concat(giaovien.ho,' ',giaovien.ten) AS gv",
            "hocsinh.ngaysinh",
            "hocphi.sotien",
            "lopchitiet.sobuoidahoc",
            "lopchitiet.apdungvoucher",
            "lopchitiet.buoinghi",
            "lopchitiet.hocphidanop"
        ];
        $join = [
            "JOIN lop ON lopchitiet.id_lop = lop.id",
            "JOIN hocsinh ON lopchitiet.id_hocsinh = hocsinh.id",
            "JOIN giaovien ON lop.id_giaovien = giaovien.id",
            "JOIN hocphi ON lop.id_hocphi = hocphi.id"
        ];
        $where = [
            "lopchitiet.id_hocsinh = '$id'"
        ];
        return $this->getJoinData($field, $this->table, $join, $where, null);
    }
    public function getDataByIdClass($id)
    {
        $field = [
            '*'
        ];
        $table = "lopchitiet";
        $where = [
            "id_lop = '$id'"
        ];
        $top = [
            "1"
        ];
        return $this->getData($field, $table, $where, $top);
    }
    public function delete($idclass, $idSt)
    {
        $where = [
            "id_lop = '$idclass'",
            "id_hocsinh = '$idSt'"
        ];
        return $this->delData($this->table, $where);
    }
    public function insert($idclass, $idSt, $check)
    {
        $data = [
            'id_lop' => $idclass,
            'id_hocsinh' => $idSt,
            'sobuoidahoc' => $check,
            'apdungvoucher' => 0,
            'buoinghi' => 0,
            'hocphidanop' => 0,
        ];
        return $this->insertData($this->table, $data);
    }
    public function getVoucherAndFee($idClass, $idSt)
    {
        $field = [
            'apdungvoucher',
            'hocphidanop'
        ];
        $where = [
            "id_lop = '$idClass'",
            "id_hocsinh = '$idSt'"
        ];
        $top = null;
        return $this->getData($field, $this->table, $where, $top);
    }
    public function updateVoucher($voucher, $idClass, $idSt)
    {
        $data = [
            "apdungvoucher = '$voucher'"
        ];
        $where = [
            "id_lop = '$idClass'",
            "id_hocsinh = '$idSt'"
        ];
        return $this->updateData($this->table, $data, $where);
    }
    public function updateFee($idclass, $idSt, $payFee)
    {
        $data = [
            "hocphidanop = hocphidanop + '$payFee'"
        ];
        $where = [
            "id_lop = '$idclass'",
            "id_hocsinh = '$idSt'"
        ];
        return $this->updateData($this->table, $data, $where);
    }
    public function getPrice()
    {
        $field = [
            "lopchitiet.hocphidanop",
            "lopchitiet.apdungvoucher",
            "hocphi.sotien",
            "hocsinh.ho",
            "hocsinh.ten",
            "hocsinh.id_user",
            "lop.tenlop"
        ];
        $join = [
            "LEFT JOIN hocsinh ON lopchitiet.id_hocsinh = hocsinh.id",
            "LEFT JOIN lop ON lopchitiet.id_lop = lop.id",
            "LEFT JOIN hocphi ON lop.id_hocphi = hocphi.id"
        ];
        return $this->getJoinData($field, $this->table, $join, null, null);
    }
    public function listInClass($idclass)
    {
        $field = [
            "hocsinh.*",
            "lopchitiet.buoinghi"
        ];
        $join = [
            "JOIN hocsinh ON lopchitiet.id_hocsinh = hocsinh.id"
        ];
        $where = [
            "lopchitiet.id_lop = '$idclass'"
        ];
        return $this->getJoinData($field, $this->table, $join, $where, null);
    }
}