
<div class="m-content">
    <!--begin::Portlet-->
    <div class="m-portlet">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text" style="border-right: 1px solid #e2e5ec;
                        padding: 7px 25px 7px 0; margin: 0 15px 0 0;">
						Đổi mật khẩu
					</h3>
                </div>
            </div>
        </div>
        <!--begin::Form-->
        <form id="changepassw" class="m-form m-form--fit m-form--label-align-right">
            <div class="m-portlet__body">
                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">
                        Mật khẩu cũ:
                    </label>
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <input type="password" class="form-control m-input" id="pass">
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">
                        Mật khẩu mới:
                    </label>
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <input type="password" class="form-control m-input" id="newpass">
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">
                        Xác nhận mật khẩu mới:
                    </label>
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <input type="password" class="form-control m-input" id="renewpass">
                    </div>
                </div>
            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions m-form__actions">
                    <div class="row">
                        <div class="col-lg-9 ml-lg-auto">
                            <button type="submit" name="doimk" class="btn btn-brand">
                                OK
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