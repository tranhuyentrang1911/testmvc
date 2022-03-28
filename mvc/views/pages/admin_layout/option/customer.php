<div class="m-subheader ">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="m-subheader__title m-subheader__title--separator">
                QL Khách hàng
            </h3>
            <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                <li class="m-nav__item m-nav__item--home">
                    <a href="/testmvc/admin" class="m-nav__link m-nav__link--icon">
                        <i class="m-nav__link-icon la la-home"></i>
                    </a>
                </li>
                <li class="m-nav__separator">
                    -
                </li>
                <li class="m-nav__item">
                    <a href="/testmvc/admin/class" class="m-nav__link">
                        <span class="m-nav__link-text">
                            QL Lớp
                        </span>
                    </a>
                </li>
                <li class="m-nav__separator"> -
                </li>
                <li class="m-nav__item">
                    <a href="/testmvc/admin/teacher" class="m-nav__link">
                        <span class="m-nav__link-text">
                            QL Giáo Viên
                        </span>
                    </a>
                </li>
                <li class="m-nav__separator">
                    -
                </li>
                <li class="m-nav__item">
                    <a href="/testmvc/admin/student" class="m-nav__link">
                        <span class="m-nav__link-text">
                            QL Học Sinh
                        </span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>
<div class="m-content">
    <div class="m-portlet m-portlet--mobile">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Danh Sách Khách Hàng Tiềm Năng
                    </h3>
                </div>
            </div>
        </div>
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
                            <span style="width: 200px;">Tên Khách Hàng</span>
                        </th>
                        <th data-field="ShipName" class="m-datatable__cell m-datatable__cell--sort">
                            <span style="width: 250px; text-align: center;">Email</span>
                        </th>
                        <th data-field="Currency" class="m-datatable__cell m-datatable__cell--sort">
                            <span style="width: 150px;">Số điện thoại</span>
                        </th>
                        <th data-field="ShipAddress" class="m-datatable__cell m-datatable__cell--sort">
                            <span style="width: 110px;">Time</span>
                        </th>
                        <th data-field="ShipAddress" class="m-datatable__cell m-datatable__cell--sort">
                            <span style="width: 110px;">Tác vụ</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="m-datatable__body">
                    <?php $i = 1;
                    foreach ($data['customer'] as $key => $value) { ?>
                    <tr data-row="0" class="m-datatable__row" style="left: 0px;">
                        <td class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check"
                            data-field="RecordID">
                            <span style="width: 50px;">
                                <?php echo $i; ?>
                            </span>
                        </td>
                        <td data-field="OrderID" class="m-datatable__cell">
                            <span
                                style="width: 200px;height: 100px; overflow-y: visible;"><?php echo $value['name']; ?></span>
                        </td>
                        <td data-field="ShipName" class="m-datatable__cell">
                            <span
                                style="width: 250px; height: 100px; overflow-y: visible;"><?php echo $value['email']; ?></span>
                        </td>
                        <td data-field="ShipName" class="m-datatable__cell">
                            <span
                                style="width: 150px; height: 100px; overflow-y: visible;"><?php echo $value['phone']; ?></span>
                        </td>
                        <td data-field="ShipName" class="m-datatable__cell">
                            <span style="width: 110px;"><?php echo $value['time']; ?></span>
                        </td>
                        <td data-field="ShipDate" class="m-datatable__cell">
                            <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand"
                                style="width: 110px;">
                                <label>
                                    <button
                                        class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air deleteCustomer"
                                        value="<?php echo $value['id']; ?>">Xoá</button>
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

    <!--end: Search Form -->
    <!--begin: Datatable -->

</div>