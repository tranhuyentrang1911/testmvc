<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trung tâm anh ngữ</title>
    <link rel="icon" href="./public/img/LOGO-01.png" type="image" sizes="100%">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="./public/css/home/home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;1,100&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="header flex-row">
        <div class="logo flex-row">
            <img src="./public/img/LOGO-01.png" alt="" width="100px" height="80%">

        </div>
        <ul class="header_nav flex-row">
            <li><a href="#">
                    <i class="fas fa-home"></i>
                    Home
                </a></li>
            <li><a href="#introduce">Giới thiệu</a></li>
            <li><a href="#course">Khoá học</a></li>
            <li><a href="#news">Tin tức & sự kiện</a></li>
            <li><a href="#footer">Liên hệ</a></li>
            <li><a href="javascript:;" class="js-take">Đăng ký</a></li>
            <li><a href="./login">
                    <i class="fas fa-user"></i>
                    Đăng nhập
                </a></li>


        </ul>
    </div>
    <div class="main">
        <div class="main_banner">

        </div>
        <div id="introduce">
            <img class="introduce_img" src="./public/img/balloon.png" alt="">
            <h2 class="heading">

                Tại sao nên chọn chúng tôi
                <i class="fas fa-question icon-question"></i>

            </h2>
            <div class="introduce_body">
                <div class="introduce_body-left flex-col">
                    <img src="./public/img/intro1.png" alt="" width="80%" height="80%">
                    <h3>
                        <i class="fas fa-star icon-star"></i>
                        Đảm bảo chất lượng đầu ra
                    </h3>
                    <p>ENGLISH cam kết học viên sẽ được học lại miễn phí nếu không đủ điều iện đầu ra</p>
                    <h3>
                        <i class="fas fa-star icon-star"></i>
                        Nhiều cơ hội thể hiện bản thân
                    </h3>
                    <p>Nhiều chương trình học bổng dành cho hoc sinh xuất sắc</p>
                    <h3>
                        <i class="fas fa-star icon-star"></i>
                        Môi trường hoà đồng thân thiện
                    </h3>
                    <p>Đội ngũ giảng viên sẵn sàng trả lời bất kỳ mọi thắc mắc bất cứ khi nào</p>
                    <h3>
                        <i class="fas fa-star icon-star"></i>
                        Các hoạt động bổ ích
                    </h3>
                    <p>Hoạt động nhóm thường xuyên năng cao kỹ năng cơ bản</p>
                    <h3>
                        <i class="fas fa-star icon-star"></i>
                        Chương trình giảng dạy chuẩn Cambridge
                    </h3>
                    <p>
                        Phù hợp với từng nhu cầu với 4 kỹ năng nghe nói đọc viết giúp học viên có nhiều kỹ năng để chạm
                        tới nhiều cơ hội hơn
                    </p>
                </div>
                <div class="introduce_body-right flex-col">
                    <div class="introduce_body-right-content">
                        <h3>Tiêu chuẩn dạy học 5A</h3>
                        <p>
                            <i class="fas fa-check icon-check"></i>
                            Đảm bảo chất lượng đầu ra
                        </p>
                        <p>
                            <i class="fas fa-check icon-check"></i>
                            Kiến thức phù hợp từng cấp độ
                        </p>
                        <p>
                            <i class="fas fa-check icon-check"></i>
                            Kích thích tư duy học tập
                        </p>
                        <p>
                            <i class="fas fa-check icon-check"></i>
                            Đa dạng phương pháp học tập
                        </p>
                        <p>
                            <i class="fas fa-check icon-check"></i>
                            Kiến thức chuẩn xác
                        </p>
                    </div>

                    <img class="introduce_body-right-img" src="./public/img/intro2.png" alt="">
                </div>
                <div class="clear"></div>
                <div class="introduce_body-bottom">
                    <img class="introduce_body-bottom-img" src="./public/img/banner_intro.png" alt="">
                    <img class="teacher-img" src="/testmvc/public/img/teacher_img.png" . alt="">
                </div>



            </div>

        </div>
        <div id="course">
            <h2 class="heading" style="padding-bottom: 5px;">Các khoá học của chúng tôi</h2>
            <p style="text-align:center;">Từ cơ bản đến nâng cao</p>
            <div class="course-box flex-row">
                <?php
                foreach ($data['notifi'] as $value) {
                ?>

                <div class="course-item">
                    <img class="course-item-img" src="/testmvc/public/img/tintuc/<?php echo $value['img'] ?>" alt=""
                        width="100%" height="100%">
                    <div class="course-content">
                        <p class="course-content-heading">
                            <?php echo $value['title'] ?>
                        </p>
                        <p class="course-content-describe"> <?php echo $value['content'] ?></p>

                    </div>
                    <button class="js-take cursor button-take growing">
                        Đăng kí
                    </button>
                </div>

                <?php
                }
                ?>
            </div>
        </div>
        <div id="news">
            <img class="news-img" src="./public/img/Group.png" alt="">
            <h2 class="heading">Tin tức và sự kiện</h2>

            <div class="new-box flex-row">
                <?php

                foreach ($data["post"] as $key => $value) {

                ?>
                <div class="new-item">
                    <div class="new-item-img">
                        <img src="./public/img/tintuc/<?php echo $value['hinhanh'] ?>" alt="">
                    </div>
                    <div class="new-contain">
                        <div class="new-title">
                            <a href="#news">
                                <?php
                                    if (strlen($value['tieude']) > 100) {
                                        $td = substr($value['tieude'], 0, 100);
                                        echo $td . "...";
                                    } else echo $value['tieude'];
                                    ?>
                            </a>
                        </div>
                        <div class="new-content">
                            <?php
                                if (strlen($value['noidung']) > 150) {
                                    $nd = substr($value['noidung'], 0, 150);
                                    echo $nd . "...";
                                } else echo $value['noidung'];
                                ?>
                        </div>

                    </div>

                </div>



                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div id="footer">
        <div class="footer-contact">
            <img class="img-contact" src="./public/img/banner_contact.png" alt="">
        </div>

        <div class="footer-box flex-row">
            <div class="footer-item">
                <h3>
                    <i class="fas fa-star icon-star"></i>
                    Về trung tâm tiếng anh
                </h3>
                <p>Giới thiệu về trung tâm tiếng anh English</p>
                <p>Cập nhật hàng tuần</p>
                <p>Chính sách sử dụng</p>
                <p>Điều khoản bảo mật</p>


            </div>
            <div class="footer-item">
                <h3>
                    <i class="fas fa-star icon-star"></i>
                    Chăm sóc khách hàng
                </h3>
                <p>Chính sách ưu đãi và khuyến học</p>
                <p>Hoạt động thành viên</p>
                <p>Thời gian hỗ trợ hàng ngày ( 9: 00 AM - 5:30 PM)</p>

            </div>
            <div class="footer-item">
                <h3>
                    <i class="fas fa-star icon-star"></i>
                    Liên hệ
                </h3>
                <p>Liên hệ với chúng tôi</p>
                <p>
                    <i class="fas fa-map-marker-alt"></i>
                    Địa chỉ: Số 21 đường chiến thắng thanh trì Hà Nội
                </p>
                <p>Email: englishcenter@gmail.com</p>
                <p>Điện thoại: 012345679</p>
                <div class="contact">
                    <img class="icon-contact" src="./public/img/face.png">
                    <img class="icon-contact" src="./public/img/youtube.png">

                </div>

            </div>
        </div>

    </div>
    <div class="modal js-modal">
        <div class="modal-container js-modal-container">
            <div class="modal-close js-modal-close">

                <i class="icon-close fas fa-times"></i>
            </div>
            <div class="modal-left">

                <form id="formsubmit" method="post">
                    <div class="modal-body">
                        <h3>Đăng kí nhận khuyến mãi và tư vấn miễn phí</h3>
                        <input type="text" name="username" required id="username" class="modal-items"
                            placeholder="Name...">
                        <input type="email" name="useremail" required id="useremail" class="modal-items"
                            placeholder="Email...">
                        <input type="tel" name="userphone" required id="userphone" pattern="[0-9]{10}"
                            class="modal-items" placeholder="Phone...">
                        <input type="submit" name="submit" value="Gửi yêu cầu" class="modal-submit js-submit">
                    </div>
                </form>
            </div>
            <div class="modal-right">
                <img class="modal-img" src="./public/img/submit.png" alt="">
            </div>
        </div>
    </div>

    <script>
    const subscribes = document.querySelectorAll('.js-take')
    const modal = document.querySelector('.js-modal')
    const close = document.querySelector('.js-modal-close')
    // const submit = document.querySelector('.js-submit')
    const modalContainer = document.querySelector('.js-modal-container')

    function showModal() {
        modal.classList.add('open')
    }

    function closeModal() {
        modal.classList.remove('open')
    }
    for (const subscribe of subscribes) {
        subscribe.addEventListener('click', showModal)
    }
    close.addEventListener('click', closeModal)
    // submit.addEventListener('click', closeModal)
    modal.addEventListener('click', closeModal)
    modalContainer.addEventListener('click', function(event) {
        event.stopPropagation()
    })
    </script>
    <script src="/testmvc/public/js/jquery-3.4.1.min.js"></script>
    <script>
    $(document).ready(function() {
        $("#formsubmit").on('submit', function(e) {
            e.preventDefault();
            var name = $("#username").val();
            var email = $("#useremail").val();
            var phone = $('#userphone').val();
            $.post("./ajax/addCustomer", {
                name: name,
                phone: phone,
                email: email
            }, function() {
                alert('Gửi yêu cầu hoàn tất');

            })
        })
    })
    </script>
</body>

</html>