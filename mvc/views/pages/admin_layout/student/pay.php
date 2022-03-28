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
                            <h3 class="m-portlet__head-text" style="border-right: 1px solid #e2e5ec;
                            padding: 7px 25px 7px 0; margin: 0 15px 0 0;">
                                Nộp học phí
                            </h3>
                        </div>
                        <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                            <li class="m-nav__item m-nav__item--home">
                                <a href="/testmvc/admin/student" class="m-nav__link m-nav__link--icon">
                                    <i class="m-nav__link-icon la la-home"></i>
                                </a>
                            </li>
                            <li class="m-nav__separator"> -
                            </li>
                            <li class="m-nav__item">
                                <a href="/testmvc/admin/studentCourse/<?php echo $data['studentId']; ?>"
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
                                <a href="/testmvc/admin/studentEdit/<?php echo $data['studentId']; ?>"
                                    class="m-nav__link">
                                    <span class="m-nav__link-text">
                                        Cập nhật thông tin
                                    </span>
                                </a>
                            </li>
                            <li class="m-nav__separator">
                            <li class="m-nav__item">
                                <a href="/testmvc/admin/studentDetail/<?php echo $data['studentId']; ?>"
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
                                <a href="/testmvc/admin/studentRegCourse/<?php echo $data['studentId']; ?>"
                                    class="m-nav__link">
                                    <span class="m-nav__link-text">
                                        Đăng Ký Lớp
                                    </span>
                                </a>
                            </li>
                        </ul>

                    </div>

                </div>
                <!--begin::Form-->
                <form class=" payFee m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed"
                    action="" method="post">
                    <div class="m-portlet__body">
                        <div class="form-group m-form__group row">
                            <div style="width: 25%;">
                                <label class="col-form-label">
                                    Tên lớp:
                                </label>
                                <label class="col-form-label" style="padding: 15px;font-weight: 600;">
                                    <?php echo $data['class'][0]['tenlop']; ?>
                                </label>
                            </div>
                            <div style="width: 25%;">
                                <label class="col-form-label">
                                    Khóa:
                                </label>
                                <label class="col-form-label" style="padding: 15px;font-weight: 600;">
                                    <?php echo $data['class'][0]['khoa']; ?>
                                </label>
                            </div>
                            <div style="width: 25%;">
                                <label class="col-form-label">
                                    Số buổi học:
                                </label>
                                <label class="col-form-label" style="padding: 15px;font-weight: 600;">
                                    <?php echo $data['class'][0]['sobuoi']; ?>
                                </label>
                            </div>
                            <div style="width: 25%;">
                                <label class="col-form-label">
                                    Giáo viên:
                                </label>
                                <label class="col-form-label" style="padding: 15px;font-weight: 600;">
                                    <?php echo $data['class'][0]['gv']; ?>
                                </label>
                            </div>
                        </div>
                        <div class="form-group m-form__group row">
                            <label class="col-lg-2 col-form-label">
                                Mã Giảm Giá:
                            </label>
                            <div class="col-lg-3">
                                <input type="text" name="magiamgia" class="form-control m-input"
                                    placeholder="Nhập mã giẩm giá nếu có">
                            </div>
                            <div class="col-lg-3">
                                <div class="m-input-icon m-input-icon--right">
                                    <span class="form-control m-input checkVoucher"
                                        style="background: #716aca;color: white;text-align: center;">Áp Dụng</span>
                                </div>
                            </div>
                            <label class="col-lg-1 col-form-label">
                                Học Phí:
                            </label>
                            <div class="col-lg-3">
                                <div class="m-input-icon m-input-icon--right">
                                    <span id="fee" class="form-control" <?php echo $data['styleFee'] ?>>
                                        <?php echo number_format($data['class'][0]['sotien']) . " VND"; ?>
                                    </span>
                                    <span id="voucher" class="form-control" <?php echo $data['styleVoucher'] ?>>
                                        <?php echo number_format($data['voucher']) . " VND"; ?>
                                    </span>
                                </div>

                            </div>
                            <div class="form-group m-form__group row" style="width: 100%;">
                                <div class="m-input-icon m-input-icon--right" style="width: 30%;">
                                    <label>
                                        Đã Nộp:
                                    </label>
                                    <div>
                                        <span class="form-control">
                                            <?php
                                            echo number_format($data['payed']) . " VND";
                                            ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="m-input-icon m-input-icon--right" style="width: 30%;">
                                    <label>
                                        Còn Nợ:
                                    </label>
                                    <div>
                                        <span class="form-control">
                                            <?php
                                            echo number_format($data['debt']) . " VND";
                                            ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group m-form__group row" style="width: 100%;">
                                <div class="m-input-icon m-input-icon--right" style="width: 50%;">
                                    <label>
                                        Nộp tiền:
                                    </label>
                                    <div>
                                        <input type="number" name="noptien" class="form-control m-input"
                                            placeholder="Nhập số tiền">
                                    </div>
                                    <label class="col-lg-1 col-form-label">
                                        VND
                                    </label>
                                </div>

                            </div>
                        </div>
                        <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
                            <div class="m-form__actions m-form__actions--solid">
                                <div class="row">
                                    <div class="col-lg-5"></div>
                                    <div class="col-lg-7">
                                        <input type="hidden" name="idClass" value="<?php echo $data['classId'] ?>">
                                        <input type="hidden" name="idSt" value="<?php echo $data['studentId'] ?>">
                                        <button type="submit" name="nophocphi" class="btn btn-brand">
                                            Nộp
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