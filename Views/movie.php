<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>php OOP</title>
</head>
<body>
<?php

class Movie {
    public $title;
    public $overview;
    public $release_date;
    public $poster_path;
    public function __construct($data) {
        $this->title = $data['title'];
        $this->overview = $data['overview'] ?? 'overview Not Available';
        $this->release_date = $data['release_date'] ?? 'Release Date Not Available';
        $this->poster_path = $data['poster_path'] ?? ''; 
    }

    public function printCard() {
        echo '<div class="card">';
        if (!empty($this->poster_path)) {
            echo '<img src="' . $this->poster_path . '" alt="' . $this->title . ' Poster">';
        }
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . $this->title . '</h5>';
        echo '<p class="card-text">Descrizione: ' . $this->overview . '</p>';
        echo '<p class="card-text">Anno di uscita: ' . $this->release_date . '</p>';
        echo '</div>';
        echo '</div>';
    }
}

// Leggere il contenuto del file JSON
$jsonData = file_get_contents('./Model/movie_db.json');

// Convertire il JSON in un array associativo
$moviesArray = json_decode($jsonData, true);

// Creare oggetti Movie usando i dati letti dal file JSON
foreach ($moviesArray as $movieData) {
    $movie = new Movie($movieData);
    $movie->printCard();
}

?>

 