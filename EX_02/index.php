<html>

<head>
    <titre>mini-site-routing</titre>
</head>
    
<header>
        
  <h1>Header vitrine accueil</h1>
    
<?php include_once ("navigation.php");?>
 <ul id="nav">
            <li><a href="vitrine-accueil.php?page=1">Accueil</a></li>
            <li><a href="vitrine-programme.php?page=2">Programme</a></li>
            <li><a href="vitrine-contacts.php?page=3">Contacts</a></li>
        </ul>  
    
<h1>  Bienvenue sur la page 

 <?php  
     if ($_GET['page']=="1") { 
     echo"Accueil";
     }
     else {
         echo $_GET['page'];
     }
     ?> 
</h1>
</header>
   
</html>