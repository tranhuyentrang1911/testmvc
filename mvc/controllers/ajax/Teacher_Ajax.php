<?php
require_once "./mvc/controllers/ajax/Student_Ajax.php";
class Teacher_Ajax extends Student_Ajax
{
    public function teacherEdit()
    {
        $id = $_POST['id'];
        $firstname = $_POST['firstname'];
        $name = $_POST['name'];
        $birthday = $_POST['birthday'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $salary = $_POST['salary'];
        $sex = $_POST['sex'];

        $data = [
            "ho = '$firstname'",
            "ten = '$name'",
            "ngaysinh = '$birthday'",
            "gioitinh = '$sex'",
            "sdt = '$phone'",
            "diachi = '$address'",
            "id_luong = '$salary'",
        ];
        $where = [
            "id = '$id'"
        ];

        $teacher = $this->model('teacher');
        if ($teacher->update($data,$where)) {
            echo 1;
        }
        else echo 0;
    }
}
?>
