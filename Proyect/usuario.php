<?php

   $user = $_GET['user'];

   $password = $_GET['password'];

    
   $user1 = "administrador";

   $pass1 = "nimda";

   $user2 = "cliente";

   $pass2 = "tneilc";

  

    

   $error_notif = "¡Contraseña o usuario incorrecto!" . '<a href="'.$_SERVER['HTTP_REFERER'].'">Volver</a>';

   //$dir = "<a href='multi.php'><h1>escoje tu producto</h1></a>";
   //$dish = "<a href='dash.html'><h1>visualiza el dashboard </h1></a>";

   switch ($user) {

      case $user1:

         if ($password == $pass1) {

            header("location: dash.html");

            //echo "Bienvenido " . $user . $dish;

         } else {

            echo $error_notif;

         }

      break;

      case $user2:

         if ($password == $pass2) {


            header("location: multi.php");

            //echo "Bienvenido " . $user.$dir;
            







         } else {

            echo $error_notif;

         }

      break;

      

      default:

         echo $error_notif;

   }

?>
