<?php

class LibraryController extends AbstractController
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function home():void
    {
        echo"Je suis la page d'accueil";
    }
    
    public function books(): void
    {
        echo"je suis le catalogues des livres";
    }
    
    public function user (string $id): void
    {
        echo"Je suis la page des usagers";
    }
    
}