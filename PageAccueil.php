<?php
session_start(); 
try{
    $bdd = new PDO('mysql:host=localhost;dbname=membre;charset=utf8', 'root', '');
    die('Erreur : ' . $e->getMessage());
}
?>


<section class="introduction">
    <h1>JE VAIS VOUS PRESENTEZ MON SITE FANTASTIC</h1>
<?php 
include_once 'enTete.php';
?>


<p> BLABLABLABLABALABALABLABA<P/>

<section class="categorie">
    <h2>JE VAIS VOUS PRESENTEZ MES CATEGORIES</h2>

<div class= "index-categories list">
    ><div>
        <h3>materiel MaterielInformatique</h3>
    </div>
    ><div>
        <h3>LIVRE</h3>
    </div>
    ><div>
        <h3>ACCESSOIRE</h3>
    </div>

    <?php 
include_once 'piedDePage';
?>


