<?php 

   $conexao = new PDO('mysql:host=localhost; dbname=MyPillas', 'root','' );
   
   $statement = $conexao->query("SELECT * FROM ASSINANTES");

   return $statement->fetchAll();

?>