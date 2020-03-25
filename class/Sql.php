<?php
//As classes que vão conversar com o banco, DAO = Data Access Object,
class Sql extends PDO {//extendo da classe nativa do php PDO(bind->param, execute,prepare)metodos publicos 

    private $conn;//conexao

    public function __construct(){//Classes que tem um método construtor, chamam o método a cada objeto recém criado, sendo apropriado para qualquer inicialização que o objeto necessite antes de ser utilizado.//
        $this->conn = new PDO("mysql:host=localhost; dbname=dbphp7", "root", "");
    }

    private function setParams($statement, $parameters = array()){
        foreach ($parameters as $key => $value) {
            
            $this->setParam($statement, $key, $value);
        }
    }

    private function setParam($statement, $key, $value){
        $statement->bindParam($key, $value);

    }

    public function query($rawQuery, $params = array()){// query recebe 2 parametro(rawQuery = query bruta, é a query que vamos trata depois no sql)
        $stmt = $this->conn->prepare($rawQuery);
        $this->setParams($stmt, $params);
        $stmt->execute();
        return $stmt;
    }

    public function select($rawQuery, $params = array()):array{
        $stmt = $this->query($rawQuery, $params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);//vim só os dados associativos sem os index dos numeros
    }

}
