
<?php
include_once'enTete.php';

?>

<section class "inscription-form">
    <h2>Inscription</h2>
<div class = "inscription-form-form">
    <form action="includes/pageInscription.php" method="post"><br>
        
        <input type="text" name="nom" placeholder ="Votre nom"><br>
        <input type="text "name="prenom" placeholder="Votre prenom"><br>
        <input type="text" name="adresse" placeholder ="Votre adresse" ><br>
        <input type="int" name="code_postal" placeholder ="Votre code postal" ><br>
        <input type="int" name="date_de_naissance" placeholder ="Votre date de naissance"><br>
        <input type="text" name="email" placeholder ="Votre email" ><br>
        <input type="text" name="pseudo" placeholder ="Votre pseudo" ><br>
        <input type="password" name="pswd" placeholder ="Votre mot de passe"><br>
        <input type="password"  name="pswdrepeat" placeholder ="Confirmez votre mot de passe"><br>

        <input type="submit"name="submit"> S'inscrire</button><br>
     </form> 
</div>
</section>

