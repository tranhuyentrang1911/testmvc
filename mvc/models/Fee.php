<?php

class Fee extends DB
{
    public $table = "hocphi";
    public function listFee()
    {
        return $this->getData(["*"],$this->table,null,null);
    }
    public function delFee($id)
    {
        return $this->delData($this->table,["id = '$id'"]);
    }
    public function addFee($fee)
    {
        return $this->insertData($this->table,['sotien'=>$fee]);
    }
}


?>