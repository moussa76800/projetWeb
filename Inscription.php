
<?php
include_once'enTete.php';

?>

<section class "inscription-form">
    <h2>Inscription</h2>
<div class = "inscription-form-form">
    <form action="includes/pageIncription.php" method="post"><br>
        <input type="text "name="prenom" placeholder="Votre prenom"><br>
        <input type="text" name="nom" placeholder ="Votre nom"><br>
        <input type="text" name="pseudo" placeholder ="Votre pseudo" ><br>
        <input type="text" name="email" placeholder ="Votre email" ><br>
        <input type="password" name="pswd" placeholder ="Votre mot de passe"><br>
        <input type="password"  name="pswdrepeat" placeholder ="Confirmez votre mot de passe"><br>
        <input type="submit"name="submit" value="S'inscrire"><br>
     </form> 
</div>
</section>

