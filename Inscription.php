
<?php
include_once'enTete.php';

?>

<section class "inscription-form">
    <h2>Inscription</h2>
<div class = "inscription-form-form">
    <form action="includes/pageInscription.php" method="post"><br>
        <input type="text "name="prenom" placeholder="Votre prenom"><br>
        <input type="text" name="nom" placeholder ="Votre nom"><br>
        <input type="text" name="adresse" placeholder ="Votre adresse"><br>
        <input type="text" name="codepostal" placeholder ="Votre code postal"><br>
        <input type="date" name="datedenaissance" placeholder ="Votre date de naissance"><br>
        <input type="text" name="email" placeholder ="Votre email" ><br>
        <input type="text" name="pseudo" placeholder ="Votre pseudo" ><br>
        <input type="password" name="pswd" placeholder ="Votre mot de passe"><br>
        <input type="password"  name="pswdrepeat" placeholder ="Confirmez votre mot de passe"><br>
        <input type="submit"name="submit" value="S'inscrire"><br>
     </form> 
</div>
</section>

