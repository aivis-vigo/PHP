<?php declare(strict_types=1);

class Movie
{
    public string $title;
    public string $studio;
    public string $rating;

    public function __construct($title, $studio, $rating)
    {
        $this->title = $title;
        $this->studio = $studio;
        $this->rating = $rating;
    }

    public function getPg(object $movie): array
    {
        $pgRated = [];

        if ($movie->rating == "PG") {
            $pgRated[] = $movie;
        }

        return $pgRated;
    }
}

function pgRatedMovies(): array {
    $movies = [
        new Movie("Casino Royale", "Eon Production", "PG13"),
        new Movie("Glass", "Buena Vista International", "PG13"),
        new Movie("Spider-Man: Into the Spider-Verse", "Columbia Pictures", "PG"),
        new Movie("The Super Mario Bros. Movie", "Universal Pictures", "PG")
    ];

    $ratedMovies = [];

    foreach ($movies as $movie) {
        $ratedMovies[] = $movie->getPg($movie);
    };

    return array_filter($ratedMovies);
}

var_dump(pgRatedMovies());