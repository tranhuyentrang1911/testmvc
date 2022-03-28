<div class="main-information">
    <p><?php echo $data['student'][0]['ho'] . ' ' . $data['student'][0]['ten']; ?> | Vai trò: Học
        Viên</p>

</div>
<h3 class="right__heading">[Đổi mật khẩu]</h3>
<table id="table-pass" width="50%">

    <form id="changepassw" method="post">
        <tr>
            <th class="th-pass" width="30%">Mật khẩu cũ</th>
            <th class="th-pass">
                <input type="password" id="pass" class="input">
            </th>
        </tr>
        <tr>
            <th class="th-pass">Mật khẩu mới</th>
            <th class="th-pass"> <input type="password" id="newpass" class="input"></th>
        </tr>
        <tr>
            <th class="th-pass">Xác nhận mật khẩu mới</th>
            <th class="th-pass"> <input type="password" id="renewpass" class="input"></th>
        </tr>
        <tr class="text-center">
            <th class="th-pass" colspan="2"><button class="button" type="submit" name="submit">OK</button>
                <button class="button" type="reset">Huỷ</button>
            </th>

        </tr>
    </form>


</table>