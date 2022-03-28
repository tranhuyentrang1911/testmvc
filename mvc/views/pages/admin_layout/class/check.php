<div class="m-content">

    <div class="m-portlet m-portlet--mobile">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        <?php echo $data['status']; ?>
                    </h3>
                </div>
            </div>

        </div>
        <!--begin: Datatable -->
        <form class="checkClass">
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
                                <span style="width: 110px;">Vắng</span>
                            </th>
                            <th data-field="Actions" class="m-datatable__cell m-datatable__cell--sort">
                                <span style="width: 110px;">Điểm Danh</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="m-datatable__body" style="">
                        <?php $i = 1;
                        foreach ($data['listSt'] as $key => $value) { ?>
                        <tr data-row="0" class="m-datatable__row" style="left: 0px;">
                            <td class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check"
                                data-field="RecordID">
                                <span style="width: 50px;"><?php echo $i; ?></span>
                            </td>
                            <td data-field="OrderID" class="m-datatable__cell">
                                <span style="width: 110px;"><?php echo $value['ho'] . " " . $value['ten']; ?></span>
                            </td>
                            <td data-field="ShipName" class="m-datatable__cell">
                                <span style="width: 110px;"><?php echo $value['ngaysinh']; ?></span>
                            </td>
                            <td data-field="Status" class="m-datatable__cell">
                                <span style="width: 110px;">
                                    <span
                                        class="m-badge <?php if ($value['gioitinh'] == 'nam') {
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
                                <span style="width: 110px;"><?php echo $value['buoinghi']; ?></span>
                            </td>
                            <td data-field="Actions" class="m-datatable__cell">
                                <span style="overflow: visible; position: relative; width: 110px;">
                                    <div class="m-form__group form-group">
                                        <div class="m-checkbox-list">
                                            <label class="m-checkbox m-checkbox--bold checkSt">
                                                <input type="checkbox" name="<?php echo $value['id'] ?>"> Vắng
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>
                                </span>
                            </td>
                        </tr>
                        <?php $i++;
                        } ?>
                    </tbody>
                </table>
            </div>
            <!--end: Datatable -->
            <div class="m-portlet__footer">
                <input type="hidden" name="idClass" value="<?php echo $data['idClass']; ?>">
                <input type="hidden" name="sobuoidahoc" value="<?php echo $data['detail'][0]['sobuoidahoc']; ?>">
                <input type="hidden" name="sobuoi" value="<?php echo $data['detail'][0]['sobuoi']; ?>">
                <button type="submit" name="diemdanh" style="display:<?php echo $data['display']; ?>;"
                    class="btn btn-primary btn-block">
                    Điểm Danh
                </button>
            </div>
        </form>
    </div>
</div>