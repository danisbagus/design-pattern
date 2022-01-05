<?php

class Product extends Database {
    private $conn;

    public function __construct(){
        $db = Database::getInstance();
        $this->conn = $db->getConnection();
    }

    public function save($skuID, $merchantID, $productName, $image, $quantity) {
        $sql = "INSERT INTO products VALUES
                ('{$skuID}', {$merchantID}, '{$productName}', '{$image}', {$quantity});";

        $rs = $this->conn->query($sql);

        if (!$rs) {
            print_r('Failed save product: ' . $this->conn->error . "\n\n");
        }
    }

    public function getAll() {
        $result = [];

        $sql = "SELECT sku_id, merchant_id, product_name FROM products";

        $rs = $this->conn->query($sql);

        if (!$rs) {
            print_r('Failed get all product: ' . $this->conn->error . "\n\n");
        }

        if ($rs->num_rows > 0) {
            while($row = $rs->fetch_assoc()) {
                $result[] = $row;
            }
        } 

        return  $result;
    }
}