<?php if (isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) { ?>
<a href="?mod=nguoidung&act=add" type="button" class="btn btn-primary">Thêm mới</a>
<?php } ?>
<?php if (isset($_COOKIE['msg'])) { ?>
<div class="alert alert-success">
    <strong>Thông báo</strong> <?php echo $_COOKIE['msg'] ?>
</div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th scope="col">MaAD</th>
            <th scope="col">Tài khoản</th>
            <th scope="col">SDT</th>
            <th scope="col">Email</th>
            <th scope="col">Giới tính</th>
            <th scope="col">Quyền hạn</th>
            <th>#</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $row) { ?>
        <tr>
            <th scope="row"><?php echo $row['UserID'] ?></th>
            <td><?php echo $row['Username'] ?></td>
            <td><?php echo $row['UserPhone'] ?></td>
            <td><?php echo $row['Email'] ?></td>
            <td><?php echo $row['UserGender'] ?></td>
            <td>
                <?php
                if ($row['DecentralizationID'] == 2) {
                    echo 'Quản trị viên';
                } else {
                    if ($row['DecentralizationID'] == 1) {
                        echo 'Khách hàng';
                    } else {
                        echo 'Nhân viên';
                    }
                }
                ?>
            </td>
            <td>
                <a href="?mod=nguoidung&act=detail&id=<?php echo $row['UserID'] ?>" type="button"
                    class="btn btn-success">Xem</a>
                <?php if (isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) { ?>
                <a href="?mod=nguoidung&act=edit&id=<?php echo $row['UserID'] ?>" type="button"
                    class="btn btn-warning">Sửa</a>
                <a href="?mod=nguoidung&act=delete&id=<?php echo $row['UserID'] ?>"
                    onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>
                <?php }?>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
<script>
$(document).ready(function() {
    $('#dataTable').DataTable();
});
</script>
