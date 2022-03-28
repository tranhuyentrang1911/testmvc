<?php
class Voucher extends DB
{
    public $table = "voucher";
    public function getVoucher()
    {
        return $this->getData(["*"],$this->table,null,null);
    }
    public function addData($mgg,$sotien,$phantram,$hieuluc)
    {
        $data = [
            "magiamgia"=>$mgg,
            "sotien"=>$sotien,
            "sophantram"=>$phantram,
            "solanhieuluc"=>$hieuluc,
        ];
        return $this->insertData($this->table,$data);
    }
    public function delItem($id)
    {
        return $this->delData($this->table,["id = '$id'"]);
    }
    public function check($code)
    {
        $check = "SELECT * FROM `voucher` WHERE `magiamgia` = '".$code."'";
        $result = $this->con->query($check);
        if ($result->num_rows>0) {
            $row = $result->fetch_assoc();
            return json_encode($row);
        }
        else return 0;
    }
    public function updateVoucher($id)
    {
        $data = [
            "solanhieuluc = solanhieuluc -1"
        ];
        return $this->updateData($this->table,$data,["id = '$id'"]);
    }
}

?>