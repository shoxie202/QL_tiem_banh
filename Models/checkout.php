<?php
require_once "model.php";
class Checkout extends Model
{
    function save($data)
    {
        $f = "";
        $v = "";
        foreach ($data as $key => $value) {
            $f .= $key . ",";
            $v .= "'" . $value . "',";
        }
        $f = trim($f, ",");
        $v = trim($v, ",");
        $query = "INSERT INTO Bill($f) VALUES ($v);";
    
        $status = $this->conn->query($query);

        $query_mahd = "select BillID from Bill ORDER BY Billdate DESC LIMIT 1";
        $data_mahd = $this->conn->query($query_mahd)->fetch_assoc();
        echo "<pre>";
        print_r($data_mahd);
        echo "</pre>";
        foreach ($_SESSION['sanpham'] as $value) {
            
            $MaSP =$value['MaSP'];
            $SoLuong = $value['SoLuong'];
            $DonGia = $value['DonGia'];
            $MaHD = $data_mahd['BillID'];
            $query_ct = "INSERT INTO BillDetail(BilldetailID,ProductId,amount,price) VALUES ($MaHD,$MaSP,$SoLuong,$DonGia)";

            $status_ct = $this->conn->query($query_ct);
        }
    
        if ($status == true and $status_ct = true) {
            setcookie('msg', 'Đăng ký thành công', time() + 2);
            header('location: ?act=checkout&xuli=order_complete');
        } else {
            setcookie('msg', 'Đăng ký không thành công', time() + 2);
            header('location: ?act=checkout');
        }
    }
}
