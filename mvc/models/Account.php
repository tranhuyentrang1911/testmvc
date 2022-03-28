<?php
class Account extends DB
{
    public function addUser($id, $pass, $rank)
    {
        $table = "users";
        $data = [

            "username" => $id,
            "password" => $pass,
            "rank" => $rank
        ];
        if ($this->insertData($table, $data)) {
            $last_id = $this->con->insert_id;
            return $last_id;
        } else return false;
    }

    public function addInfor($data, $rank)
    {
        $table = "";
        if ($rank == '2') {
            $table = "giaovien";
        } else {
            $table = "hocsinh";
        }
        return $this->insertData($table, $data);
    }
}