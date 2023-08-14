<?php if (isset($_COOKIE['msg'])) { ?>
<div class="alert alert-success">
    <strong>Thông báo</strong> <?php echo $_COOKIE['msg'] ?>
</div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <form action="?mod=nguoidung&act=update" method="POST" role="form" enctype="multipart/form-data">
        <input type="hidden" name="MaND" value="<?php echo $data['UserID']?>">
        <div class="form-group">
            <label for="">Họ</label>
            <input type="text" class="form-control" id="" placeholder="" name="Ho"
                value="<?php echo $data['UserLastname']?>">
        </div>
        <div class="form-group">
            <label for="">Tên</label>
            <input type="text" class="form-control" id="" placeholder="" name="Ten"
                value="<?php echo $data['UserFirstname']?>">
        </div>
        <div class="form-group">
            <label for="">Tên Tài Khoản</label>
            <input type="text" class="form-control" id="" placeholder="" name="TaiKhoan"
                value="<?php echo $data['Username']?>">
        </div>
        <div class="form-group">
            <label for="">Giới tính</label>
            <select id="" name="GioiTinh" class="form-control">
                <option <?php echo ($data['UserGender'] == 'Nam')?'selected':''?> value="Nam"> Nam</option>
                <option <?php echo ($data['UserGender'] == 'Nữ')?'selected':''?> value="Nữ"> Nữ</option>
                <option <?php echo ($data['UserGender'] == 'Khác')?'selected':''?> value="Khác"> Khác</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Số Điện Thoại</label>
            <input type="text" class="form-control" id="" placeholder="" name="SDT"
                value="<?php echo $data['UserPhone']?>">
        </div>
        <div class="form-group">
            <label for="">Địa chỉ</label>
            <input type="text" class="form-control" id="" placeholder="" name="DiaChi"
                value="<?php echo $data['UserAddress']?>">
        </div>
        <!-- <div class="form-group">
            <label for="">Mật Khẩu</label>
            <input type="Password" class="form-control" id="" placeholder="" name="MatKhau"
                value="">
        </div> -->
        <div class="form-group">
            <label for="">Trạng Thái</label>
            <input type="text" class="form-control" id="" placeholder="" name="TrangThai"
                value="<?php echo $data['UserStatus']?>">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="Email" class="form-control" id="" placeholder="" name="Email"
                value="<?php echo $data['Email']?>">
        </div>
        <div class="form-group">
            <div class="form-group">
                <label for="">Mã quyền</label>
                <select id="" name="MaQuyen" class="form-control">
                    <option <?php echo ($data['DecentralizationID'] == '1')?'selected':''?> value="1"> Khách hàng
                    </option>
                    <option <?php echo ($data['DecentralizationID'] == '2')?'selected':''?> value="2"> Quản trị viên
                    </option>
                    <option <?php echo ($data['DecentralizationID'] == '3')?'selected':''?> value="3"> Nhân viên
                    </option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
    </tbody>
</table>
