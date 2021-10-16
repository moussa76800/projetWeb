<?php

if(isset($_POST["submit"])){
    $nom=$_POST["nom"];
    $prenom=$_POST["prenom"];
    $adresse=$_POST["adresse"];
    $codePostal=$_POST["codepostal"];
    $dateDeNaissance=$_POST["datedenaissance"];
    $email=$_POST["email"];
    $pseudo=$_POST["pseudo"];
    $password=$_POST["pswd"];
    $passwordRepeat=$_POST["pswdrepeat"];

require_once 'dbh.php';
require_once 'functions.php';

if (emptyInputSignup($nom,$prenom,$adresse,$codePostal,$dateDeNaissance,$email,$pseudo,$password,$passwordRepeat)!== false) {
    header("location: ../inscription.php?error=emptyinput");
    exit();
}

if (invalidPseudo($pseudo)!== false) {
    header("location: ../inscription.php?error=invalidpseudo");
    exit();
}

if (invalidEmail($email)!== false) {
    header("location: ../inscription.php?error=invalidEmail");
    exit();
}

if (pswdMatch($password,$passwordRepeat)!== false) {
    header("location: ../inscription.php?error=pswdDontMatch");
    exit();
}

if (pseudoExist($connect,$pseudo,$email)!== false) {
    header("location: ../inscription.php?error=pseudoExist");
    exit();
}

createUser($connect,$nom,$prenom,$adresse,$connect,$dateDeNaissance,$email,$pseudo,$password);
               
}else {
    header("vous etes diriger :../inscription.php");
}
