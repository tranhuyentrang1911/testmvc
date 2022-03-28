<?php
require_once "./mvc/controllers/admin/Student_C.php";
class Teacher_C extends Student_C
{
    public function teacher()
    {
        $teacher = $this->model('teacher');
        $list_teacher = json_decode($teacher->getInfor(),true);
        $this->view("admin_v",[
            'page'=>'teacher/manage',
            'teacher'=>$list_teacher
            ]);
    }
    public function teacherEdit($id)
    {
        $teacher = $this->model('teacher');
        $item_teacher = json_decode($teacher->getInforById($id),true);
        $salary = $this->model('Salary');
        $list_salary = json_decode($salary->getSalary(),true);
        $this->view("admin_v",[
            'page'=>'teacher/edit',
            'teacher'=>$item_teacher,
            'salary'=>$list_salary,
            'teacherId'=>$id
            ]);
    }
    public function teacherMission($id)
    {
        $course = $this->model('Course');
        $list_class = json_decode($course->getClassByTeacher($id),true);
        $this->view("admin_v",[
            'page'=>'teacher/mission',
            'class'=>$list_class,
            'teacherId'=>$id
            ]);
    }
}


?>