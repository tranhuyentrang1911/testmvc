<div class="main-information">
    <p><?php echo $data['teacher'][0]['ho'] . ' ' . $data['teacher'][0]['ten']; ?> | Vai trò: Giáo
        Viên</p>

</div>
<h3 class="right__heading">[Thông tin cá nhân]</h3>
<table class="table">

    <tr>
        <th width="30%">Họ tên</th>
        <th><?php echo $data['teacher'][0]['ho'] . ' ' . $data['teacher'][0]['ten']; ?></th>
    </tr>
    <tr>
        <th>Ngày sinh</th>
        <th><?php echo $data['teacher'][0]['ngaysinh'] ?></th>
    </tr>
    <tr>
        <th>Giới tính</th>
        <th><?php echo $data['teacher'][0]['gioitinh'] ?></th>
    </tr>
    <tr>
        <th>Số điện thoại</th>
        <th><?php echo $data['teacher'][0]['sdt'] ?></th>
    </tr>
    <tr>
        <th>Địa chỉ</th>
        <th><?php echo $data['teacher'][0]['diachi'] ?></th>
    </tr>
    <tr>
        <th>Lương</th>
        <th><?php echo number_format($data['teacher'][0]['luong']) . ".VND"; ?></th>
    </tr>

</table>