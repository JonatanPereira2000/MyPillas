<?php 

   $conexao = new PDO('mysql:host=localhost; dbname=MyPillas', 'root','admin' );
   
   $statement = $conexao->query("SELECT * FROM ASSINANTES");

   return $statement->fetchAll();

?>