<div class="main-information">
    <p><?php echo $data['teacher'][0]['ho'] . ' ' . $data['teacher'][0]['ten']; ?> | Vai trò: Giáo
        Viên</p>

</div>
<h3 class="right__heading">[Thông tin đáng chú ý]</h3>
<div class="right__content">
    <?php
    foreach ($data['post'] as $value) {
        if ($value['hoatdong'] == 1) {


    ?>
    <p><a href="#">>> <?php echo $value['tieude']; ?></a></p>
    <?php
        }
    }
    ?>
</div>