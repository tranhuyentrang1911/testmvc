<div class="m-content">
    <!--begin::Portlet-->
    <div class="m-portlet">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text" style="border-right: 1px solid #e2e5ec;
                        padding: 7px 25px 7px 0; margin: 0 15px 0 0;">
						Thêm MGG
					</h3>
                    <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                        <li class="m-nav__item m-nav__item--home">
                            <a href="/testmvc/admin/sale" class="m-nav__link m-nav__link--icon">
                                <i class="m-nav__link-icon la la-home"></i>
                            </a>
                        </li>               
                    </ul>
                </div>
            </div>
        </div>
        <!--begin::Form-->
        <form class="m-form m-form--fit m-form--label-align-right addSale" action="" method="post">
            <div class="m-portlet__body">
                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">
                        Mã giảm giá:
                    </label>
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <input type="text" class="form-control m-input" name="mgg">
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">
                        Số tiền:
                    </label>
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <input type="number" class="form-control m-input" name="sotien">
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">
                        Số %:
                    </label>
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <input type="number" class="form-control m-input" name="sopt">
                    </div>
                </div>
                <div class="form-group m-form__group row">
                    <label class="col-form-label col-lg-3 col-sm-12">
                        Số lần hiệu lực:
                    </label>
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <input type="number" class="form-control m-input" name="solan">
                    </div>
                </div>
            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions m-form__actions">
                    <div class="row">
                        <div class="col-lg-9 ml-lg-auto">
                            <button type="submit" name="themmgg" class="btn btn-brand">
                                Thêm
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