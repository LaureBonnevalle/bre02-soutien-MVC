<?php

class UserManager extends AbstractManager
{
    public function __construct()
    {
        parent::__construct();
    }
    


public function findbyId(int $id) : User
    {
        $query = $this->db->prepare('SELECT * FROM users WHERE id = :id');
        $parameters = [
            "id" => $id,
        ];
        $query->execute($parameters);
        $user = $query->fetch(PDO::FETCH_ASSOC);

        if($user !== null)
        {
            $item = new User($user["current_book"], $user["email"], $user["password"], $user["role"], DateTime::createFromFormat('Y-m-d H:i:s', $user["created_at"]));
            $item->setId($user["id"]);
        }
        else
        {
            $item = new User("", "", "", "", new DateTime());
        }

        return $item;
    }
}
