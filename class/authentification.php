<?php
 
         if(!empty($_POST['login']) && !empty($_POST['password']))
         {
             mysql_connect("localhost", "root", "");
             mysql_select_db("Store");

          $resultatLogin=mysqli_query("SELECT * FROM customer WHERE login='".$_POST['login']."' AND password=".$_POST['password']."");
            
  
    $ligne = mysqli_num_rows($resultatLogin);
  
   if ($ligne != 0) 
             {
    $donnees=mysqli_fetch_array($resultatLogin);    
    
    $_SESSION['login'] = $donnees['login'];
    $_SESSION['password'] = $donnees['password'];
              header("Location:spectacles.html?login=".$_SESSION['login']." ");
    }else{
     header("Location: index.html?val=0");
    }
         }
   
   if(isset($_SESSION['login']) && isset($_SESSION['password']))
   {
              header("Location:spectacles.html?login=".$_SESSION['login']." ");
   }
         else
         {
              header("Location: index.html?val=0");
         }
         
         ?>