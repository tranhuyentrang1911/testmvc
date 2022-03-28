<?php

class studentPage extends Controler
{
    public function myhome()
    {
        $student = $this->model('student');
        $list = json_decode($student->getDataStByIdUser(), true);
        $post = $this->model('post');
        $list_post = json_decode($post->listPost(), true);
        $this->view("student_v", [
            'page' => 'post',
            "student" => $list,
            "post" => $list_post
        ]);
    }
    public function changepassword()
    {
        $student = $this->model('student');
        $list = json_decode($student->getDataStByIdUser(), true);
        $this->view("student_v", [
            'page' => 'ChangePassword',
            "student" => $list
        ]);
    }
    public function information()
    {
        $student = $this->model('student');
        $list = json_decode($student->getDataStByIdUser(), true);

        $this->view("student_v", [
            "page" => "information",
            "student" => $list
        ]);
    }
    public function studentDetail($id_st)
    {
        $student = $this->model('student');
        $list = json_decode($student->getDataStByIdUser(), true);

        $detail_class = $this->model('DetailClass');
        $list_class = json_decode($detail_class->getDataByIdSt($id_st), true);
        $this->view("student_v", [
            'page' => 'detail',
            "student" => $list,
            'detail' => $list_class,
            'studentId' => $id_st
        ]);
    }
}