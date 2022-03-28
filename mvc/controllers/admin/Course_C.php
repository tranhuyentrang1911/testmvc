<?php
class Course_C extends controler
{
    public function class()
    {
        $course = $this->model('Course');
        $item_class = json_decode($course->listClass(), true);
        $this->view("admin_v", [
            'page' => 'class/manage',
            'classManager' => $item_class
        ]);
    }
    public function openclass()
    {
        $teacher = $this->model('teacher');
        $item_teacher = json_decode($teacher->getInfor(), true);
        $fee = $this->model('Fee');
        $item_fee = json_decode($fee->listFee(), true);
        $this->view("admin_v", [
            'page' => 'class/openClass',
            'teacher' => $item_teacher,
            'fee' => $item_fee
        ]);
    }
    public function editClass($id)
    {
        $course = $this->model('Course');
        $item_class = json_decode($course->getClassById($id), true);
        $teacher = $this->model('teacher');
        $item_teacher = json_decode($teacher->getInfor(), true);
        $fee = $this->model('Fee');
        $item_fee = json_decode($fee->listFee(), true);
        $this->view("admin_v", [
            'page' => 'class/editClass',
            'classEdit' => $item_class,
            'teacher' => $item_teacher,
            'fee' => $item_fee,
            'classId' => $id
        ]);
    }
    public function checkClass($idClass)
    {
        $detail_class = $this->model('DetailClass');
        $item_class = json_decode($detail_class->statusClass($idClass), true);
        $status = "";
        $display = '';
        $list_student = json_decode($detail_class->listInClass($idClass), true);
        if ($item_class[0]['sobuoidahoc'] >= $item_class[0]['sobuoi']) {
            $status = 'Lớp đã kết thúc';
            $display = 'none';
        } else {
            $status = 'Điểm danh buổi thứ: ' . ($item_class[0]['sobuoidahoc'] + 1) . ', còn lại: ' . ($item_class[0]['sobuoi'] - ($item_class[0]['sobuoidahoc'] + 1)) . ' buổi.';
        }
        $this->view("admin_v", [
            'page' => 'class/check',
            'detail' => $item_class,
            'status' => $status,
            'display' => $display,
            'listSt' => $list_student,
            'idClass' => $idClass
        ]);
    }
}