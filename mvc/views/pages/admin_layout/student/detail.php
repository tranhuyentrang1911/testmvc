<div class="m-content">
    <div class="m-portlet m-portlet--mobile">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <h3 class="m-portlet__head-title" style="border-right: 1px solid #e2e5ec;
					    padding: 7px 25px 7px 0; margin: 0 15px 0 0;">
                    Chi Tiết Học Sinh
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
                        <a href="/testmvc/admin/studentCourse/<?php echo $data['studentId'] ?>" class="m-nav__link">
                            <span class="m-nav__link-text">
                                Danh Sách Lớp
                            </span>
                        </a>
                    </li>
                    <li class="m-nav__separator">
                        -
                    </li>
                    <li class="m-nav__item">
                        <a href="/testmvc/admin/studentRegCourse/<?php echo $data['studentId'] ?>" class="m-nav__link">
                            <span class="m-nav__link-text">
                                Đăng Ký Lớp
                            </span>
                        </a>
                    </li>
                </ul>

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
                            <span style="width: 110px;">Tên Lớp</span>
                        </th>
                        <th data-field="ShipName" class="m-datatable__cell m-datatable__cell--sort">
                            <span style="width: 110px;">Khóa</span>
                        </th>
                        <th data-field="Currency" class="m-datatable__cell m-datatable__cell--sort">
                            <span style="width: 100px;">Số Buổi</span>
                        </th>
                        <th data-field="Latitude" class="m-datatable__cell m-datatable__cell--sort">
                            <span style="width: 110px;">Hoạt Động</span>
                        </th>
                        <th data-field="Latitude" class="m-datatable__cell m-datatable__cell--sort">
                            <span style="width: 110px;">Học Sinh</span>
                        </th>
                        <th data-field="Latitude" class="m-datatable__cell m-datatable__cell--sort">
                            <span style="width: 110px;">Ngày Sinh</span>
                        </th>
                        <th data-field="ShipAddress" class="m-datatable__cell m-datatable__cell--sort">
                            <span style="width: 110px;">Trạng Thái</span>
                        </th>
                        <th data-field="ShipDate" class="m-datatable__cell m-datatable__cell--sort">
                            <span style="width: 110px;">Vắng</span>
                        </th>
                        <th data-field="Latitude" class="m-datatable__cell m-datatable__cell--sort">
                            <span style="width: 110px;">Học Phí</span>
                        </th>
                        <th data-field="Latitude" class="m-datatable__cell m-datatable__cell--sort">
                            <span style="width: 110px;">Nợ</span>
                        </th>
                        <th data-field="Actions" class="m-datatable__cell m-datatable__cell--sort">
                            <span style="width: 110px;">Tác Vụ</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="m-datatable__body">
                    <?php $i = 1;
					$tongno = 0;
					foreach ($data['detail'] as $key => $value) { ?>
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
                            <span style="width: 110px;"><?php echo $value['khoa']; ?></span>
                        </td>
                        <td data-field="ShipAddress" class="m-datatable__cell">
                            <span style="width: 110px;"><?php echo $value['sobuoi']; ?></span>
                        </td>
                        <td data-field="Status" class="m-datatable__cell">
                            <span style="width: 110px;">
                                <span class="m-badge <?php if ($value['hoatdong'] == '1') {
																echo "m-badge--success";
															} else echo "m-badge--danger" ?> m-badge--wide">
                                    <?php ($value['hoatdong'] == '1') ? $hd = 'Có' : $hd = 'Không';
										echo $hd; ?></span>
                            </span>
                        </td>
                        <td data-field="ShipDate" class="m-datatable__cell">
                            <span style="width: 110px;"><?php echo $value['hs']; ?></span>
                        </td>
                        <td data-field="ShipDate" class="m-datatable__cell">
                            <span style="width: 110px;"><?php echo $value['ngaysinh']; ?></span>
                        </td>
                        <td data-field="ShipDate" class="m-datatable__cell">
                            <span style="width: 110px;">
                                <div><?php $td = round($value['sobuoidahoc'] * 100 / $value['sobuoi'], 1);
											echo "Tiến độ: " . $value['sobuoidahoc'] . " / " . $value['sobuoi']; ?></div>

                            </span>
                        </td>
                        <td data-field="ShipDate" class="m-datatable__cell">
                            <span style="width: 110px;">
                                <div><?php $vang = round($value['buoinghi'] * 100 / $value['sobuoi'], 1);
											echo "Vắng: " . $value['buoinghi'] . " / " . $value['sobuoi']; ?></div>

                            </span>
                        </td>
                        <td data-field="ShipDate" class="m-datatable__cell">
                            <span style="width: 110px;">
                                <?php
									if ($value['apdungvoucher'] > 0) {
										$hp = round($value['hocphidanop'] * 100 / $value['apdungvoucher'], 1); ?>
                                <div>
                                    <span>
                                        Tổng: <span
                                            style="text-decoration: line-through;"><?php echo number_format($value['sotien']) . " VND"; ?></span>
                                    </span>
                                </div>
                                <div>
                                    <span>
                                        Còn: <span><?php echo number_format($value['apdungvoucher']) . " VND"; ?></span>
                                    </span>

                                </div>
                                <?php	} else {
										$hp = round($value['hocphidanop'] * 100 / $value['sotien'], 1); ?>
                                <div>
                                    <span>
                                        Tổng: <span><?php echo number_format($value['sotien']) . " VND"; ?></span>
                                    </span>
                                </div>
                                <?php } ?>


                            </span>
                        </td>
                        <td data-field="ShipDate" class="m-datatable__cell">
                            <span style="width: 110px;">
                                <?php
									if ($value['apdungvoucher'] > 0) {
										$no = $value['apdungvoucher'] - $value['hocphidanop'];
									} else $no = $value['sotien'] - $value['hocphidanop'];
									echo number_format($no) . " VND";
									$tongno += $no; ?></span>
                        </td>
                        <td data-field="Actions" class="m-datatable__cell">
                            <span style="overflow: visible; position: relative; width: 110px;">
                                <a
                                    href="/testmvc/admin/studentPay/<?php echo $data['studentId'] . "/" . $value['idclass']; ?>">
                                    <button class="btn btn-primary m-btn m-btn--custom">
                                        Nộp HP
                                    </button>
                                </a>
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
    <div
        style="float: right;margin-right: 50px;font-size: large;text-transform: capitalize;font-weight: 600; padding: 0px 0px 40px;">
        <span>Tổng nợ: <?php echo number_format($tongno) . " VND"; ?></span>
    </div>