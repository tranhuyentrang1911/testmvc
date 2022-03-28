<?php

class teacherPage extends Controler
{

    public function myhome()
    {

        $teacher = $this->model("teacher");
        $item_teacher = json_decode($teacher->getInforByIdUser(), true);

        $post = $this->model('post');
        $list_post = json_decode($post->listPost(), true);
        $this->view("teacher_v", [
            'page' => 'post',
            "teacher" => $item_teacher,
            "post" => $list_post
        ]);
    }
    public function information()
    {
        $teacher = $this->model("teacher");
        $item_teacher = json_decode($teacher->getInforByIdUser(), true);

        $this->view(
            "teacher_v",
            [
                "page" => "information",
                "teacher" => $item_teacher
            ]
        );
    }
    public function changepassword()
    {
        $teacher = $this->model("teacher");
        $item_teacher = json_decode($teacher->getInforByIdUser(), true);
        $this->view("teacher_v", [
            'page' => 'ChangePassword',
            "teacher" => $item_teacher
        ]);
    }

    public function teacherDetail($id)
    {
        $teacher = $this->model("teacher");
        $item_teacher = json_decode($teacher->getInforByIdUser(), true);

        $course = $this->model('Course');
        $list_class = json_decode($course->getClassByTeacher($id), true);
        $this->view("teacher_v", [
            'page' => 'detail',
            "teacher" => $item_teacher,
            'detail' => $list_class,
            'teacherId' => $id
        ]);
    }
}