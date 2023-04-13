<?php declare(strict_types=1);

class Video
{
    private string $title;
    private array $ratings = [];
    private bool $isCheckedOut;


    public function __construct(string $title)
    {
        $this->title = $title;
        $this->isCheckedOut = false;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function checkedOut(): void
    {
        $this->isCheckedOut= true;
    }

    public function returned(): void
    {
        $this->isCheckedOut = false;
    }

    public function getIsCheckedOut(): bool
    {
        return $this->isCheckedOut;
    }

    public function rate(int $rating): void
    {
        $this->ratings[] = $rating;
    }

    public function getAvgRating(): float
    {
        if (count($this->ratings) <= 0) {
            return 0;
        }

        return array_sum($this->ratings) / count($this->ratings);
    }

    public function giveRating(int $rating): void
    {
        $this->ratings[] = $rating;
    }
}