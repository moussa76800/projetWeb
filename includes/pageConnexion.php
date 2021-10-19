

<?PHP

require_once 'dbh.php';
}
     $req = $connect->query('SELECT * FROM prenom');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        
    </head>
    <body>
    
        <?php
    if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "mm") // Si le mot de passe est bon
    {
        echo 'Bingo tu est connecter BRAVOOOO !!!!'
    ?>
        
        <?php
    }
    else // Sinon, on affiche un message d'erreur
    {
        echo '<p>Mot de passe incorrect</p>';
    }
    ?>
    
        
    </body>
</html>