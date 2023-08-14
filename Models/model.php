<?php
require_once "connection.php";
class model
{
    var $conn;
    function __construct()
    {
        $conn_obj = new connection();
        $this->conn = $conn_obj->conn;
    }
    function limit($a, $b)
    {
        $query =  "SELECT * from product WHERE productStatus= 1  ORDER BY time DESC limit $a,$b";

        include "result.php";

        return $data;
    }
    function danhmuc()
    {
        $query =  "SELECT * from category ";

        include "result.php";
        
        return $data;
    }
    function chitietdanhmuc($id)
    {
        
        $query =  "SELECT d.categoryName as Ten, l.* FROM category as d, typeproduct as l WHERE d.categoryId = l.typeproductId and d.categoryId = $id";
        // echo $query;
        include "result.php";
        
        return $data;
    }

    function loaisanpham($id)
    {
        $query =  "SELECT d.categoryName as Ten, l.* FROM category as d, typeproduct as l WHERE d.categoryId = l.typeproductId and d.categoryId = $id";

        include "result.php";
        
        return $data;
    }

    function random($id)
    {
        $query = "SELECT * FROM product WHERE productStatus = 1 ORDER BY RAND () LIMIT $id";
        include "result.php";
        
        return $data;
    }
    function banner($a,$b)
    {
        $query =  "SELECT * from Banner  limit $a,$b";

        include "result.php";
        
        return $data;
    }
    function sanpham_danhmuc($a, $b, $danhmuc)
    {
        $query =   "SELECT * from product WHERE productStatus = 1  and CategoryID = $danhmuc ORDER BY time DESC limit $a,$b";

        include "result.php";
        
        return $data;
    }
}
