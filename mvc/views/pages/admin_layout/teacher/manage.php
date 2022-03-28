<div class="m-subheader ">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="m-subheader__title m-subheader__title--separator">
                QL Giáo Viên
            </h3>
            <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                <li class="m-nav__item m-nav__item--home">
                    <a href="/testmvc/admin" class="m-nav__link m-nav__link--icon">
                        <i class="m-nav__link-icon la la-home"></i>
                    </a>
                </li>
                <li class="m-nav__separator"> -
                </li>
                <li class="m-nav__item">
                    <a href="/testmvc/admin/student" class="m-nav__link">
                        <span class="m-nav__link-text">
                            QL Học Sinh
                        </span>
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
                <li class="m-nav__separator">
                    -
                </li>
                <li class="m-nav__item">
                    <a href="/testmvc/admin/customer" class="m-nav__link">
                        <span class="m-nav__link-text">
                            QL Khách Hàng
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
                        Danh Sách Giáo Viên
                    </h3>
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
                            <span style="width: 110px;">Họ Tên</span>
                        </th>
                        <th data-field="ShipName" class="m-datatable__cell m-datatable__cell--sort">
                            <span style="width: 110px;">Ngày Sinh</span>
                        </th>
                        <th data-field="Currency" class="m-datatable__cell m-datatable__cell--sort">
                            <span style="width: 100px;">Giới Tính</span>
                        </th>
                        <th data-field="ShipAddress" class="m-datatable__cell m-datatable__cell--sort">
                            <span style="width: 110px;">Sđt</span>
                        </th>
                        <th data-field="ShipDate" class="m-datatable__cell m-datatable__cell--sort">
                            <span style="width: 110px;">Địa Chỉ</span>
                        </th>
                        <th data-field="Latitude" class="m-datatable__cell m-datatable__cell--sort">
                            <span style="width: 110px;">Lương</span>
                        </th>
                        <th data-field="Actions" class="m-datatable__cell m-datatable__cell--sort">
                            <span style="width: 110px;">Tác Vụ</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="m-datatable__body" style="">
                    <?php $i = 1;
					foreach ($data['teacher'] as $key => $value) { ?>
                    <tr data-row="0" class="m-datatable__row" style="left: 0px;">
                        <td class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check"
                            data-field="RecordID">
                            <span style="width: 50px;">
                                <?php echo $i; ?>
                            </span>
                        </td>
                        <td data-field="OrderID" class="m-datatable__cell">
                            <span style="width: 110px;"><?php echo $value['ho'] . ' ' . $value['ten']; ?></span>
                        </td>
                        <td data-field="ShipName" class="m-datatable__cell">
                            <span style="width: 110px;"><?php echo $value['ngaysinh']; ?></span>
                        </td>
                        <td data-field="Status" class="m-datatable__cell">
                            <span style="width: 110px;">
                                <span class="m-badge <?php if ($value['gioitinh'] == 'nam') {
																echo "m-badge--brand";
															} else echo "m-badge--success" ?> m-badge--wide"><?php echo $value['gioitinh']; ?></span>
                            </span>
                        </td>
                        <td data-field="ShipAddress" class="m-datatable__cell">
                            <span style="width: 110px;"><?php echo $value['sdt']; ?></span>
                        </td>
                        <td data-field="ShipDate" class="m-datatable__cell">
                            <span style="width: 110px;"><?php echo $value['diachi']; ?></span>
                        </td>
                        <td data-field="Latitude" class="m-datatable__cell">
                            <span style="width: 110px;"><?php if (empty($value['luong'])) {
																echo "---";
															} else echo number_format($value['luong']) . " VND"; ?></span>
                        </td>
                        <td data-field="Actions" class="m-datatable__cell">
                            <span style="overflow: visible; position: relative; width: 110px;">
                                <div class="dropdown">
                                    <a href="#"
                                        class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill"
                                        data-toggle="dropdown" ded="false">
                                        <i class="la la-ellipsis-h"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" x-placement="top-end"
                                        style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(33px, -6px, 0px);">
                                        <a class="dropdown-item"
                                            href="/testmvc/admin/teacherEdit/<?php echo $value['id']; ?>"><i
                                                class="la la-refresh"></i> Sửa</a>
                                        <a class="dropdown-item"
                                            href="/testmvc/admin/teacherMission/<?php echo $value['id']; ?>"><i
                                                class="la la-list"></i> Danh sách lớp</a>

                                    </div>

                                </div>
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