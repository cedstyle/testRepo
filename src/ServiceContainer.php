<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ServiceContainer
 *
 * @author Administrateur
 */
class ServiceContainer {
    protected  $service;
    private static $keys = array();
    public function gettService() {
        return $this->service;
    }

    public function setService($service) {
        if(!isset(in_array($service, $keys)))
        {
            $this->keys[] =  $service;
            
        }else{
            return  $service;
        }
    }

}
