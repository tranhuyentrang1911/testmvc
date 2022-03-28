<?php
require_once "./mvc/controllers/ajax/Option_Ajax.php";
class Student_Ajax extends Option_Ajax
{
    public function studentEdit()
    {
        $id = $_POST['id'];
        $firstname = $_POST['firstname'];
        $name = $_POST['name'];
        $birthday = $_POST['birthday'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];

        $sex = $_POST['sex'];

        $data = [
            "ho = '$firstname'",
            "ten = '$name'",
            "ngaysinh = '$birthday'",
            "gioitinh = '$sex'",
            "sdt = '$phone'",
            "diachi = '$address'",

        ];
        $where = [
            "id = '$id'"
        ];

        $student = $this->model('student');
        if ($student->update($data, $where)) {
            echo 1;
        } else echo 0;
    }
}