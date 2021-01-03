<?php

class Model{
    private $server = "localhost";
    private $username = "root";
    private $password = "root";
    private $db = "oop";
    private $conn;

    public function __construct()
    {
        try {

            $this->conn = new PDO("mysql:host=$this->server; dbname=$this->db", $this->username, $this->password);

        } catch(PDOException $e)
        {
            echo "Conexiune falsa!!! " . $e->getMessage();
        }
    }

    public function insert(){
        if (isset($_POST['submit'])){
            if (isset($_POST['title']) && isset($_POST['description'])){
                if (!empty($_POST['title']) && !empty($_POST['description'])){
                    // echo $title = $_POST['title'];
                    // echo $description = $_POST['description'];

                    $query = "INSERT INTO posts (title,description) VALUES ('$title', '$description')";
                    if ($sql = $this->conn->exec($query)){
                        echo '
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> Postul a fost adaugat cu succes.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                        ';
                    }else{
                        echo '
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Eruare!</strong> La adaugarea postului a avut loc o eruare.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        ';
                    }
                }else{
                    echo '

                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Atentie!</strong> Complectati cimpurile.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>

                   ';
                }
            }

        }
    }
}

?>