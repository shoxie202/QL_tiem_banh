<?php
require_once "connection.php";
class login
{
    var $conn;
    function __construct()
    {
        $conn_obj = new Connection();
        $this->conn = $conn_obj->conn;
    }
    function tk_sanpham($id)
    {
        $query = "SELECT count(ProductID) as Count FROM product WHERE categoryId = $id";

        return $this->conn->query($query)->fetch_assoc();
    }
    function tk_thongbao()
    {
        $query = "SELECT count(billId) as Count FROM bill WHERE Status = 0";

        return $this->conn->query($query)->fetch_assoc();
    }
    function tk_dtthang($m)
    {
        $query = "SELECT SUM(total) as Count FROM bill WHERE MONTH(billdate) = $m And status = 1";

        return $this->conn->query($query)->fetch_assoc();
    }
    function tk_dtnam($y)
    {
        $query = "SELECT SUM(total) as Count FROM bill WHERE YEAR(billdate) = $y And status = 1";

        return $this->conn->query($query)->fetch_assoc();
    }
    function tk_nguoidung($id)
    {
        $query = "SELECT count(userId) as Count FROM user WHERE DecentralizationID  = $id";
        
        return $this->conn->query($query)->fetch_assoc();
    }
}