<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Adresse
 *
 * @author Administrateur
 */
class Adresse {
    //put your code here
    
    private $rue,
            $nom,
            $cp;
    
    public function getRue() {
        return $this->rue;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getCp() {
        return $this->cp;
    }

    public function setRue($rue) {
        if(is_int($rue) && $rue!=""){
            $this->rue = $rue;
        }
        else{
            throw new InvalidArgumentException("error sur la valeur de la rue",51);
        }
    }

    public function setNom($nom) {
        if($nom !=""){
        $this->nom = $nom;
        }
        else{
            throwException(InvalidArgumentException('pas de rue renseigné',53));
        }
    }

    public function setCp($cp) {
               if(is_int($cp) && $cp!=""){
            $this->cp = $cp;
        }
        else{
            throw new InvalidArgumentException("error sur la valeur du Code postal",51);
        }
    }
    
    public function __construct($rue, $nom , $cp) {
        $this->setRue($rue);
        $this->setNom($nom);
        $this->setCp($cp);
    }

    public function __toString() {
        ;
    }

}
