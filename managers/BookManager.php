<?php

class BookManager extends AbstractManager
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function findAll() : array
    {
        $query = $this->db->prepare('SELECT * FROM books');
        $query->execute();
        $result = $query->fetchAll(PDO::ASSOC);
        $user = [];
        
        foreach($result as $item)
        {
            $user = new User ($item["current_book"], $item["borrowed_book1"], $item["borrow_book2"], $item["borrow_book3"]);
            $user ->setId($item["id"]);
            $users[] = $user;
        }
        return $users;
    }
    
    public function findById(in $id) : ? BookManager
    {
        $query = $this->db->prepare('SELECT * FROM books WHERE id=:id');
        
        $query->execute(["id"=> $id]);
        $result = $query->fetch(PDO::FETCH_ASSOC);
        
        if($result)
        {
            $book = new Book($result["title"], $result["author"], $result["category"], $result["returned"], $result[cleaned]);
            
            return $book;
        }
        else
        {
            return null;
        }
    }
        
        
}


?>