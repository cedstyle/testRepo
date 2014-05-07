<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Product
 *
 * @author Administrateur
 */
class Product {
    //put your code here
    
    protected $id, $nom , $prix, $description;
    
    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrix() {
        return $this->prix;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNom($nom) {
        if($nom!=""){
            $this->nom = $nom;
        }
        else {
            throw new InvalidArgumentException("error nom",51);
        }

    }

    public function setPrix($prix) {
        if( is_int($prix)){
            $this->prix = $prix;
        }
        else{
            throw new InvalidArgumentException("error prix",52);
        }
        
    }

    public function setDescription($description) {
        $this->description = $description;
    }
    
    function __construct($nom,$prix) {
        $this->setNom($nom);
        $this->setPrix($prix);
    }

}
