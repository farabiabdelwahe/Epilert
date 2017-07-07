<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PatientController
 *
 * @author GSC
 */
include '..\Classes\Patient.php' ; 
include './ConnexionController.php' ; 
class PatientController extends ConnexionController {
    
    function __construct() {
      

    }

    
    public function addPatient (  User $u) {
        	$req = $this->getDBConnection()->prepare("INSERT INTO patient (name, lastname) VALUES (:n, :p)");
			$n=  $u->getName();
                        $l= $u->getLastname();
			$req->bindParam(':n', $n);
			$req->bindParam(':p', $l);
         
			$type="enseignant";
                        $req->execute();
                        var_dump($req);
    }
    

    
    
    }
        $pc=new PatientController(); 
    
        $user = new User(); 
    
        $user->setName("farabi") ; 
        $user->setLastname("ddddd") ; 
           var_dump($user) ;
    
        $pc->addPatient($user) ;
   
