toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": false,
    "progressBar": false,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
};

function numberFormat(num) {
    var str = num.toString();
    var x = str.length % 3;
    var y = str.substr(0, x);
    var z = str.substr(x, str.length);
    var a = "";
    for (i = 0; i < z.length; i + 3) {
        a += "," + z.substr(i, i + 3);
        z = z.substr(i + 3, z.length);
    }
    return b = y + a;
}
$(document).ready(function() {
    $('#changepassw').on('submit', function(e) {
        e.preventDefault();
        var a = $("#pass").val();
        var b = $("#newpass").val();
        var c = $("#renewpass").val();
        $.post('/testmvc/ajax/changePass', { pass: a, newpass: b, renewpass: c }, function(result) {
            switch (result) {
                case '0':
                    toastr.error("Mật khẩu không đúng!");
                    break;
                case '1':
                    toastr.success("Đổi mật khẩu thành công!");
                    break;
                case '2':
                    toastr.error("Đã có lỗi!");
                    break;
                case '3':
                    toastr.error("Xác nhận mật khẩu mới không khớp!");
                    break;
                case '4':
                    toastr.error("Mật khẩu mới phải khác mật khẩu cũ!");
                    break;
                default:
                    toastr.error("Đã có lỗi!");
                    break;
            }
            toastr.result;
        })
    })
    $('input[name="status-checkbox"]').on('click', function() {

        var status = this.checked ? 1 : 0;
        var id = $(this).val();
        var page = $('input[name="pageajax"]').val();
        if (confirm('Xác nhận thay đổi trạng thái?')) {
            $.post('/testmvc/ajax/' + page, { active: status, id: id }, function(data) {
                if ((status == 1) && (data == 1)) {
                    $(this).prop('checked', true);
                } else if ((status == 0) && (data == 1)) {
                    $(this).prop('checked', false);

                } else if ((status == 0) && (data == 0)) {
                    $(this).prop('checked', true);
                    toastr.error("Đã có lỗi!");
                } else {
                    $(this).prop('checked', false);

                    toastr.error("Đã có lỗi!");
                }
            })
        } else {
            if (status == 1) {
                $(this).prop('checked', false);
            } else {
                $(this).prop('checked', true);
            }
        }

    })

    $('input[name="fileToUpload"]').on('change', function() {
        formdata = new FormData();
        if ($(this).prop('files').length > 0) {
            file = $(this).prop('files')[0];
            formdata.append("fileToUpload", file);

        }

        jQuery.ajax({
            url: "/testmvc/ajax/checkFileUpload",
            type: "POST",
            data: formdata,

            processData: false,
            contentType: false,
            success: function(result) {
                if (result == 1) {
                    $('#checkFile').css("color", "green");
                    $('#checkFile').html('File valid');
                    $('.addpost').css('display', 'block');
                    $('.addcourse').css('display', 'block');
                } else {
                    $('#checkFile').css("color", "red");
                    $('#checkFile').html(result);
                    $('.addpost').css('display', 'none');
                    $('.addcourse').css('display', 'none');
                }
            }
        })


    })
    $('.add-post').on('submit', function(e) {
        e.preventDefault();
        var tieude = $('input[name="tieude"]').val();
        var noidung = $('textarea[name="noidung"]').val();
        var anh = $('input[type=file]')[0].files[0].name;

        $.post('/testmvc/ajax/addPost', { tieude: tieude, noidung: noidung, anh: anh }, function(data) {
            if (data == 1) {
                toastr.success("Thêm thành công!");
            } else toastr.error("Thêm thất bại!");
        })


    })

    $('.add-notify').on('submit', function(e) {
        e.preventDefault();
        var tieude = $('input[name="tieude"]').val();
        var noidung = $('input[name="noidung"]').val();
        var img = $('input[type=file]')[0].files[0].name;
        $.post('/testmvc/ajax/addNotify', { tieude: tieude, noidung: noidung, img: img }, function(data) {
            if (data == 1) {
                toastr.success("Thêm thành công!");
            } else toastr.error("Thêm thất bại!");
        })
    })
    $('.deleteFee').on('click', function() {
        var id = $(this).val();
        $.post('/testmvc/ajax/deleteFee', { id: id }, function(data) {
            window.location.replace("/testmvc/admin/listFee");
        })
    })

    $('.deleteCustomer').on('click', function() {
        var id = $(this).val();

        $.post('/testmvc/ajax/deleteCustomer', { id: id }, function(data) {
            window.location.replace("/testmvc/admin/customer");
        })
    })
    $('.addFee').on('submit', function(e) {
        e.preventDefault();
        var fee = $('input[name="hocphi"]').val();
        $.post('/testmvc/ajax/addFee', { fee: fee }, function(data) {
            if (data == 1) {
                window.location.replace("/testmvc/admin/listFee");
            } else toastr.error("Thêm thất bại!");
        })
    })
    $('.addSalary').on('submit', function(e) {
        e.preventDefault();
        var luongcb = $('input[name="luongcb"]').val();
        var hsl = $('input[name="hsl"]').val();
        $.post('/testmvc/ajax/addSalary', { luongcb: luongcb, hsl: hsl }, function(data) {
            if (data == 1) {
                window.location.replace("/testmvc/admin/salary");
            } else toastr.error("Thêm thất bại!");
        })
    })
    $('.delSalary').on('click', function() {

        var id = $(this).val();
        $.post('/testmvc/ajax/deleteSalary', { id: id }, function(data) {
            window.location.replace("/testmvc/admin/salary");
        })
    })
    $('.addSale').on('submit', function(e) {
        e.preventDefault();
        var mgg = $('input[name="mgg"]').val();
        var st = $('input[name="sotien"]').val();
        var spt = $('input[name="sopt"]').val();
        var sl = $('input[name="solan"]').val();
        $.post('/testmvc/ajax/addSale', { mgg: mgg, st: st, spt: spt, sl: sl }, function(data) {
            if (data == 1) {
                window.location.replace("/testmvc/admin/sale");
            } else toastr.error("Thêm thất bại!");
        })
    })
    $('.delSale').on('click', function() {
        var id = $(this).val();
        $.post('/testmvc/ajax/delSale', { id: id }, function(data) {
            window.location.replace("/testmvc/admin/sale");
        })
    })
    $('.addAcc').on('submit', function(e) {

        e.preventDefault();
        var id = $('input[name="id"]').val();
        var pass = $('input[name="pass"]').val();
        var repass = $('input[name="repass"]').val();
        var rank = $('select[name="rank"]').val();
        var ho = $('input[name="ho"]').val();
        var ten = $('input[name="ten"]').val();
        var ngaysinh = $('input[name="ngaysinh"]').val();
        var sdt = $('input[name="sdt"]').val();
        var diachi = $('input[name="diachi"]').val();
        var gioitinh = $('input[name="gioitinh"]').val();

        if (pass != repass) {
            toastr.error("Xác nhận mật khẩu không đúng!");
        } else {

            $.post('/testmvc/ajax/addAcc', { id: id, pass: pass, repass: repass, rank: rank, ho: ho, ten: ten, ngaysinh: ngaysinh, diachi: diachi, gioitinh: gioitinh, sdt: sdt }, function(data) {
                if (data == 1) {
                    toastr.success("Thêm thành công!");
                } else if (data == 2) {
                    toastr.warning("Thông tin cá nhân đã xảy ra lỗi, hãy cập nhật lại sau khi đăng nhập!");
                } else toastr.error("Thêm thất bại!");
            })
        }
    })
    $('.addClass').on('submit', function(e) {
        e.preventDefault();
        var name = $('input[name="tenlop"]').val();
        var course = $('input[name="khoa"]').val();
        var time = $('input[name="sobuoi"]').val();
        var teacher = $('select[name="giaovien"]').val();
        var fee = $('select[name="hocphi"]').val();
        var calendar = $('select[name="lichhoc"]').val();
        var active = $('input[name=hoatdong]:checked').val()

        $.post('/testmvc/ajax/addClass', { name: name, course: course, time: time, teacher: teacher, fee: fee, calendar: calendar, active: active }, function(data) {
            if (data == 1) {
                toastr.success("Thêm thành công!");
            } else toastr.error("Thêm thất bại!");
        })
    })
    $('.editClass').on('submit', function(e) {
        e.preventDefault();
        var id = $('input[name="classId"]').val();
        var name = $('input[name="tenlop"]').val();
        var course = $('input[name="khoa"]').val();
        var time = $('input[name="sobuoi"]').val();
        var teacher = $('select[name="giaovien"]').val();
        var fee = $('select[name="hocphi"]').val();
        var calendar = $('select[name="lichhoc"]').val();
        var active = $('input[name=hoatdong]:checked').val()
        $.post(
            '/testmvc/ajax/editClass', {
                id: id,
                name: name,
                course: course,
                time: time,
                teacher: teacher,
                fee: fee,
                calendar: calendar,
                active: active
            },
            function(data) {
                var obj = JSON.parse(data);
                if (obj.status == "success") {
                    toastr.success(obj.mess);
                } else toastr.error(obj.mess);
            })
    })
    $('.checkClass').on('submit', function(e) {
        e.preventDefault();
        var a = $('input[name="sobuoidahoc"]').val();
        var b = $('input[name="sobuoi"]').val();
        var names = [];
        var idClass = $('input[name="idClass"]').val();
        $('.checkSt input:checked').each(function() {
            names.push(this.name);
        });
        $.post('/testmvc/ajax/checkClass', { names: names, idClass: idClass, a: a, b: b }, function(data) {
            window.location.replace("/testmvc/admin/class");
        })
    })
    $('.teacherEdit').on('submit', function(e) {
        e.preventDefault();
        var firstname = $('input[name="ho"]').val();
        var name = $('input[name="ten"]').val();
        var birthday = $('input[name="ngaysinh"]').val();
        var phone = $('input[name="sdt"]').val();
        var address = $('input[name="diachi"]').val();
        var salary = $('select[name="luong"]').val();
        var sex = $('input[name=gioitinh]:checked').val();
        var id = $('input[name="id"]').val();
        $.post('/testmvc/ajax/teacherEdit', { id: id, firstname: firstname, name: name, birthday: birthday, phone: phone, address: address, salary: salary, sex: sex }, function(data) {
            if (data == 1) {
                toastr.success("Cập nhật thành công!");


            } else toastr.error("Cập nhật thất bại!");

        })
    })
    $('.studentEdit').on('submit', function(e) {
        e.preventDefault();
        var firstname = $('input[name="ho"]').val();
        var name = $('input[name="ten"]').val();
        var birthday = $('input[name="ngaysinh"]').val();
        var phone = $('input[name="sdt"]').val();
        var address = $('input[name="diachi"]').val();

        var sex = $('input[name=gioitinh]:checked').val();
        var id = $('input[name="studentId"]').val();
        $.post('/testmvc/ajax/studentEdit', { id: id, firstname: firstname, name: name, birthday: birthday, phone: phone, address: address, sex: sex }, function(data) {
            if (data == 1) {
                toastr.success("Cập nhật thành công!");
            } else toastr.error("Cập nhật thất bại!");
        })
    })
    $('.deleteReg').on('click', function(e) {
        e.preventDefault();
        var s = $(this).val().split(',');
        var idclass = s[0];
        var idSt = s[1];
        $.post('/testmvc/ajax/deteteReg', { idclass: idclass, idSt: idSt }, function(data) {
            if (data) {
                window.location.replace("/testmvc/admin/studentCourse/" + idSt);
            } else toastr.error("Hủy bỏ thất bại!");
        })
    })
    $('.regClass').on('click', function(e) {
        e.preventDefault();
        var s = $(this).val().split(',');
        var idclass = s[0];
        var idSt = s[1];
        var hd = s[2];
        if (hd == 0) {
            toastr.error("Lớp đã kết thúc!");
        } else {
            $.post('/testmvc/ajax/regClass', { idclass: idclass, idSt: idSt }, function(data) {
                if (data) {
                    window.location.replace("/testmvc/admin/studentRegCourse/" + idSt);
                } else toastr.error("Đăng ký thất bại!");
            })
        }

    })
    $('.checkVoucher').on('click', function() {
        var mgg = $('input[name="magiamgia"]').val();
        var idclass = $('input[name="idClass"]').val();
        var idSt = $('input[name="idSt"]').val();
        $.post('/testmvc/ajax/checkVoucher', { mgg: mgg, idclass: idclass, idSt: idSt }, function(data) {
            if (data == 0) {
                toastr.error("Mã giảm giá đã hết hạn hoặc không tồn tại!");
            } else if (data == 1) {
                toastr.error("Không dùng nhiều mã ưu đãi trên 1 lớp!");
            } else {
                $('#voucher').html(numberFormat(data) + " VNĐ");
                $('#voucher').css("display", "block");
                $('#fee').css("text-decoration", "line-through");
                toastr.success("Cập nhật ưu đãi thành công!");
            }
        })
    })
    $('.payFee').on('submit', function(e) {
        e.preventDefault();
        var idclass = $('input[name="idClass"]').val();
        var idSt = $('input[name="idSt"]').val();
        var payFee = $('input[name="noptien"]').val();
        $.post('/testmvc/ajax/payFee', { idclass: idclass, idSt: idSt, payFee: payFee }, function(data) {
            if (data == 1) {

                window.location.replace("/testmvc/admin/studentPay/" + idSt + "/" + idclass);
            } else toastr.error("Nộp học phí thất bại!");
        })
    })


})