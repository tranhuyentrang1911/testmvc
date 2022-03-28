<html lang="en">
<!-- begin::Head -->

<head>
    <meta charset="utf-8" />
    <title>
        Đăng Nhập
    </title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
    WebFont.load({
        google: {
            "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
        },
        active: function() {
            sessionStorage.fonts = true;
        }
    });
    </script>
    <!--end::Web font -->
    <!--begin::Base Styles -->

    <link href="/testmvc/public/assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
    <link href="/testmvc/public/assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />

    <!--end::Base Styles -->
    <link rel="icon" href="./public/img/LOGO-01.png" type="image" sizes="100%">

    <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
    <style type="text/css">
    .font-vn {
        font-family: 'Poppins', sans-serif !important;
    }

    .alert-display {
        display: none;
        position: absolute;
        right: 0;
    }
    </style>
</head>
<!-- end::Head -->
<!-- end::Body -->

<body
    class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default font-vn">
    <!-- begin:: Page -->
    <div class="m-grid m-grid--hor m-grid--root m-page">
        <div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-1"
            id="m_login" style="background-image: url(/testmvc/public/img/background.png); position: relative;
			background-size:cover;">
            <!-- <div class="alert alert-success alert-dismissible fade show alert-display" role="alert"
                style="display: <?php echo $display; ?>;">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                <strong>
                    <?php echo $mk; ?>
                </strong>
                : Là mật khẩu của bạn.
            </div> -->
            <div class="m-grid__item m-grid__item--fluid m-login__wrapper">
                <div class="m-login__container">
                    <div class="m-login__logo">
                        <a href="#">
                            <img src="./public/img/LOGO-01.png" width="250" height="140">
                        </a>
                    </div>
                    <div class="m-login__signin">
                        <div class="m-login__head">
                            <h3 class="m-login__title">
                                ĐĂNG NHẬP
                            </h3>
                        </div>
                        <form id="formlogin" class="m-login__form m-form" action="" method="post">
                            <div class="form-group m-form__group">
                                <input class="form-control m-input input" id="id" required
                                    style="background-color: white;color:#333;" type="text" placeholder="Tên đăng nhập"
                                    name="id" autocomplete="off">
                            </div>
                            <div class="form-group m-form__group">
                                <input class="form-control m-input m-login__form-input--last input" id="pass"
                                    style="background-color: white;color:#333;" required type="password"
                                    placeholder="Mật khẩu" name="password">
                            </div>


                            <div class="m-login__form-action">
                                <input type="submit" name="submit" value="Đăng Nhập" style="background-color:#1364cf;"
                                    class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn m-login__btn--primary font-vn">

                                <a href="./home" style="background-color: #1364cf;"
                                    class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn m-login__btn--primary font-vn">
                                    Trang Chủ
                                </a>

                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end:: Page -->
    <!--begin::Base Scripts -->
    <script src="/testmvc/public/assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
    <script src="/testmvc/public/assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
    <!--end::Base Scripts -->
    <!--begin::Page Snippets -->
    <!-- <script src="/testmvc/public/assets/snippets/custom/pages/user/lgin.js" type="text/javascript"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <script src="/testmvc/public/js/jquery-3.4.1.min.js"></script>
    <script>
    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
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
        $("#formlogin").on('submit', function(e) {
            e.preventDefault();
            var a = $("#id").val();
            var b = $("#pass").val();
            $.post("./ajax/checkUser", {
                id: a,
                pass: b
            }, function(result) {

                if (result == 0) {
                    toastr.error("Tài khoản hoặc mật khẩu không đúng!");
                } else if (result == 1) window.location.replace("./admin");
                else if (result == 2) window.location.replace("./teacherH");
                else if (result == 3) window.location.replace("./studentH");

            })
        })
    })
    </script>
    <script type="text/javascript">
    if (typeof test !== 'undefined' && test[0] == 1) {
        if (typeof test[2] !== 'undefined') {
            window.location = test[2];
        } else {
            toastr.success([test[1]]);
        }
    } else if (typeof test !== 'undefined' && test[0] == 2) {
        toastr.error(test[1]);
    }
    </script>
    <!--end::Page Snippets -->


</body>
<!-- end::Body -->

</html>