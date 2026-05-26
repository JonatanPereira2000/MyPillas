<?php 

   $conexao = new PDO('mysql:host=localhost; dbname=MyPillas', 'root','admin' );
   
   $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>