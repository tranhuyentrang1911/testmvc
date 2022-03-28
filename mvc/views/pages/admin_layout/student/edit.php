<div class="m-content">
    <div class="row">
        <div class="col-lg-12">

            <!--begin::Portlet-->
            <div class="m-portlet">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <span class="m-portlet__head-icon m--hide">
                                <i class="la la-gear"></i>
                            </span>
                            <h3 class="m-portlet__head-title" style="border-right: 1px solid #e2e5ec;
	                            padding: 7px 25px 7px 0; margin: 0 15px 0 0;">
                                Cập Nhật Thông Tin
                            </h3>
                            <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                                <li class="m-nav__item m-nav__item--home">
                                    <a href="/testmvc/admin/student" class="m-nav__link m-nav__link--icon">
                                        <i class="m-nav__link-icon la la-home"></i>
                                    </a>
                                </li>
                                <li class="m-nav__separator"> -
                                </li>
                                <li class="m-nav__item">
                                    <a href="/testmvc/admin/studentCourse/<?php echo $data['studentId'] ?>"
                                        class="m-nav__link">
                                        <span class="m-nav__link-text">
                                            DS Lớp Đang Học
                                        </span>
                                    </a>
                                </li>
                                <li class="m-nav__separator">
                                    -
                                </li>
                                <li class="m-nav__item">
                                    <a href="/testmvc/admin/studentDetail/<?php echo $data['studentId'] ?>"
                                        class="m-nav__link">
                                        <span class="m-nav__link-text">
                                            Chi tiết Học Sinh
                                        </span>
                                    </a>
                                </li>
                                <li class="m-nav__separator">
                                    -
                                </li>
                                <li class="m-nav__item">
                                    <a href="/testmvc/admin/studentRegCourse/<?php echo $data['studentId'] ?>"
                                        class="m-nav__link">
                                        <span class="m-nav__link-text">
                                            Đăng Ký Lớp
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--begin::Form-->
                <form class="studentEdit m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed"
                    action="" method="post">
                    <div class="m-portlet__body">
                        <div class="form-group m-form__group row">
                            <label class="col-lg-1 col-form-label">
                                Họ:
                            </label>
                            <div class="col-lg-3">
                                <input type="text" name="ho" required class="form-control m-input"
                                    value="<?php echo $data['student'][0]['ho']; ?>">
                                <span class="m-form__help">
                                    Để nguyên nếu không thay đổi!.
                                </span>
                            </div>
                            <label class="col-lg-1 col-form-label">
                                Tên:
                            </label>
                            <div class="col-lg-3">
                                <input type="text" name="ten" class="form-control m-input"
                                    value="<?php echo $data['student'][0]['ten']; ?>">
                                <span class="m-form__help">
                                    Không thay đổi vui lòng để trống!.
                                </span>
                            </div>
                            <label class="col-lg-1 col-form-label" style="padding-right: 0;">
                                Ngày Sinh:
                            </label>
                            <div class="col-lg-3">
                                <input type="date" name="ngaysinh" class="form-control m-input"
                                    value="<?php echo $data['student'][0]['ngaysinh']; ?>">
                                <span class="m-form__help">
                                    Không thay đổi vui lòng để trống!.
                                </span>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-1 col-form-label">
                                SĐT:
                            </label>
                            <div class="col-lg-3">
                                <input type="number" name="sdt" class="form-control m-input"
                                    value="<?php echo $data['student'][0]['sdt']; ?>">
                                <span class="m-form__help">
                                    Không thay đổi vui lòng để trống!.
                                </span>
                            </div>
                            <label class="col-lg-1 col-form-label">
                                Địa Chỉ:
                            </label>
                            <div class="col-lg-3">
                                <input type="text" name="diachi" class="form-control m-input"
                                    value="<?php echo $data['student'][0]['diachi']; ?>">
                                <span class="m-form__help">
                                    Không thay đổi vui lòng để trống!.
                                </span>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">


                            <label class="col-lg-3 col-form-label">
                                Giới Tính:
                            </label>
                            <div class="col-lg-3">
                                <div class="m-radio-inline">
                                    <label class="m-radio m-radio--solid">
                                        <input type="radio" name="gioitinh" checked="" value="nam"> Nam
                                        <span></span>
                                    </label>
                                    <label class="m-radio m-radio--solid">
                                        <input type="radio" name="gioitinh" value="nu"> Nữ
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
                        <div class="m-form__actions m-form__actions--solid">
                            <div class="row">
                                <div class="col-lg-5"></div>
                                <div class="col-lg-7">
                                    <input type='hidden' name='studentId' value='<?php echo $data['studentId'] ?>'>
                                    <button type="submit" name="ok" class="btn btn-brand">
                                        Lưu
                                    </button>
                                    <button type="reset" class="btn btn-secondary">
                                        Hủy
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!--end::Form-->
            </div>
            <!--end::Portlet-->
        </div>
    </div>
</div>