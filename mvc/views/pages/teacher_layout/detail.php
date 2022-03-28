<div class="main-information">
    <p><?php echo $data['teacher'][0]['ho'] . ' ' . $data['teacher'][0]['ten']; ?> | Vai trò: Giáo
        Viên</p>

</div>
<h4 class="right__heading">
    [Danh sách lớp đang dạy]
</h4>
<p style="margin:10px 25px;">Thời gian cụ thể: 6: 00 PM - 8:30 PM</p>
<table width="95%">

    <thead>
        <th>#</th>
        <th>Tên lớp</th>
        <th>Khoá</th>
        <th>Số buổi</th>
        <th>Học phí</th>
        <th>Lịch học</th>

    </thead>
    <tbody>
        <?php
        $i = 1;
        foreach ($data['detail'] as $value) {
            if ($value['hoatdong'] == '1') {
                echo "<tr>";
        ?>
        <th>
            <?php echo $i; ?>
        </th>
        <th><?php echo $value['tenlop']; ?></th>
        <th><?php echo $value['khoa']; ?></th>
        <th><?php echo $value['sobuoi']; ?></th>


        <th><?php echo number_format($value['sotien']) . " VND"; ?></th>
        <th><?php echo $value['lichhoc']; ?></th>
        <?php
                $i++;
                echo "</tr>";
            }
        }
        ?>
    </tbody>
</table>