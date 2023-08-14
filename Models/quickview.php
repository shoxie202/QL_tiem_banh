<?php
require_once "model.php";
class Quickview extends Model
{
    function detail_sp($id)
    {
        $query =  "SELECT * from product where productId = $id ";
        $result = $this->conn->query($query);
        return $result->fetch_assoc();
    }    
}
