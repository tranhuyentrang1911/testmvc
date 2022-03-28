<html lang="en"
    class="wf-poppins-n3-active wf-poppins-n4-active wf-poppins-n5-active wf-poppins-n6-active wf-poppins-n7-active wf-roboto-n3-active wf-roboto-n4-active wf-roboto-n5-active wf-roboto-n6-active wf-roboto-n7-active wf-active">
<!-- begin::Head -->

<head>
    <meta charset="utf-8">
    <title>
        Admin
    </title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <link rel="stylesheet"
        href="http://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto:300,400,500,600,700"
        media="all">
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
    <!--begin::Page Vendors -->
    <link href="/testmvc/public/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet"
        type="text/css">
    <!--end::Page Vendors -->
    <link href="/testmvc/public/assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css">
    <link href="/testmvc/public/assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css">
    <!--end::Base Styles -->
    <link rel="icon" href="/testmvc/public/img/LOGO-01.png" type="image" sizes="100%">

    <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
    <style type="text/css">
    span.im-caret {
        -webkit-animation: 1s blink step-end infinite;
        animation: 1s blink step-end infinite;
    }

    @keyframes blink {

        from,
        to {
            border-right-color: black;
        }

        50% {
            border-right-color: transparent;
        }
    }

    @-webkit-keyframes blink {

        from,
        to {
            border-right-color: black;
        }

        50% {
            border-right-color: transparent;
        }
    }

    span.im-static {
        color: grey;
    }

    div.im-colormask {
        display: inline-block;
        border-style: inset;
        border-width: 2px;
        -webkit-appearance: textfield;
        -moz-appearance: textfield;
        appearance: textfield;
    }

    div.im-colormask>input {
        position: absolute;
        display: inline-block;
        background-color: transparent;
        color: transparent;
        -webkit-appearance: caret;
        -moz-appearance: caret;
        appearance: caret;
        border-style: none;
        left: 0;
        /*calculated*/
    }

    div.im-colormask>input:focus {
        outline: none;
    }

    div.im-colormask>input::-moz-selection {
        background: none;
    }

    div.im-colormask>input::selection {
        background: none;
    }

    div.im-colormask>input::-moz-selection {
        background: none;
    }

    div.im-colormask>div {
        color: black;
        display: inline-block;
        width: 100px;
        /*calculated*/
    }
    </style>
    <style type="text/css">
    /* Chart.js */
    @-webkit-keyframes chartjs-render-animation {
        from {
            opacity: 0.99
        }

        to {
            opacity: 1
        }
    }

    @keyframes chartjs-render-animation {
        from {
            opacity: 0.99
        }

        to {
            opacity: 1
        }
    }

    .chartjs-render-monitor {
        -webkit-animation: chartjs-render-animation 0.001s;
        animation: chartjs-render-animation 0.001s;
    }


    .font-vn {
        font-family: 'Varela Round', sans-serif !important;
    }
    </style>

</head>
<!-- end::Head -->
<!-- end::Body -->


