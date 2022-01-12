<?php

class ProductFacade {
    
    private $repo;

    public function __construct(){

        $this->repo = new ProductRepository();

    }

    public function insert(Product $product) {

        $this->repo->insert($product);

    }


    public function getAll() {

        $productList = $this->repo->getAll();

        return  $productList;
        
    }
}