
<?php
include_once'enTete.php';

?>

<section class "inscription-form">
    <h2>CONNEXION</h2>
<div class = "connexion-form-form">
    <form action="includes/pageConnection.php" method="post">
        
        <input type="text" name="pseudo" placeholder ="Votre pseudo"br >
        <input type="text" name="email" placeholder ="Votre email" >
        <input type="password" name="login" placeholder ="Votre mot de passe">
        <input type="submit"name="submit" value="Se connecter">
     </form> 
</div>
</section>

<?php 
include_once'piedDePage';
?>