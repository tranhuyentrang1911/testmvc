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
                                Tạo Tài Khoản Đăng Nhập
                            </h3>
                            <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                                <li class="m-nav__item m-nav__item--home">
                                    <a href="/testmvc/admin" class="m-nav__link m-nav__link--icon">
                                        <i class="m-nav__link-icon la la-home"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--begin::Form-->
                <form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed addAcc"
                    action="" method="post">
                    <div class="m-portlet__body">
                        <div class="form-group m-form__group row">
                            <div class="column col-lg-4" style="border-right: 1px solid #e2e5ec;">
                                <h5 style="text-align: center; padding: 20px;">Tài khoản</h5>
                                <label class="col-form-label">
                                    Tên đăng nhập:
                                </label>
                                <div>
                                    <input type="text" name="id" class="form-control m-input" required="">
                                    <span class="m-form__help">
                                        Không để trống!.
                                    </span>
                                </div>
                                <label class="col-form-label">
                                    Mật khẩu:
                                </label>
                                <div>
                                    <input type="password" name="pass" class="form-control m-input" required="">
                                    <span class="m-form__help">
                                        Không để trống!.
                                    </span>
                                </div>
                                <label class="col-form-label">
                                    Xác nhận mật khẩu:
                                </label>
                                <div>
                                    <input type="password" name="repass" class="form-control m-input" required="">
                                    <span class="m-form__help">
                                        Không để trống!.
                                    </span>
                                </div>
                                <label class="col-form-label">
                                    Chức vụ:
                                </label>
                                <div>
                                    <select name="rank" class="form-control m-input">
                                        <option value="2">Giáo Viên</option>
                                        <option value="3">Học Sinh</option>

                                    </select>
                                </div>
                            </div>
                            <div class="column col-lg-8">
                                <h5 style="text-align: center; padding: 20px;">Thông tin cá nhân</h5>
                                <div style="display: flex;">
                                    <div class="col-lg-6">
                                        <label class="col-form-label">
                                            Họ:
                                        </label>
                                        <div>
                                            <input type="text" name="ho" required class="form-control m-input"
                                                placeholder="Trần Thị">
                                            <span class="m-form__help">
                                                Không để trống!.
                                            </span>
                                        </div>
                                        <label class="col-form-label" style="padding-right: 0;">
                                            Ngày Sinh:
                                        </label>
                                        <div>
                                            <input type="date" name="ngaysinh" class="form-control m-input" required="">
                                            <span class="m-form__help">
                                                Không để trống!.
                                            </span>
                                        </div>
                                        <label class="col-form-label">
                                            Giới Tính:
                                        </label>
                                        <div>
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
                                    <div class="col-lg-6">
                                        <label class="col-form-label">
                                            Tên:
                                        </label>
                                        <div>
                                            <input type="text" name="ten" class="form-control m-input" placeholder="Ngà"
                                                required="">
                                            <span class="m-form__help">
                                                Không để trống!.
                                            </span>
                                        </div>
                                        <label class="col-form-label">
                                            SĐT:
                                        </label>
                                        <div>
                                            <input type="number" name="sdt" class="form-control m-input"
                                                placeholder="0123456789" required="">
                                            <span class="m-form__help">
                                                Không để trống!.
                                            </span>
                                        </div>
                                        <label class="col-form-label">
                                            Địa Chỉ:
                                        </label>
                                        <div>
                                            <input type="text" name="diachi" class="form-control m-input"
                                                placeholder="141 Chiến Thắng, Thanh Xuân, Hà Nội" required="">
                                            <span class="m-form__help">
                                                Không để trống!.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
                        <div class="m-form__actions m-form__actions--solid">
                            <div class="row">
                                <div class="col-lg-5"></div>
                                <div class="col-lg-7">
                                    <button type="submit" name="taotk" class="btn btn-brand">
                                        Tạo
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