<div class="main-information">
    <p><?php echo $data['student'][0]['ho'] . ' ' . $data['student'][0]['ten']; ?> | Vai trò: Học
        Viên</p>

</div>
<h4 class="right__heading">
    [Thông tin hồ sơ]
</h4>
<table id="table">

    <tr>
        <th width="30%">Họ tên</th>
        <th><?php echo $data['student'][0]['ho'] . ' ' . $data['student'][0]['ten']; ?></th>
    </tr>
    <tr>
        <th>Ngày sinh</th>
        <th><?php echo $data['student'][0]['ngaysinh'] ?></th>
    </tr>
    <tr>
        <th>Giới tính</th>
        <th><?php echo $data['student'][0]['gioitinh'] ?></th>
    </tr>
    <tr>
        <th>Số điện thoại</th>
        <th><?php echo $data['student'][0]['sdt'] ?></th>
    </tr>
    <tr>
        <th>Địa chỉ</th>
        <th><?php echo $data['student'][0]['diachi'] ?></th>
    </tr>


</table>