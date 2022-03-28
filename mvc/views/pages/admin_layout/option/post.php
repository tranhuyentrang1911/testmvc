<div class="m-content">
    <div class="m-portlet m-portlet--mobile">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <h3 class="m-portlet__head-title" style="border-right: 1px solid #e2e5ec;
                        padding: 7px 25px 7px 0; margin: 0 15px 0 0;">
                    Danh Sách Bài Viết
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
        <div class="m-portlet__body" style="padding-top: 0;padding-bottom: 0;">
            <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                <div class="row align-items-center">
                    <div class="col-xl-12 order-2 order-xl-1">
                        <div class="form-group m-form__group row align-items-center">
                            <div class="col-md-2" style="left: 75%; ">
                                <a href="/testmvc/admin/addpost"
                                    class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air ">
                                    <span>
                                        <i class="la la-plus "></i>
                                        <span>
                                            Thêm Bài Viết
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="m-separator m-separator--dashed d-xl-none "></div>
                </div>
            </div>
        </div>
        <!--end: Search Form -->
        <!--begin: Datatable -->
        <div class="m_datatable m-datatable m-datatable--default m-datatable--loaded" id="local_data"
            style="position: static; zoom: 1;">
            <table class="m-datatable__table" style="display: block; min-height: 300px; overflow-x: auto;">
                <thead class="m-datatable__head">
                    <tr class="m-datatable__row" style="left: 0px;">
                        <th data-field="RecordID"
                            class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check">
                            <span style="width: 50px;">
                                #
                            </span>
                        </th>
                        <th data-field="OrderID" class="m-datatable__cell m-datatable__cell--sort">
                            <span style="width: 200px;">Tiêu đề</span>
                        </th>
                        <th data-field="ShipName" class="m-datatable__cell m-datatable__cell--sort">
                            <span style="width: 360px; text-align: center;">Nội dung</span>
                        </th>
                        <th data-field="Currency" class="m-datatable__cell m-datatable__cell--sort">
                            <span style="width: 100px;">Ảnh</span>
                        </th>
                        <th data-field="ShipAddress" class="m-datatable__cell m-datatable__cell--sort">
                            <span style="width: 110px;">Time</span>
                        </th>
                        <th data-field="ShipAddress" class="m-datatable__cell m-datatable__cell--sort">
                            <span style="width: 110px;">Hoạt động</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="m-datatable__body">
                    <?php $i = 1;
                    foreach ($data['post'] as $key => $value) { ?>
                    <tr data-row="0" class="m-datatable__row" style="left: 0px;">
                        <td class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check"
                            data-field="RecordID">
                            <span style="width: 50px;">
                                <?php echo $i; ?>
                            </span>
                        </td>
                        <td data-field="OrderID" class="m-datatable__cell">
                            <span
                                style="width: 200px;height: 100px; overflow-y: visible;"><?php echo $value['tieude']; ?></span>
                        </td>
                        <td data-field="ShipName" class="m-datatable__cell">
                            <span
                                style="width: 360px; height: 100px; overflow-y: visible;"><?php echo $value['noidung']; ?></span>
                        </td>
                        <td data-field="ShipAddress" class="m-datatable__cell">
                            <span style="width: 110px;"><img
                                    src="/testmvc/public/img/tintuc/<?php echo $value['hinhanh']; ?>"
                                    style="width: 100%;"></span>
                        </td>
                        <td data-field="ShipName" class="m-datatable__cell">
                            <span style="width: 110px;"><?php echo $value['time']; ?></span>
                        </td>
                        <td data-field="ShipDate" class="m-datatable__cell">
                            <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand"
                                style="width: 110px;">
                                <label id='checkbox-post'>
                                    <input type="checkbox"
                                        <?php echo $value['hoatdong'] == 1 ? 'checked="checked"' : ''; ?>
                                        name="status-checkbox" value='<?php echo $value['id']; ?>'>
                                    <input type="hidden" name="pageajax" value="activepost">
                                    <span></span>
                                </label>
                            </span>
                        </td>
                    </tr>
                    <?php $i++;
                    }  ?>
                </tbody>
            </table>
        </div>
        <!--end: Datatable -->
    </div>