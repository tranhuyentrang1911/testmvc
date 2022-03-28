<?php

class Users extends DB
{
    public $table = "users";
    public function newPass($newPass)
    {
        $id = $_SESSION['id'];
        $data = [
            "password = '$newPass'"
        ];
        return $this->updateData($this->table,$data,["id = '$id'"]);
    }
  
    public function checkpass($pass)
    {
        $id = $_SESSION['id'];
        $where = [
            "password = '$pass'",
            "id = '$id'"
        ];
        return $this->getData(["*"],$this->table,$where,null);
    }
   
    public function checkUser($id,$pass)
    {
        $check = "SELECT `id`,
        `rank`,
        `username` 
        FROM `users` 
        WHERE `username`='".$id."' 
        AND `password`='".$pass."'";
        $result = $this->con->query($check);
        if ($result->num_rows>0) {
            $row = $result->fetch_assoc();
            $_SESSION['rank'] = $row['rank'];
            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            return json_encode($row['rank']);
        }
        else return json_encode(0);
    }
    public function user()
    {
        return $this->getData(["*"],$this->table,null,null);
    }
}