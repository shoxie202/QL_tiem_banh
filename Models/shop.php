<?php
require_once "model.php";
class Shop extends Model
{
    
    function loaisp($a,$b)
    {
        $query = "SELECT * FROM typeproduct WHERE   CategoryID  = 1 LIMIT $a, $b";

        include "result.php";
        
        return $data;
    }
    function keywork($a)
    {
        $a = "'%".$a."%'";
        $query = "SELECT * FROM product WHERE  productName LIKE $a LIMIT 0,9";

        include "result.php";
        
        return $data;
    }
    function dongia($a,$b)
    {
        if($a ==0 ) {
            $a = "30000";
        }else{
            $a = $a."000000";
        }
        $b = $b."000000";
        $query = "SELECT * FROM product WHERE  productPrice > $a AND productPrice < $b  LIMIT 0, 9";

        include "result.php";
    
        return $data;
    }

    function chitiet_loai($loai,$sp)
    {
        $query = "SELECT * FROM typeproduct WHERE  typeproductName = '$loai' and CategoryID = $sp";

        include "result.php";
        
        return $data;
    }
    function chitiet($id,$sp)
    {
        $query = "SELECT * FROM product WHERE  TypeproductID = '$id' and CategoryID = $sp";

        include "result.php";
        
        return $data;
    }
    function sanpham_noibat()
    {
        $query = "SELECT * FROM product WHERE productId = (SELECT productId sp FROM BillDetail GROUP BY productId ORDER BY COUNT(productId) DESC LIMIT 1)";

        return $this->conn->query($query)->fetch_assoc();
    }
    function count_sp()
    {
        $query = "SELECT COUNT(productId) as tong FROM product";

        return $this->conn->query($query)->fetch_assoc();
    }
    function count_sp_dm($dm)
    {
        $query = "SELECT COUNT(productId) as tong FROM product WHERE CategoryID = $dm";

        return $this->conn->query($query)->fetch_assoc();
    }
    function count_sp_ctdm($dm,$ctdm)
    {
        $query = "SELECT COUNT(productId) as tong FROM product WHERE CategoryID = $dm And TypeproductID = $ctdm";

        return $this->conn->query($query)->fetch_assoc();
    }
}
