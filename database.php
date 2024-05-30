<?php 


class Database {
    public $connection;

    public function __construct(){
        $dbb = "mysql:host=localhost;port=3306;username=root;dbname=myapp";

        $this->connection = new PDO($dbb, 'root');
    }

    public function query($query){
    
    $statement = $this->connection->prepare($query);

    $statement->execute();

    return $statement;

    }
}

$db = new Database();
$posts = $db->query('SELECT users.name, users.email, notes.body from users 
join notes on users.id = notes.user_id')->fetchALL(PDO::FETCH_ASSOC);












