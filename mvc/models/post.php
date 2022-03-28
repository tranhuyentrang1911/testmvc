<?php

class Post extends DB
{
    public $table = "baiviet";
    public function listPost()
    {
        return $this->getData(["*"], $this->table, null, null);
    }
    public function updateActive($active, $id)
    {
        return $this->updateData($this->table, ["hoatdong = '$active'"], ["id = '$id'"]);
    }
    public function addpost($title, $content, $image)
    {
        $data = [
            "tieude" => $title,
            "noidung" => $content,
            "hinhanh" => $image,
            "hoatdong" => 1,

        ];
        return $this->insertData($this->table, $data);
    }
}