<body
    class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default font-vn"
    cz-shortcut-listen="true">
    <!-- begin:: Page -->
    <div class="m-grid m-grid--hor m-grid--root m-page">
        <!-- BEGIN: Header -->
        <header id="m_header" class="m-grid__item    m-header " m-minimize-offset="200" m-minimize-mobile-offset="200">
            <div class="m-container m-container--fluid m-container--full-height">
                <div class="m-stack m-stack--ver m-stack--desktop">
                    <!-- BEGIN: Brand -->
                    <div class="m-stack__item m-brand  m-brand--skin-dark ">
                        <div class="m-stack m-stack--ver m-stack--general">
                            <h5 style="color:white; margin-top:20px;">QUẢN LÝ</h5>
                            <div class="m-stack__item m-stack__item--middle m-brand__tools">
                                <!-- BEGIN: Left Aside Minimize Toggle -->
                                <a href="javascript:;" id="m_aside_left_minimize_toggle"
                                    class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block">
                                    <span></span>
                                </a>
                                <!-- END -->
                                <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                                <a href="javascript:;" id="m_aside_left_offcanvas_toggle"
                                    class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                                    <span></span>
                                </a>
                                <!-- END -->
                                <!-- BEGIN: Responsive Header Menu Toggler -->
                                <a id="m_aside_header_menu_mobile_toggle" href="javascript:;"
                                    class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
                                    <span></span>
                                </a>
                                <!-- END -->
                                <!-- BEGIN: Topbar Toggler -->
                                <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;"
                                    class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                                    <i class="flaticon-more"></i>
                                </a>
                                <!-- BEGIN: Topbar Toggler -->
                            </div>
                        </div>
                    </div>
                    <!-- END: Brand -->
                    <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
                        <!-- BEGIN: Horizontal Menu -->
                        <button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark "
                            id="m_aside_header_menu_mobile_close_btn">
                            <i class="la la-close"></i>
                        </button>
                        <div id="m_header_menu"
                            class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark ">
                            <ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
                                <li class="m-menu__item m-menu__item--submenu m-menu__item--rel m-menu__item--open-dropdown"
                                    m-menu-submenu-toggle="click" m-menu-link-redirect="1" aria-haspopup="true">
                                    <a href="javascript:;" class="m-menu__link m-menu__toggle">
                                        <i class="m-menu__link-icon flaticon-add"></i>
                                        <span class="m-menu__link-text">
                                            Tùy Chọn
                                        </span>
                                        <i class="m-menu__hor-arrow la la-angle-down"></i>
                                        <i class="m-menu__ver-arrow la la-angle-right"></i>
                                    </a>
                                    <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
                                        <span class="m-menu__arrow m-menu__arrow--adjust" style="left: 71px;"></span>
                                        <ul class="m-menu__subnav">
                                            <li class="m-menu__item " aria-haspopup="true">
                                                <a href="/testmvc/admin/post" class="m-menu__link ">
                                                    <i class="m-menu__link-icon flaticon-file"></i>
                                                    <span class="m-menu__link-text">
                                                        Bài viết
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="m-menu__item " aria-haspopup="true">
                                                <a href="/testmvc/admin/notification" class="m-menu__link ">
                                                    <i class="m-menu__link-icon flaticon-alert-1"></i>
                                                    <span class="m-menu__link-text">
                                                        Khoá học
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="m-menu__item " aria-haspopup="true">
                                                <a href="/testmvc/admin/listFee" class="m-menu__link ">
                                                    <i class="m-menu__link-icon flaticon-add-circular-button"></i>
                                                    <span class="m-menu__link-text">
                                                        Thêm học phí
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="m-menu__item " aria-haspopup="true">
                                                <a href="/testmvc/admin/salary" class="m-menu__link ">
                                                    <i class="m-menu__link-icon flaticon-add-circular-button"></i>
                                                    <span class="m-menu__link-text">
                                                        Thêm lương
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="m-menu__item " aria-haspopup="true">
                                                <a href="/testmvc/admin/sale" class="m-menu__link ">
                                                    <i class="m-menu__link-icon flaticon-add-circular-button"></i>
                                                    <span class="m-menu__link-text">
                                                        Thêm mã giảm giá
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true">
                                                <a href="/testmvc/admin/account" class="m-menu__link ">
                                                    <i class="m-menu__link-icon flaticon-users"></i>
                                                    <span class="m-menu__link-text">
                                                        Tạo tài khoản
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- END: Horizontal Menu -->
                        <!-- BEGIN: Topbar -->
                        <div id="m_header_topbar"
                            class="m-topbar  m-stack m-stack--ver m-stack--general m-stack--fluid">
                            <div class="m-stack__item m-topbar__nav-wrapper">
                                <ul class="m-topbar__nav m-nav m-nav--inline">
                                    <li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light"
                                        m-dropdown-toggle="click" aria-expanded="true">
                                        <a href="#" class="m-nav__link m-dropdown__toggle">
                                            <span class="m-topbar__userpic">

                                                <img src="/testmvc/public/assets/app/media/img/users/user1.jpg"
                                                    class="m--img-rounded m--marginless" alt="">
                                                <!--
													<span class="m-type m--bg-brand">
														<span class="m--font-light">
															S
															<span>
																<span>
																	-->
                                            </span>
                                            <span class="m-topbar__username m--hide">
                                                Nick
                                            </span>
                                        </a>
                                        <div class="m-dropdown__wrapper" style="z-index: 101;">
                                            <span
                                                class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"
                                                style="left: auto; right: 12.5px;"></span>
                                            <div class="m-dropdown__inner">
                                                <div class="m-dropdown__header m--align-center"
                                                    style="background-color: #8142f5;">
                                                    <div class="m-card-user m-card-user--skin-dark">
                                                        <div class="m-card-user__pic">
                                                            <img src="/testmvc/public/assets/app/media/img/users/user1.jpg"
                                                                class="m--img-rounded m--marginless" alt="">
                                                        </div>
                                                        <div class="m-card-user__details">
                                                            <span class="m-card-user__name m--font-weight-500">
                                                                <?php echo "Admin" ?>
                                                            </span>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="m-dropdown__body">
                                                    <div class="m-dropdown__content">
                                                        <ul class="m-nav m-nav--skin-light">
                                                            <li class="m-nav__section m--hide">
                                                                <span class="m-nav__section-text">
                                                                    Section
                                                                </span>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="/testmvc/admin/changepassword"
                                                                    class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-profile-1"></i>
                                                                    <span class="m-nav__link-title">
                                                                        <span class="m-nav__link-wrap">
                                                                            <span class="m-nav__link-text">
                                                                                Đổi mật khẩu
                                                                            </span>
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__separator m-nav__separator--fit"></li>
                                                            <li class="m-nav__item">
                                                                <a href="/testmvc"
                                                                    class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder font-vn">
                                                                    Trang chủ
                                                                </a>
                                                                <a href="/testmvc/logout"
                                                                    class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder font-vn">
                                                                    Đăng xuất
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <!-- END: Topbar -->
                    </div>
                </div>
            </div>
        </header>
        <!-- END: Header -->
        <!-- begin::Body -->
        <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
            <!-- BEGIN: Left Aside -->
            <button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
                <i class="la la-close"></i>
            </button>
            <div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
                <!-- BEGIN: Aside Menu -->
                <div id="m_ver_menu"
                    class="m-aside-menu m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark m-scroller ps ps--active-y"
                    m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500"
                    style="position: relative; height: 246px; overflow: hidden;">
                    <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
                        <li class="m-menu__item <?php if (strpos($data['page'], 'thongke') !== false) {
                                                    echo 'm-menu__item--active';
                                                } else echo ''; ?> " aria-haspopup="true">
                            <a href="/testmvc/admin" class="m-menu__link ">
                                <i class="m-menu__link-icon flaticon-line-graph"></i>
                                <span class="m-menu__link-title">
                                    <span class="m-menu__link-wrap">
                                        <span class="m-menu__link-text">
                                            Thống Kê
                                        </span>

                                    </span>
                                </span>
                            </a>
                        </li>
                        <li class="m-menu__item  <?php if (strpos($data['page'], 'class') !== false) {
                                                        echo 'm-menu__item--active';
                                                    } else echo ''; ?>" aria-haspopup="true">
                            <a href="/testmvc/admin/class" class="m-menu__link ">
                                <i class="m-menu__link-icon flaticon-layers"></i>
                                <span class="m-menu__link-title">
                                    <span class="m-menu__link-wrap">
                                        <span class="m-menu__link-text">
                                            QL Lớp
                                        </span>

                                    </span>
                                </span>
                            </a>
                        </li>
                        <li class="m-menu__item  <?php if (strpos($data['page'], 'teacher') !== false) {
                                                        echo 'm-menu__item--active';
                                                    } else echo ''; ?>" aria-haspopup="true">
                            <a href="/testmvc/admin/teacher" class="m-menu__link ">
                                <i class="m-menu__link-icon flaticon-profile"></i>
                                <span class="m-menu__link-title">
                                    <span class="m-menu__link-wrap">
                                        <span class="m-menu__link-text">
                                            QL Giáo Viên
                                        </span>

                                    </span>
                                </span>
                            </a>
                        </li>
                        <li class="m-menu__item  <?php if (strpos($data['page'], 'student') !== false) {
                                                        echo 'm-menu__item--active';
                                                    } else echo ''; ?>" aria-haspopup="true">
                            <a href="/testmvc/admin/student" class="m-menu__link ">
                                <i class="m-menu__link-icon flaticon-profile"></i>
                                <span class="m-menu__link-title">
                                    <span class="m-menu__link-wrap">
                                        <span class="m-menu__link-text">
                                            QL Học Sinh
                                        </span>

                                    </span>
                                </span>
                            </a>
                        </li>

                        <li class="m-menu__item <?php if (strpos($data['page'], 'option/customer') !== false) {
                                                    echo 'm-menu__item--active';
                                                } else echo ''; ?>" aria-haspopup="true">
                            <a href="/testmvc/admin/customer" class="m-menu__link ">
                                <i class="m-menu__link-icon flaticon-profile"></i>
                                <span class="m-menu__link-title">
                                    <span class="m-menu__link-wrap">
                                        <span class="m-menu__link-text">
                                            QL Khách hàng
                                        </span>

                                    </span>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; height: 246px; right: 4px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 243px;"></div>
                    </div>
                </div>
                <!-- END: Aside Menu -->
            </div>
            <div class="m-grid__item m-grid__item--fluid m-wrapper">
                <!-- END: Left Aside -->

                <!-- end:: Body -->
                <!-- begin::Footer -->

                <?php

                require_once "pages/admin_layout/" . $data['page'] . ".php";

                ?>



            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- <footer class="m-grid__item		m-footer ">
        <div class="m-container m-container--fluid m-container--full-height m-page__container">
            <div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
                <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
                    <span class="m-footer__copyright">
                        Coppyright © by
                        <a href="https://keenthemes.com" class="m-link">
                            Nhóm 100
                        </a>
                    </span>
                </div>

            </div>
        </div>
    </footer> -->
    <!-- end::Footer -->

    <!-- end:: Page -->

    <!--begin::Base Scripts -->
    <script src="/testmvc/public/js/jquery-3.4.1.min.js"></script>
    <script src="/testmvc/public/assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
    <script src="/testmvc/public/assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
    <!--end::Base Scripts -->
    <!--begin::Page Vendors -->
    <script src="/testmvc/public/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript">
    </script>
    <!--end::Page Vendors -->
    <!--begin::Page Snippets -->
    <script src="/testmvc/public/assets/app/js/dashboard.js" type="text/javascript"></script>
    <script src="/testmvc/public/assets/demo/default/custom/components/base/toastr.js" type="text/javascript"></script>
    <script src="/testmvc/public/assets/demo/default/custom/header/actions.js" type="text/javascript"></script>
    <script src="/testmvc/public/assets/demo/default/custom/crud/metronic-datatable/base/html-table.js"
        type="text/javascript"></script>
    <script src="/testmvc/public/assets/demo/default/custom/crud/metronic-datatable/base/data-local.js"
        type="text/javascript"></script>

    <script src="/testmvc/public/js/admin.js"></script>
    <!--end::Page Snippets -->

    <!-- end::Body -->




</body>

</html>