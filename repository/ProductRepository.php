<?php

require_once("./Product.php");

class ProductRepository extends Database {
    private $conn;

    public function __construct(){
        $db = Database::getInstance();
        $this->conn = $db->getConnection();
    }

    public function insert(Product $product) {

        $sql = "INSERT INTO products VALUES
        ('{$product->getSkuID()}', {$product->getMerchantID()}, '{$product->getProductName()}', '{$product->getImage()}', {$product->getQuantity()})";

        $rs = $this->conn->query($sql);

        if (!$rs) {
            print_r('Failed insert product: ' . $this->conn->error . "\n\n");
        }

    }

    public function update(Product $product) {

        $sql = "UPDATE products SET sku_id = '{$product->getSkuID()}', merchant_id = {$product->getMerchantID()}, product_name = '{$product->getProductName()}', 
        image = '{$product->getImage()}', quantity = {$product->getQuantity()}) where sku_id = '{$product->getSkuID()}'";

        $rs = $this->conn->query($sql);

        if (!$rs) {
            print_r('Failed update product: ' . $this->conn->error . "\n\n");
        }
    }


    public function get(string $skuID){

    }

    public function delete(string $skuID) {

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