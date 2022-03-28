<?php
require_once "./mvc/controllers/admin/Profile_C.php";
class Student_C extends Profile_C
{
    public function student()
    {
        $student = $this->model('student');
        $list_student = json_decode($student->getDataSt(), true);
        $this->view("admin_v", [
            'page' => 'student/manage',
            'student' => $list_student
        ]);
    }
    public function studentEdit($id_st)
    {
        $student = $this->model('student');
        $item_student = json_decode($student->getDataStById($id_st), true);

        $this->view("admin_v", [
            'page' => 'student/edit',
            'student' => $item_student,

            'studentId' => $id_st
        ]);
    }
    public function studentDetail($id_st)
    {
        $detail_class = $this->model('DetailClass');
        $list_class = json_decode($detail_class->getDataByIdSt($id_st), true);
        $this->view("admin_v", [
            'page' => 'student/detail',
            'detail' => $list_class,
            'studentId' => $id_st
        ]);
    }
    public function studentCourse($id_st)
    {
        $detail_class = $this->model('DetailClass');
        $list_class = json_decode($detail_class->getDataByIdSt($id_st), true);
        $this->view("admin_v", [
            'page' => 'student/course',
            'detail' => $list_class,
            'studentId' => $id_st
        ]);
    }
    public function studentRegCourse($id_st)
    {
        $course = $this->model('Course');
        $list_class = json_decode($course->regClass($id_st), true);
        $this->view("admin_v", [
            'page' => 'student/regCourse',
            'reg' => $list_class,
            'studentId' => $id_st
        ]);
    }
    public function studentPay($id_st, $id_class)
    {
        $course = $this->model('Course');
        $item_class = json_decode($course->getClassById($id_class), true);
        $detail_class = $this->model('DetailClass');
        $item_check = json_decode($detail_class->getVoucherAndFee($id_class, $id_st), true);
        $voucher = 0;
        $style_fee = '';
        $style_voucher = '';
        if ($item_check[0]['apdungvoucher'] > 0) {
            $voucher = $item_check[0]['apdungvoucher'];
            $style_fee = 'style="text-decoration: line-through;"';
            $debt = $voucher - $item_check[0]['hocphidanop'];
        } else {
            $style_voucher = 'style="display: none;"';
            $debt = $item_class[0]['sotien'] - $item_check[0]['hocphidanop'];
        }
        $this->view("admin_v", [
            'page' => 'student/pay',
            'voucher' => $voucher,
            'styleFee' => $style_fee,
            'styleVoucher' => $style_voucher,
            'class' => $item_class,
            'payed' => $item_check[0]['hocphidanop'],
            'debt' => $debt,
            'studentId' => $id_st,
            'classId' => $id_class
        ]);
    }
}