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
    
   
    
    public function addPatient (User $u ) {
        	$req = $this->getDBConnection()->prepare("INSERT INTO patient (name, lastname) VALUES (:n, :p, :t )");
			
			$req->bindParam(':n', $u->getName());
			$req->bindParam(':p', $u->getLastname());
                        	
			
			//$type="enseignant";
                        $req->execute();
			
	
        
    }
    

    
    
    }
        $pc=new PatientController(); 
        
        $user = new User(); 
        $user->setName("farabi") ; 
        $user->setLastname("ddddd") ; 
    
        $pc->addPatient($user) ;
   
