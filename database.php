<?php 


class Database {
    public $connection;

    public function __construct(){
        $dbb = "mysql:host=localhost;port=3306;username=root;dbname=myapp";

        $this->connection = new PDO($dbb, 'root');
    }

    public function query($value){
    
    $statement = $this->connection->prepare($value);

    $statement->execute();

    return $statement;

    }
}

$db = new Database();
$posts = $db->query('select * from posts where id=1')->fetchALL(PDO::FETCH_ASSOC);












