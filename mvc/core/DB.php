<?php

class DB
{
    public $con;
    public function __construct()
    {
        $host = "localhost:3308";
        $uname = "root";
        $pass = "";
        $db = "trungtamtienganh";

        $this->con = mysqli_connect($host, $uname, $pass) or die("could not connect to mysql");
        mysqli_select_db($this->con, $db) or die("no database");
        mysqli_query($this->con, "SET NAMES 'utf8'");
    }
    //select
    public function getDefineData($sql)
    {
        $resutl = $this->con->query($sql);
        $data = array();
        if ($resutl->num_rows > 0) {
            while ($row = $resutl->fetch_assoc()) {
                array_push($data, $row);
            }
        }
        return json_encode($data);
    }
    public function getData($field = [], $table, $where = [], $top = [])
    {
        $sql = "SELECT " . implode(",", $field) . "
                FROM $table ";
        if (!empty($where)) {
            $sql .= "WHERE " . implode(" AND ", $where);
        }
        if (!empty($top)) {
            $sql .= " LIMIT " . implode(",", $top);
        }
        return $this->getDefineData($sql);
    }
    public function getJoinData($field = [], $table, $join = [], $where = [], $top = [])
    {
        $table .= " " . implode(" ", $join);
        return $this->getData($field, $table, $where, $top);
    }
    //insert
    public function insertData($table, $data = [])
    {
        $field = "";
        $values = "";
        foreach ($data as $key => $value) {
            $field .= ", $key";
            $values .= ", '$value'";
        }
        $sql = "INSERT INTO $table(" . trim($field, ',') . ") VALUE (" . trim($values, ',') . ")";
        if ($this->con->query($sql)) {
            return true;
        } else return false;
    }
    //update
    public function updateData($table, $data = [], $where = [])
    {
        $sql = "UPDATE $table ";
        if (!empty($data)) {
            $sql .= "SET " . implode(",", $data);
        }
        if (!empty($where)) {
            $sql .= " WHERE " . implode(" AND ", $where);
        }
        if ($this->con->query($sql)) {
            return true;
        } else return false;
    }
    //delete
    public function delData($table, $where = [])
    {
        $sql = "DELETE FROM $table ";
        if (!empty($where)) {
            $sql .= "WHERE " . implode(" AND ", $where);
        }
        if ($this->con->query($sql)) {
            return true;
        } else return false;
    }
}