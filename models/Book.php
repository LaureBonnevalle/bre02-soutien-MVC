<?php


class Book
{
    private ? int $id = null;

    public function __construct(private string $title, private string $author, private  string $category, private bool $returned, private bool $cleaned)
    {
        
    }
    
    //getters
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    public function isReturned(): bool
    {
        return $this->returned;
    }

    public function isCleaned(): bool
    {
        return $this->cleaned;
    }
    
    // Setters
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }

    public function setCategory(string $category): void
    {
        $this->category = $category;
    }

    public function setReturned(bool $returned): void
    {
        $this->returned = $returned;
    }

    public function setCleaned(bool $cleaned): void
    {
        $this->cleaned = $cleaned;
    }
}

?>