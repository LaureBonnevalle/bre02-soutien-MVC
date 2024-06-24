<?php


class Router
{
    private LibraryControlleur $lc;
    //private BlogController $bc;

    public function __construct()
    {
        $this->lc = new LibraryController();
        //$this->bc = new BlogController();
    }
    public function handleRequest(array $get) : void
    {
        if(!isset($get["route"]))
        {
            $this->lc->home();
            echo "home<br>";
        }
        else if(isset($get["route"]) && $get["route"] === "books")) // route pour voir tous les livres du catalogue
        {
            $this->lc->books();// appelle la methode du controleur
            echo "books<br>";
        }
        
        else if(isset($get["route"]) && $get["route"] === "user")) // "user&user_id={id} route pour voir les livres empruntés par l'utilisateur à l'ai de l'id
        {
            $this->lc->user(int $id);// appelle la methode du controleur
            echo "user<br>";
        }
        
        else if(isset($get["route"]) && $get["route"] === "index.php")) //route pour acceder à catalogue et liste des users
        {
            $this->lc->home();// appelle la methode du controleur
            echo "home<br>";
        }
        
        else if(isset($get["route"]) && $get["route"] === ""))
        {
            // $this->c->notFound();
        }
    }
}
?>