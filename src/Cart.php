<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cart
 *
 * @author Administrateur
 */
class Cart {
    //put your code here

    protected $id, $date;
    protected  $products = array();
    private static $_instance = null;
    
    public function getInstance() {
        if(is_null(self::$_instance)) {
        self::$_instance = new Cart();  
     }
 
     return self::$_instance;
   }

    public function getId() {
        return $this->id;
    }

    public function getDate() {
        return $this->date;
    }

    public function getProducts() {
        return $this->products;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function addProduct(Product $product) {
        $this->products[] = $product;
    }
    
    public function clearCart() {
        unset($this->products);
    }
    
    public function getOneProduct($i) {
        return $this->products[$i];
    }
    
    public function delteOneProduct($i) {
        unset($this->products[$i]);
    }



}
