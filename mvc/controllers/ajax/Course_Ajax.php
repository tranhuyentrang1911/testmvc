<?php
class Course_Ajax extends Controler
{
    public function addClass()
    {
        $data = [
            "tenlop" => $_POST['name'],
            "khoa" => $_POST['course'],
            "sobuoi" => $_POST['time'],
            "id_giaovien" => $_POST['teacher'],
            "id_hocphi" => $_POST['fee'],
            "lichhoc" => $_POST['calendar'],
            "hoatdong" => $_POST['active']
        ];
        $course = $this->model('Course');
        if ($course->add($data)) {
            echo 1;
        } else echo 0;
    }
    public function editClass()
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $course = $_POST['course'];
        $time = $_POST['time'];
        $teacher = $_POST['teacher'];
        $fee = $_POST['fee'];
        $calendar = $_POST['calendar'];
        $active = $_POST['active'];

        $data = [
            "tenlop = '$name'",
            "khoa = '$course'",
            "sobuoi = '$time'",
            "id_giaovien = '$teacher'",
            "id_hocphi = '$fee'",
            "lichhoc='$calendar'",
            "hoatdong = '$active'"
        ];
        $where = [
            "id = '$id'"
        ];

        $course = $this->model('Course');
        if ($course->update($data, $where)) {
            $rep = [
                "status" => "success",
                "mess" => "Cập nhật thành công"
            ];
            echo json_encode($rep);
        } else {
            $rep = [
                "status" => "error",
                "mess" => "Cập nhật thất bại!"
            ];
            echo json_encode($rep);
        }
    }
    public function checkClass()
    {
        $course = $this->model('Course');
        $id_st = $_POST['names'];
        $id_class = $_POST['idClass'];
        $a = $_POST['a'];
        $b = $_POST['b'];

        if ($a == $b - 1) {
            $active = 0;
            $course->updateActive($active, $id_class);
        }


        foreach ($id_st as $key => $value) {
            $course->updateStOff($value, $id_class);
        }
        $course->updatePassClass($id_class);
    }
    public function deteteReg()
    {
        $id_class = $_POST['idclass'];
        $id_st = $_POST['idSt'];

        $detail_class = $this->model('DetailClass');
        if ($detail_class->delete($id_class, $id_st)) {
            echo 1;
        } else echo 0;
    }
    public function regClass()
    {
        $id_class = $_POST['idclass'];
        $id_st = $_POST['idSt'];
        $detail_class = $this->model('DetailClass');
        $item_class = json_decode($detail_class->getDataByIdClass($id_class), true);
        if ($item_class['sobuoidahoc'] >= 3) {
            echo 0;
        } else {
            if ($detail_class->insert($id_class, $id_st, $item_class['sobuoidahoc'])) {
                echo 1;
            } else echo 0;
        }
    }
}