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
                                    <a href="/testmvc/admin/class" class="m-nav__link m-nav__link--icon">
                                        <i class="m-nav__link-icon la la-home"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--begin::Form-->
                <form class="editClass m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed"
                    action="" method="post">
                    <div class="m-portlet__body">
                        <div class="form-group m-form__group row">
                            <label class="col-lg-1 col-form-label">
                                Tên Lớp:
                            </label>
                            <div class="col-lg-3">
                                <input type="text" name="tenlop" class="form-control m-input"
                                    value="<?php echo $data['classEdit'][0]['tenlop']; ?>" required>
                                <input type='hidden' name='classId' value='<?php echo $data['classId']; ?>'>
                                <span class="m-form__help">
                                    Để nguyên nếu không muốn thay đổi.
                                </span>
                            </div>
                            <label class="col-lg-1 col-form-label">
                                Khóa:
                            </label>
                            <div class="col-lg-3">
                                <input type="number" name="khoa" class="form-control m-input"
                                    value="<?php echo $data['classEdit'][0]['khoa']; ?>">
                                <span class="m-form__help">
                                    Không thay đổi vui lòng để trống!
                                </span>
                            </div>
                            <label class="col-lg-1 col-form-label">
                                Số Buổi:
                            </label>
                            <div class="col-lg-3">
                                <input type="number" name="sobuoi" class="form-control m-input"
                                    value="<?php echo $data['classEdit'][0]['sobuoi']; ?>">
                                <span class="m-form__help">
                                    Không thay đổi vui lòng để trống!
                                </span>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-1 col-form-label">
                                Giáo Viên:
                            </label>
                            <div class="col-lg-3">
                                <select class="form-control m-input" name="giaovien">
                                    <?php foreach ($data['teacher'] as $key => $value) { ?>
                                    <option value="<?php echo $value['id']; ?>">
                                        <?php echo $value['ho'] . " " . $value['ten']; ?>
                                    </option>
                                    <?php } ?>
                                </select>
                                <span class="m-form__help">
                                    Chọn giáo viên.
                                </span>
                            </div>
                            <label class="col-lg-1 col-form-label">
                                Học Phí:
                            </label>
                            <div class="col-lg-3">
                                <select class="form-control m-input" name="hocphi">
                                    <?php foreach ($data['fee'] as $key => $value) { ?>
                                    <option value="<?php echo $value['id']; ?>">
                                        <?php echo number_format($value['sotien']) . " VND"; ?>
                                    </option>
                                    <?php } ?>
                                </select>
                                <span class="m-form__help">
                                    Chọn học phí.
                                </span>


                            </div>
                            <label class="col-lg-1 col-form-label">
                                Lịch học:
                            </label>
                            <div class="col-lg-3">
                                <select class="form-control m-input" name="lichhoc">
                                    <option>Tối thứ 2, 4</option>
                                    <option>Tối thứ 3, 5</option>
                                    <option>Tối thứ 4, 6</option>
                                </select>
                                <span class="m-form__help">
                                    Chọn lịch học.
                                </span>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-3 col-form-label">
                                Hoạt Động:
                            </label>
                            <div class="col-lg-3">
                                <div class="m-radio-inline">
                                    <label class="m-radio m-radio--solid">
                                        <input type="radio" name="hoatdong" checked="" value="1"> Có
                                        <span></span>
                                    </label>
                                    <label class="m-radio m-radio--solid">
                                        <input type="radio" name="hoatdong" value="0"> Không
                                        <span></span>
                                    </label>
                                </div>
                                <span class="m-form__help">
                                    Chọn trạng thái hoạt động.
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
                        <div class="m-form__actions m-form__actions--solid">
                            <div class="row">
                                <div class="col-lg-5"></div>
                                <div class="col-lg-7">
                                    <button type="submit" name="sualop" class="btn btn-brand">
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