<?php
class Course extends DB
{
    public $table = "lop";
    public function listClass()
    {
        $field = [
            "lop.*",
            "hocphi.sotien",
            "concat(giaovien.ho,' ',giaovien.ten) AS giaovien",
            "CASE WHEN lop.hoatdong = 1 THEN 'Có' ELSE 'Không' END AS hd"
        ];
        $join = [
            "LEFT JOIN hocphi ON lop.id_hocphi = hocphi.id",
            "LEFT JOIN giaovien ON lop.id_giaovien = giaovien.id"
        ];
        return $this->getJoinData($field, $this->table, $join, null, null);
    }
    public function add($data = [])
    {
        return $this->insertData($this->table, $data);
    }
    public function update($data = [], $where = [])
    {
        return $this->updateData($this->table, $data, $where);
    }
    public function getClassById($id)
    {
        $field = [
            "lop.*",
            "hocphi.sotien",
            "concat(giaovien.ho,' ',giaovien.ten) AS gv"
        ];
        $join = [
            "LEFT JOIN hocphi ON lop.id_hocphi = hocphi.id",
            "LEFT JOIN giaovien ON lop.id_giaovien = giaovien.id"
        ];
        $where = [
            "lop.id = '$id'"
        ];
        return $this->getJoinData($field, $this->table, $join, $where, null);
    }
    public function regClass($idSt)
    {
        $field = [
            "lop.*",
            "hocphi.sotien",
            "concat(giaovien.ho,' ',giaovien.ten) AS gv"
        ];
        $join = [
            "LEFT JOIN hocphi ON lop.id_hocphi = hocphi.id",
            "LEFT JOIN giaovien ON lop.id_giaovien = giaovien.id"
        ];
        $where = [
            "lop.id NOT IN 
            (SELECT id_lop 
                FROM lopchitiet 
                WHERE id_hocsinh = '$idSt')"
        ];
        return $this->getJoinData($field, $this->table, $join, $where, null);
    }
    public function updateActive($active, $idClass)
    {
        return $this->updateData($this->table, ["hoatdong = '$active'"], ["id = '$idClass'"]);
    }
    public function updateStOff($idSt, $idClass)
    {
        $table = "lopchitiet";
        $data = [
            "buoinghi = buoinghi+1"
        ];
        $where = [
            "id_lop = '$idClass'",
            "id_hocsinh = $idSt"
        ];
        return $this->updateData($table, $data, $where);
    }
    public function updatePassClass($idClass)
    {
        $table = "lopchitiet";
        $data = [
            "sobuoidahoc = sobuoidahoc+1"
        ];
        $where = [
            "id_lop = '$idClass'"
        ];
        return $this->updateData($table, $data, $where);
    }
    public function getClassByTeacher($teacherId)
    {
        $field = [
            "lop.*",
            "hocphi.sotien"
        ];
        $join = [
            "JOIN hocphi ON lop.id_hocphi = hocphi.id"
        ];
        $where = [
            "lop.id_giaovien = '$teacherId'"
        ];
        return $this->getJoinData($field, $this->table, $join, $where, null);
    }
}