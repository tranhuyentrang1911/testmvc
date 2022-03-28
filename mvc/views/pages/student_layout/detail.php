<div class="main-information">
    <p><?php echo $data['student'][0]['ho'] . ' ' . $data['student'][0]['ten']; ?> | Vai trò: Học
        Viên</p>

</div>
<h4 class="right__heading">
    [Danh sách lớp đang học]
</h4>
<p style="margin:10px 25px;">Thời gian học cụ thể: 6: 00 PM - 8:30 PM</p>
<table width="95%">

    <thead>
        <th>#</th>
        <th>Tên lớp</th>
        <th>Khoá</th>
        <th>Số buổi</th>
        <th>Vắng</th>
        <th>Giáo viên</th>
        <th>Lịch học</th>
        <th>Học phí</th>
        <th>Nợ</th>
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
        <th><?php echo $value['buoinghi'] ?></th>

        <th><?php echo $value['gv']; ?></th>
        <th><?php echo $value['lichhoc'] ?></th>
        <th>
            <p style="padding-left:0">Tổng: <?php echo number_format($value['sotien']) . " VND"; ?></p>

            <p style="padding-left:0">Áp mã còn: <?php echo number_format($value['apdungvoucher']) . " VND"; ?>
            </p>
        </th>
        <th> <?php
                        if ($value['apdungvoucher'] > 0) {
                            $no = $value['apdungvoucher'] - $value['hocphidanop'];
                        } else $no = $value['sotien'] - $value['hocphidanop'];
                        echo number_format($no) . " VND"; ?></th>
        <?php
                $i++;
                echo "</tr>";
            }
        }
        ?>

    </tbody>
</table>