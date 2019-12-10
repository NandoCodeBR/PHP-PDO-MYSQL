<?php
    $host = "mysql:host=localhost;";
    $database = "dbname=php_com_pdo";
    
    try{
        $conexao = new PDO($host.$database, 'root','');
        $nome = $_GET['nome'];
        $email = $_GET['email'];
        /*$query = 'create table usuario (
                id int not null primary key auto_increment,
                nome varchar(50) not null,
                email varchar(100) not null,
                senha varchar(12) not null)';
        $retorno = $conexao->exec($query);
        echo $retorno;
         * /
         */
        /*
        $query = '
                INSERT INTO usuario (nome, email, senha) VALUES ("Fernando", "Fernando@uol.com", "Fernando123")
                ';
        $retorno = $conexao->exec($query);
         * 
        echo $retorno; */
        $query = 'SELECT nome FROM usuario WHERE nome LIKE"%'."$nome%".'"';
        $stmt = $conexao->query($query);
        $list = $stmt->fetch(PDO::FETCH_OBJ); /*use o PDO::FETCH_NUM para passar com os IDS Numéricos
                                                   PDO::FETCH_ASSOC para passar com os IDS Associativos         */
        echo "<pre>";
        echo $list->nome;
        echo "</pre>";
    } catch (PDOException $ex) {
        echo 'ERRO! Código:'.$ex->getCode(). ' Mensagem do erro: '.$ex->getMessage();
    }
    
?>