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
    // Dichiarazione delle variabili d'istanza
    public $title;
    public $director;
    public $year;

    // Costruttore
    public function __construct($title, $director, $year) {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
    }

    // Metodo per stampare le informazioni del film
    public function printInfo() {
        echo "Titolo: " . $this->title . "<br>";
        echo "Regista: " . $this->director . "<br>";
        echo "Anno: " . $this->year . "<br><br>";
    }
}

// Creazione di due oggetti Movie
$movie1 = new Movie("Interstellar", "Christopher Nolan", 2014);
$movie2 = new Movie("Inception", "Christopher Nolan", 2010);

// Stampare le informazioni dei film
$movie1->printInfo();
$movie2->printInfo();
?>

</body>
</html>