<?php
require_once "./mvc/controllers/admin/Dashboard_C.php";
class Option_C extends Dashboard_C
{
    public function post()
    {
        $post = $this->model('post');
        $list_post = json_decode($post->listPost(), true);

        $this->view("admin_v", [
            'page' => 'option/post',
            'post' => $list_post
        ]);
    }
    public function customer()
    {
        $customer = $this->model('customer');
        $list_customer = json_decode($customer->listCustomer(), true);

        $this->view("admin_v", [
            'page' => 'option/customer',
            'customer' => $list_customer
        ]);
    }
    public function addpost()
    {
        $this->view("admin_v", [
            'page' => 'option/addpost'
        ]);
    }

    public function notification()
    {
        $notification = $this->model('notification');
        $list_notifi = json_decode($notification->getNotifi(), true);
        $this->view("admin_v", [
            'page' => 'option/notification',
            'notifi' => $list_notifi
        ]);
    }
    public function addNotify()
    {
        $this->view("admin_v", ['page' => 'option/addNotify']);
    }
    public function addFee()
    {
        $this->view("admin_v", [
            'page' => 'option/addFee'
        ]);
    }
    public function listFee()
    {
        $fee = $this->model('Fee');
        $list_fee = json_decode($fee->listFee(), true);
        $this->view("admin_v", [
            'page' => 'option/listFee',
            'listFee' => $list_fee
        ]);
    }
    public function salary()
    {
        $salary = $this->model('Salary');
        $list_salary = json_decode($salary->getSalary(), true);
        $this->view("admin_v", [
            'page' => 'option/listSalary',
            'list' => $list_salary
        ]);
    }
    public function addSalary()
    {
        $this->view("admin_v", ['page' => 'option/addSalary']);
    }
    public function sale()
    {
        $voucher = $this->model('Voucher');
        $list_voucher = json_decode($voucher->getVoucher(), true);
        $this->view("admin_v", [
            'page' => 'option/sale',
            'list' => $list_voucher
        ]);
    }
    public function addSale()
    {
        $this->view("admin_v", [
            'page' => 'option/addSale'
        ]);
    }
    public function account()
    {
        $this->view("admin_v", [
            'page' => 'option/account'
        ]);
    }
}