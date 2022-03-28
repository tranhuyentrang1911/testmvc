<?php
require_once "./mvc/controllers/ajax/Course_Ajax.php";
class Option_Ajax extends Course_Ajax
{
    public function activepost()
    {
        $active = $_POST['active'];
        $id = $_POST['id'];
        $post = $this->model('post');
        if ($post->updateActive($active, $id)) {
            echo 1;
        } else echo 0;
    }
    public function notifi()
    {
        $active = $_POST['active'];
        $id = $_POST['id'];
        $notification = $this->model('notification');
        if ($notification->updateActive($active, $id)) {
            echo 1;
        } else echo 0;
    }
    public function addNotify()
    {
        $title = $_POST['tieude'];
        $content = $_POST['noidung'];
        $img = $_POST['img'];
        $notification = $this->model('notification');
        if ($notification->addNotify($title, $content, $img)) {
            echo 1;
        } else echo 0;
    }
    public function checkFileUpload()
    {
        if (isset($_FILES["fileToUpload"])) {
            $target_dir = "./public/img/tintuc/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            // Check if image file is a actual image or fake image
            if (isset($_POST["submit"])) {
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                if ($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
            }
            // Check file size
            if ($_FILES["fileToUpload"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if (
                $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif"
            ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            // if ($uploadOk == 0) {
            //     echo "Sorry, your file was not uploaded.";
            //     // if everything is ok, try to upload file
            // }
            // if ($uploadOk == 1) {

            //     echo 1;
            // }
            if ($uploadOk == 1) {
                // Xử lý di chuyển file tạm ra thư mục cần lưu trữ, dùng hàm move_uploaded_file
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {


                    echo 1;
                } else {
                    echo "Có lỗi xảy ra khi upload file.";
                }
            } else {
                echo "Không upload được file, có thể do file lớn, kiểu file không đúng ...";
            }
        } else echo "Not valid.";
    }
    public function addPost()
    {
        $title = $_POST['tieude'];
        $content = $_POST['noidung'];
        $image = $_POST['anh'];
        $post = $this->model('post');
        if ($post->addpost($title, $content, $image)) {
            echo 1;
        } else echo 0;
    }
    public function deleteFee()
    {
        $id = $_POST['id'];
        $fee = $this->model('Fee');
        if ($fee->delFee($id)) {
            echo 1;
        } else echo 0;
    }
    public function addFee()
    {
        $data = $_POST['fee'];
        $fee = $this->model('Fee');
        if ($fee->addFee($data)) {
            echo 1;
        } else echo 0;
    }
    public function payFee()
    {
        $id_class = $_POST['idclass'];
        $id_st = $_POST['idSt'];
        $pay_fee = $_POST['payFee'];
        if ($pay_fee < 0) {
            echo 0;
        } else {
            $detail_class = $this->model('DetailClass');
            if ($detail_class->updateFee($id_class, $id_st, $pay_fee)) {
                echo 1;
            } else {
                echo 0;
            }
        }
    }
    public function addSalary()
    {
        $luongcb = $_POST['luongcb'];
        $hsl = $_POST['hsl'];
        $salary = $this->model('Salary');
        if ($salary->addSalary($luongcb, $hsl)) {
            echo 1;
        } else echo 0;
    }
    public function deleteSalary()
    {
        $id = $_POST['id'];
        $salary = $this->model('Salary');
        if ($salary->delSalary($id)) {
            echo 1;
        } else echo 0;
    }
    public function addSale()
    {
        $mgg = $_POST['mgg'];
        $st = $_POST['st'];
        $spt = $_POST['spt'];
        $sl = $_POST['sl'];
        $voucher = $this->model('Voucher');
        if ($voucher->addData($mgg, $st, $spt, $sl)) {
            echo 1;
        } else echo 0;
    }
    public function delSale()
    {
        $id = $_POST['id'];
        $voucher = $this->model('Voucher');
        if ($voucher->delItem($id)) {
            echo 1;
        } else echo 0;
    }
    public function checkVoucher()
    {
        $code = $_POST['mgg'];
        $idClass = $_POST['idclass'];
        $idSt = $_POST['idSt'];
        $voucher = $this->model('Voucher');
        $item_voucher = json_decode($voucher->check($code), true);
        if ($item_voucher == 0) {
            echo 0;
        } else {
            if ($item_voucher['solanhieuluc'] == 0) {
                echo 0;
            } else {
                $course = $this->model('Course');
                $item_class = json_decode($course->getClassById($idClass), true);
                $detail_class = $this->model('DetailClass');
                $item_detail = json_decode($detail_class->getVoucherAndFee($idClass, $idSt), true);
                if ($item_detail[0]['apdungvoucher'] > 0) {
                    echo 1;
                } else {
                    $fee = $item_class[0]['sotien'];
                    $voucher1 = $fee - $fee * $item_voucher['sophantram'] / 100 - $item_voucher['sotien'];
                    if (($detail_class->updateVoucher($voucher1, $idClass, $idSt)) && ($voucher->updateVoucher($item_voucher['id']))) {
                        echo $voucher1;
                    } else echo 0;
                }
            }
        }
    }
    public function deleteCustomer()
    {
        $id = $_POST['id'];
        $customer = $this->model('Customer');
        if ($customer->deleteCustomer($id)) {
            echo 1;
        } else echo 0;
    }
    public function addCustomer()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $customer = $this->model('Customer');
        if ($customer->addCustomer($name, $phone, $email)) {
            echo 1;
        } else echo 0;
    }
}