<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=messagerie;charset=utf8', 'root', 'admin');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
;?>