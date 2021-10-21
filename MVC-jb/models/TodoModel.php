<?php
namespace models;

use models\base\SQL;

class TodoModel extends SQL
{
    public function __construct()
    {
        parent::__construct('todos', 'id');
    }
    function todoNonTermine()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM todos WHERE termine = 1;");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    function ajouterTodo($texte){
        $stmt = $this->pdo->prepare("INSERT INTO todos (texte, termine, timestamp) values (?, 0 ,NOW())");
        $stmt->execute([$texte]); 
    }
    function marquerCommeTermine($id){
        $stmt = $this->pdo->prepare("UPDATE todos SET termine = 1 WHERE id = ?");
        $stmt->execute([$id]);
    }
    function supprimerTodo($id){
        $stmt = $this->pdo->prepare("DELETE FROM todos WHERE id = ? AND termine = 1");
        $stmt->execute([$id]); 
    }
    

    
}