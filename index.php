<?php
    $host = "mysql:host=localhost;";
    $database = "dbname=php_com_pdo";
    

        if(!empty($_GET['senha'])) {
        $conexao = new PDO($host.$database, 'root','');

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



        
         /*use o PDO::FETCH_NUM para passar com os IDS Numéricos
                                                   PDO::FETCH_ASSOC para passar com os IDS Associativos         */
      /*  foreach ($conexao->query($query) as $key => $value){
            echo $value['email'], $value['nome'];
            echo "<hr>";
        } */
        
        
  
        /*SQL INJECTION:
        Se você digitar f'; delete from usuario where 'a'='a no campo email, irá deletar todos os registros         */
        /*Para tratar isso, basta fazer:*/
        $query = "select * from usuario where";
        $query .= " senha = :senha";
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':senha', $_GET['senha'], PDO::PARAM_INT);
        $stmt->execute();
        $resultado = $stmt->fetchAll();
        foreach($resultado as $key =>$value) {
        echo $value['nome'], $value['email'];
        echo '<hr>';
        }
    } else {
        echo "digite seu nome e senha";
    }
?>