<?php 

    require_once __DIR__ . "/../backend/conexao.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $razao_social = $_POST['razaoSocial'];
        $cnpj = $_POST['cnpj'];
        $data_fundacao = $_POST['dataFundacao'];
        $responsavel = $_POST['responsavel'];
        $email = $_POST['email'];
        $estado = $_POST['estado'];
        $cidade = $_POST['cidade'];
        $senha = $_POST['senha'];
        $id_cidade = $_POST['cidade'];
        $cidade = "";

        switch($id_cidade){
            case "1":
                $cidade  = "Uberlândia";
                break;
            case "2":
                $cidade = "São Paulo";
                break;
            case "3":
                $cidade = "Fortaleza";
                break;
            default:
                $cidade = "Não Informada";
        }

        $sql = "INSERT INTO ASSINANTES(razao_social,cnpj,data_fundacao,responsavel,email,estado,cidade,senha) VALUES (:razao_social,:cnpj,:data_fundacao,:responsavel,:email,:estado,:cidade,:senha)";

        $statement = $conexao->prepare($sql);

        $statement->bindParam(':razao_social', $razao_social);
        $statement->bindParam(':cnpj', $cnpj);
        $statement->bindParam(':data_fundacao',$data_fundacao);
        $statement->bindParam(':responsavel', $responsavel);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':estado', $estado);
        $statement->bindParam(':cidade', $cidade);
        $statement->bindParam(':senha', $senha);

        if($statement->execute()){
            echo "<h1>Cadastro Realizado com sucesso!!!</h1>";
            echo "<br><a href='../index.html'>Voltar para página inicial</a>";
        }else{
            echo "Erro Ao cadastrar";
        }
    }



?>