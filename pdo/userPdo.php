<?php
function verification($login,$password)
{
 try{
             $connection = new PDO("mysql:host=localhost;dbname=ppe;charset=utf8", "root", "");
             $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             $requete = $connection->query('SELECT count(*) as nb FROM users WHERE login="'.$login.'" and password="'.$password.'"');
             $res=$requete->fetch();
             return $res["nb"];
             $connection=null;
       }
       		 catch (PDOException $e) {
        echo 'Échec lors de la suppression d un sujet : ' . $e->getMessage();
        }
 }