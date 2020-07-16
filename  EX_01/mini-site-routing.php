<html>

<head>

    <titre>mini-site-routing</titre>

</head>
    
<header>
    
<a href=>Accueil</a>   
<a href=>Page2</a>  
<a href=>Page3</a>  
<a href=>connexion</a> 

    
<h1>  Bienvenue sur la page 

 <?php  
     if ($_GET['page']=="1") { 
     echo"Accueil";
     }
    if ($_GET['page']=="4") { 
     echo"Connexion";
     } 
     else {
         echo $_GET['page'];
     }
     ?> 
</h1>
</header>
   
</html>