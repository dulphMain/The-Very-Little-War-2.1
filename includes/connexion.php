<?php
$base = mysqli_connect('localhost', 'root', '', 'theveryl_theverylittlewar');
if (!$base) {
    die('Erreur de connexion a la base de données' . mysqli_connect_error());
}
mysqli_query($base, "SET NAMES 'utf8'");
