<?php

class ProductDetail extends Database {
    private $conn;

    public function __construct(){
        $db = Database::getInstance();
        $this->conn = $db->getConnection();
    }

    public function getAll() {
        $result = [];

        $sql = "SELECT sku_id, weight, height, length, width FROM product_details";

        $rs = $this->conn->query($sql);

        if (!$rs) {
            print_r('Failed get all product detail: ' . $this->conn->error . "\n\n");
        }

        if ($rs->num_rows > 0) {
            while($row = $rs->fetch_assoc()) {
                $result[] = $row;
            }
        } 

        return  $result;
    }
}