  <?php
  
  // Récupération des valeurs du formulaire
$input = isset($_GET["choice"]) ? $_GET["choice"] : "";

// Redirection vers les pages dédiées en fonction du choix
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if ($input === "choice-1") {
        header("Location: biographie.phtml");
        exit;
    } elseif ($input === "choice-2") {
        header("Location: vie.phtml");
        exit;
    } elseif ($input === "choice-3") {
        header("Location: assassinat.phtml");
        exit;
    }
}
  
  
  // Récuperation des valeurs du formulaire
 /*
 $input = [];
  
  
  // verifier la valeur de l'attribut value et rediriger vers la page dédiée


    if ($_SERVER["REQUEST_METHOD"] == "GET") {
      if (isset($_GET["choice"][0])) {
        $input = $_GET["choice"][0];
        header("Location: biographie.phtml");
        
    }
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
      if (isset($_GET["choice"][1])){
        $input = $_GET["choice"][1];
        header("Location: vie.phtml");
        
    }
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
      if (isset($_GET["choice"][2])) {
        $input = $_GET["choice"][2];
        header("Location: assassinat.phtml");
        
    }
    }
   
   
    
   
   // stockage des valeurs des champs
   
   /* if ($_SERVER["REQUEST_METHOD"] == "GET") {
       if(isset($_GET["choice"])) {
           $inputs["choice"] = $_GET["choice"];
       } 
    }
    
    
    
 

    
    // Redirection vers les pages phtml en fonction du choix de l'utilisateur
   
    /*
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["choice-2"])) {
        $inputs["choice-2"] = $_GET["choice-2"];
        header("Location: vie.phtml");
        
    }
        
    }
    if ($_SERVER["REQUEST_METHOD"] == "GET")  {
     if (isset($_GET["choice-1"])) {
        $inputs["choice-1"] = $_GET["choice-1"];
        header("Location: biographie.phtml");
        
    }
    }
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
          if (isset($_GET["choice-3"])) {
        $inputs["choice-3"] = $_GET["choice-3"];
        header("Location: assassinat.phtml");
        
  
    }
}
            
   
*/

    
    
    
