<div class="m-content">
    <div class="m-portlet m-portlet--mobile">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <h3 class="m-portlet__head-title" style="border-right: 1px solid #e2e5ec;
				    padding: 7px 25px 7px 0; margin: 0 15px 0 0;">
                    Đăng Ký Lớp
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
                        <a href="/testmvc/admin/studentEdit/<?php echo $data['studentId'] ?>" class="m-nav__link">
                            <span class="m-nav__link-text">
                                Cập nhật thông tin
                            </span>
                        </a>
                    </li>
                    <li class="m-nav__separator">
                        -
                    </li>
                    <li class="m-nav__item">
                        <a href="/testmvc/admin/studentDetail/<?php echo $data['studentId'] ?>" class="m-nav__link">
                            <span class="m-nav__link-text">
                                Chi Tiết Học Sinh
                            </span>
                        </a>
                    </li>
                    <li class="m-nav__separator">
                        -
                    </li>
                    <li class="m-nav__item">
                        <a href="/testmvc/admin/studentCourse/<?php echo $data['studentId'] ?>" class="m-nav__link">
                            <span class="m-nav__link-text">
                                DS lớp đang học
                            </span>
                        </a>
                    </li>
                </ul>

            </div>
        </div>

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
                            <span style="width: 110px;">Tên Lớp</span>
                        </th>
                        <th data-field="ShipName" class="m-datatable__cell m-datatable__cell--sort">
                            <span style="width: 70px;">Khóa</span>
                        </th>
                        <th data-field="Currency" class="m-datatable__cell m-datatable__cell--sort">
                            <span style="width: 50px;">Số Buổi</span>
                        </th>
                        <th data-field="ShipAddress" class="m-datatable__cell m-datatable__cell--sort">
                            <span style="width: 110px;">Giáo Viên</span>
                        </th>
                        <th data-field="ShipDate" class="m-datatable__cell m-datatable__cell--sort">
                            <span style="width: 110px;">Học Phí</span>
                        </th>
                        <th data-field="ShipDate" class="m-datatable__cell m-datatable__cell--sort">
                            <span style="width: 100px;">Lịch học</span>
                        </th>
                        <th data-field="Latitude" class="m-datatable__cell m-datatable__cell--sort">
                            <span style="width: 70px;">Hoạt Động</span>
                        </th>
                        <th data-field="Actions" class="m-datatable__cell m-datatable__cell--sort">
                            <span style="width: 110px;">Tác Vụ</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="m-datatable__body">
                    <?php $i = 1;
                    foreach ($data['reg'] as $key => $value) { ?>
                    <tr data-row="0" class="m-datatable__row" style="left: 0px;">
                        <td class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check"
                            data-field="RecordID">
                            <span style="width: 50px;">
                                <?php echo $i; ?>
                            </span>
                        </td>
                        <td data-field="OrderID" class="m-datatable__cell">
                            <span style="width: 110px;"><?php echo $value['tenlop']; ?></span>
                        </td>
                        <td data-field="ShipName" class="m-datatable__cell">
                            <span style="width: 70px;"><?php echo $value['khoa']; ?></span>
                        </td>
                        <td data-field="ShipAddress" class="m-datatable__cell">
                            <span style="width: 50px;"><?php echo $value['sobuoi']; ?></span>
                        </td>
                        <td data-field="ShipDate" class="m-datatable__cell">
                            <span style="width: 110px;"><?php echo $value['gv']; ?></span>
                        </td>
                        <td data-field="ShipDate" class="m-datatable__cell">
                            <span style="width: 110px;"><?php echo number_format($value['sotien']) . " VND"; ?></span>
                        </td>
                        <td data-field="ShipDate" class="m-datatable__cell">
                            <span style="width: 100px;"><?php echo $value['lichhoc']; ?></span>
                        </td>
                        <td data-field="Status" class="m-datatable__cell">
                            <span style="width: 70px;">
                                <span class="m-badge <?php if ($value['hoatdong'] == '1') {
                                                                echo "m-badge--success";
                                                            } else echo "m-badge--danger" ?> m-badge--wide">
                                    <?php ($value['hoatdong'] == '1') ? $hd = 'Có' : $hd = 'Không';
                                        echo $hd; ?></span>
                            </span>
                        </td>


                        <td data-field="Actions" class="m-datatable__cell">
                            <span style="overflow: visible; position: relative; width: 110px;">
                                <button type="submit" name="dangky" class="btn btn-primary m-btn m-btn--custom regClass"
                                    value="<?php echo $value['id'] . "," . $data['studentId'] . "," . $value['hoatdong']; ?>">
                                    Đăng Ký
                                </button>
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
</div>