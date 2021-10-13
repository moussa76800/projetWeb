
<?php
session_start();
 

<!DOCTYPE html>
<html>
     <head>
        <title>INSCRIPTION</title>
        <meta charset="utf-8" />
     </head>

    <body>
    <h2>Inscription</h2>

    <form action="inscription.php" method="POST">
        <input type="text"placeholder ="Votre prenom"id = "prenom"name="prenom"/>
        <input type="text"placeholder ="Votre nom"id=nom name="nom"/>
        <input type="text"placeholder ="Votre pseudo"id="pseudo"  name="pseudo" />
        <input type="text"placeholder ="Votre email"id="email" name="email" />
        <input type="password"placeholder ="Votre mot de passe" id="login" name="login" />
        <input type="password"placeholder ="Confirmez votre mot de passe"id="login1"  name="login1"/>
        <input type="submit"name="envoi" value="valider"/>
     </form> 
   </body>

</html>