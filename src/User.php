<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserClass
 *
 * @author Administrateur
 */
class User {

    private $nom, $prenom, $email, $mdp, $adresse;
    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getMdp() {
        return $this->mdp;
    }

    public function setNom($nom) {
        
        if(is_string($nom)){
                 $this->nom = $nom;
        }
        else{
                 throw new InvalidArgumentException('Un message pour te dire que ton test a foiré', 20);
                 echo "test message";
        }
    }

    public function setPrenom($prenom) {
        if($prenom!="" && is_string($prenom)){
        $this->prenom = $prenom;
        }
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setMdp($mdp) {
        $this->mdp = $mdp;
    }

    public function getAdresse() {
    return $this->adresse;
    }

    public function setAdresse(Adresse $adresse) {
      
    $this->adresse = $adresse;

    }

}

