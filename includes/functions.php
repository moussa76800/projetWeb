<?php

function emptyInputSignup($nom,$prenom,$adresse,$codePostal,$dateDeNaissance,$email,$pseudo,$password,$passwordRepeat) {
$result;
if (empty($nom) || empty($prenom) || empty($adresse) || empty($codePostal) || empty($dateDeNaissance) || empty($email) || empty($pseudo) || empty($password) || empty($passwordRepeat) ){
    $result=true;
}else {
   $result=false; 
}
return $result;
}

function invalidPseudo($pseudo) {
    $result;
    if (!preg_match ("/^[a-zA-Z0-9]*$/",$pseudo)) {
    $result=true;
    }else {
       $result=false; 
    }
    return $result;
}

function invalidEmail($email) {
    $result;
    if (!filter_var ($email,FILTER_VALIDATE_EMAIL)) {
    $result=true;
    }else {
       $result=false; 
    }
    return $result;
}

function pswdMatch($password,$passwordRepeat) {
    $result;
    if ($password !== $passwordRepeat) {
    $result=true;
    }else {
       $result=false; 
    }
    return $result;
}

function pseudoExist($connect,$pseudo,$email) {
$email;
$sql= "SELECT * FROM  users WHERE pseudo = ?; " ;
$stmt= mysqli_stmt_init($connect);
if (! mysqli_stmt_prepare($stmt,$sql)) {
    header("location: ../inscription.php?error=pseudoExist");
    exit();
}

 mysql_stmt_param($stmt,"ss",$pseudo,$email);
 mysql_stmt_execute($stmt);
 
 $resultData = mysqli_stmt_get_result($stmt);
 if($row=mysqli_fetch_assoc($resultData)) {
  return $row;
 }else {

     $result=false;
     return $result;
 }
 mysqli_stmt_close($stmt);
}

 function createUser($connect,$nom,$prenom,$adresse,$dateDeNaissance,$email,$pseudo,$password) {
    $email;
    $sql= "INSERT INTO users (nom,prenom,adresse,dateDeNaissance,email,pseudo,passwd) VALUES (?,?,?,?,?,?,?);" ;
    $stmt= mysqli_stmt_init($connect);
    if (! mysqli_stmt_prepare($stmt,$sql)) {
        header("location: ../inscription.php?error=stmtfailed");
        exit();
    }
    
    $hashedPswd= password_hash($password,PASSWORD_DEFAULT);

     mysqli_stmt_param($stmt,"sssssss",$pseudo,$email);
     mysqil_stmt_execute($stmt);
     mysqli_stmt_close($stmt);
     header("vous etes diriger :../inscription.php?error=notcreate");
     exit();
}



