<?php

class Movie {
    private string $title;
    private string $author;
    private array $genre;
    private int $year;
    private int $vote; 

    function __construct(
        string $title,
        string $author,
        array $genre,
        int $year,
        int $vote
    ) {
        $this->title = $title;
        $this->author = $author;
        $this->genre = $genre;
        $this->year = $year;
        $this->vote = $vote;

        if (strlen($title) >= 2 && strlen($title) <= 64){
            $this->title = $title;
        } else {
            $this->title = 'Il titolo deve avere una lunghezza compresa tra 2 e 64 caratteri';
        }
    }

    /*
        Getters & Setters
    */
    public function getTitle(): string {
        return $this->title;
    }

    public function getAuthor(): string {
        return $this->author;
    }

    public function getGenre(): array {
        return $this->genre;
    }

    public function getYear(): string {
        return $this->year;
    }

    public function getVote(): string {
        return $this->vote;
    }
}





?>

