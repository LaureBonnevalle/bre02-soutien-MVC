<?php
class User
{
    private ? int $id = null;

    public function __construct(private string $role="USER", private ?Book $CurrentBook = null, private ?Book $borrowBook1 = null, private ?Book $borrowBook2 = null, private ?Book $borrowBook3 = null)
    {
        $this->role = $role;
        $this->currentBook = $currentBook;
        $this->borrowBook1 = $borrowBook1;
        $this->borrowBook2 = $borrowBook2;
        $this->borrowBook3 = $borrowBook3;
    }
    
    // Getters
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function getCurrentBook(): ?Book
    {
        return $this->currentBook;
    }

    public function getBorrowBook1(): ?Book
    {
        return $this->borrowBook1;
    }

    public function getBorrowBook2(): ?Book
    {
        return $this->borrowBook2;
    }

    public function getBorrowBook3(): ?Book
    {
        return $this->borrowBook3;
    }

    // Setters
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function setRole(string $role): void
    {
        $this->role = $role;
    }

    public function setCurrentBook(?Book $currentBook): void
    {
        $this->currentBook = $currentBook;
    }

    public function setBorrowBook1(?Book $borrowBook1): void
    {
        $this->borrowBook1 = $borrowBook1;
    }

    public function setBorrowBook2(?Book $borrowBook2): void
    {
        $this->borrowBook2 = $borrowBook2;
    }

    public function setBorrowBook3(?Book $borrowBook3): void
    {
        $this->borrowBook3 = $borrowBook3;
    }
    
}

?>