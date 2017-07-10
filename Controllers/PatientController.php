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
    
	function afficher(User $u)
	{
            $user = new User() ;
             $name=$u->getName();
             $lastname= $u->getLastname();
          
            
		$req = "select * from patient where name = '$name'  and lastname = '$lastname' ";
                
                
		$rep = $this->getDBConnection()->query($req);
		$tab = $rep ->fetchAll();
                
                if ($rep->rowCount() == 0)
                {
                    echo  false ; 
                    
                }
                
                else {
                 echo  json_encode($tab[0]) ;
                }
            
             
             
	}
    
    
    }
        $pc=new PatientController(); 
    
        $user = new User(); 
    
        $user->setName("farabi") ; 
        $user->setLastname("ddddd") ; 
       
    
        $pc->afficher($user) ;
   
