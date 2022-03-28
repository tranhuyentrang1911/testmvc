<?php

class notification extends DB
{
    public $table = "khoahoc";
    public function getNotifi()
    {
        return $this->getData(["*"], $this->table, null, null);
    }
    public function updateActive($active, $id)
    {
        return $this->updateData($this->table, ["active = '$active'"], ["id = '$id'"]);
    }
    public function addNotify($tieude, $noidung, $img)
    {
        $data = [
            "title" => $tieude,
            "content" => $noidung,
            "img" => $img,
            "active" => 1,

        ];
        return $this->insertData($this->table, $data);
    }
}