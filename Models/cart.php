<?php
require_once "model.php";
class Cart extends Model
{
    function detail_sp($id)
    {
        $query =  "SELECT * from Product where ProductId = $id ";
        $result = $this->conn->query($query);
        return $result->fetch_assoc();
    }
}
