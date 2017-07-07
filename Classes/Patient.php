<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Patient
 *
 * @author GSC
 */

  class User {
    
    	
    
   var $id ; 
    
    var $name ; 
    var $lastname ; 
    var $type ; 
    var  $adress ; 
    var $phonenumber; 
    var $emergencynumber;
    var $email ; 
    var $password ;    
    //patient
    var $age ; 
    var $case_description ; 
    var $sexe ;
    
    
    //doctor
    var $speciality ; 
 
    
    //put your code here
    function __construct() {
        
    }

    function getName() {
        return $this->name;
    }

    function getLastname() {
        return $this->lastname;
    }

    function getType() {
        return $this->type;
    }

    function getAdress() {
        return $this->adress;
    }

    function getPhonenumber() {
        return $this->phonenumber;
    }

    function getEmergencynumber() {
        return $this->emergencynumber;
    }

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function getAge() {
        return $this->age;
    }

    function getCase_description() {
        return $this->case_description;
    }

    function getSexe() {
        return $this->sexe;
    }

    function getSpeciality() {
        return $this->speciality;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    function setType($type) {
        $this->type = $type;
    }

    function setAdress($adress) {
        $this->adress = $adress;
    }

    function setPhonenumber($phonenumber) {
        $this->phonenumber = $phonenumber;
    }

    function setEmergencynumber($emergencynumber) {
        $this->emergencynumber = $emergencynumber;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setAge($age) {
        $this->age = $age;
    }

    function setCase_description($case_description) {
        $this->case_description = $case_description;
    }

    function setSexe($sexe) {
        $this->sexe = $sexe;
    }

    function setSpeciality($speciality) {
        $this->speciality = $speciality;
    }
 
    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }

    
    public static function addUser() {
        
        
    
    }


}
