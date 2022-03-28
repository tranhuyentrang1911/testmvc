<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="./public/img/LOGO-01.png" type="image" sizes="100%">
    <link rel="stylesheet" href="/testmvc/public/css/css1/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;1,100&display=swap"
        rel="stylesheet">
    <title>Giáo viên</title>
</head>

<body>
    <div id="main">


        <div id="main__heading">

            <div class="main__heading-logo">
                <img class="" src="/testmvc/public/img/LOGO-01.png" height="100%" width="150px">

            </div>


            <h2 class="txt-white">Trung tâm tiếng anh</h2>


        </div>


        <div id="main__body">
            <div class="main__body-left float-left flex-col">
                <h3 class="txt-black">Danh mục chính</h3>
                <ul class="menu">
                    <li><a class="js-active" href="/testmvc/teacherH">
                            <i class="fas fa-house-user"></i>
                            Home</a></li>
                    <li><a class="js-active" href="/testmvc/teacherH/changepassword">
                            <i class="fas fa-key"></i>
                            Đổi mật khẩu</a></li>
                    <li><a class="js-active" href="/testmvc/teacherH/information">
                            <i class="fas fa-info-circle"></i>
                            Thông tin cá nhân</a>

                    </li>
                    <li><a class="js-active"
                            href="/testmvc/teacherH/teacherDetail/<?php echo $data['teacher'][0]['id']; ?>">
                            <i class="fas fa-info-circle"></i>
                            Danh sách lớp đang dạy</a>
                    </li>

                </ul>

            </div>
            <div class="main-body-right float-left">
                <div class="body__nav">
                    <ul class="nav flex-row">
                        <li><a href="/testmvc">Trang chủ</a></li>
                        <li><a href="/testmvc//logout">Thoát</a></li>
                        <li><a href="">Hỏi đáp</a></li>
                        <li><a href="">Trợ giúp</a></li>
                    </ul>

                </div>
                <?php

                require_once "pages/teacher_layout/" . $data['page'] . ".php";

                ?>
            </div>
        </div>
        <footer id="main__footer">
            <ul class=" nav flex-row float-right">
                <li><a href="/testmvc">Trang chủ </a></li>
                <span class="txt-white mr">|</span>
                <li><a href="/testmvc//logout">Thoát </a></li>
                <span class="txt-white mr">|</span>
                <li><a href="">Hỏi đáp </a></li>
                <span class="txt-white mr">|</span>
                <li><a href="">Trợ giúp </a></li>
                <span class="txt-white mr">|</span>
            </ul>
        </footer>
    </div>
    <script>
    const no_actives = document.querySelectorAll('.js-active');
    for (const no_active of no_actives) {
        no_active.addEventListener('click', function() {

            no_active.classList.add('active')
        })

    }
    </script>
    <script src="/testmvc/public/js/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" type="text/javascript"></script>
    <script>
    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-bottom-left",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };
    </script>
    <script>
    $(document).ready(function() {
        $('#changepassw').on('submit', function(e) {
            e.preventDefault();
            var a = $("#pass").val();
            var b = $("#newpass").val();
            var c = $("#renewpass").val();
            $.post('/testmvc/ajax/changePass', {
                pass: a,
                newpass: b,
                renewpass: c
            }, function(result) {
                switch (result) {
                    case '0':
                        toastr.error("Mật khẩu không đúng!");
                        break;
                    case '1':
                        toastr.success("Đổi mật khẩu thành công!");
                        break;
                    case '2':
                        toastr.error("Đã có lỗi!");
                        break;
                    case '3':
                        toastr.error("Xác nhận mật khẩu mới không khớp!");
                        break;
                    case '4':
                        toastr.error("Mật khẩu mới phải khác mật khẩu cũ!");
                        break;
                    default:
                        toastr.error("Đã có lỗi!");
                        break;
                }
                toastr.result;
            })
        })

    })
    </script>

</body>

</html>