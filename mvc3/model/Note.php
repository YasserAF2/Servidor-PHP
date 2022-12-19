<?php
//ini_set('display_errors', 1);
include_once "Db.php";


class Note
{
    private int $id;
    private string $title;
    private string $content;

    public function __construct(int $id, string $title, string $content)
    {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getContent()
    {
        return $this->content;
    }
}

class NoteTable
{
    private $table = "note";
    private $conection;
    private array $notas = array();
    public function __construct()
    {
        //Construct
    }


    public function getConection()
    {
        $dbObj = new Db();
        $this->conection = $dbObj->conection;

        if ($this->conection->connect_error) {
            return die("Conexión fallida");
        } else {
            return "Conexión realizada";
        }
    }

    public function getNotes()
    {
        $this->getConection();

        $sql = "SELECT * FROM " . $this->table;
        $result = $this->conection->query($sql);

        if ($result->num_rows > 0) {
            $i = 0;
            while ($row = $result->fetch_assoc()) {
                $this->notas[$i] = new Note($row['id'], $row['title'], $row['content']);
                $i++;
            }
        }
        return $this->notas;
    }

    public function getNoteById($id)
    {
        $this->getConection();

        $sql = "SELECT * FROM " . $this->table . " WHERE id = " . $id;
        $result = $this->conection->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return new Note($row['id'], $row['title'], $row['content']);
        }
    }

    public function insertar($title, $content)
    {
        $this->getConection();
        $sql = "INSERT INTO " . $this->table . "(title, content) VALUES ('$title', '$content')";

        if ($this->conection->query($sql) === false) {
            echo "Error: " . $sql . "<br>" . $this->conection->error;
        }
    }

    public function borrar($id)
    {
        $this->getConection();
        $sql = "DELETE FROM " . $this->table . " WHERE id=$id";

        if ($this->conection->query($sql) === false) {
            echo "Error: " . $sql . "<br>" . $this->conection->error;
        }
    }

    public function editar($id, $title, $content)
    {
        $this->getConection();
        $sql = "UPDATE " . $this->table . " SET title='$title', content='$content' WHERE id=$id";

        if ($this->conection->query($sql) === false) {
            echo "Error: " . $sql . "<br>" . $this->conection->error;
        }
    }
}