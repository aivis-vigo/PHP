<?php declare(strict_types=1);

class VideoStore
{
    private array $videos = [];

    public function add(Video $video): void
    {
        $this->videos[] = $video;
    }

    public function checkOutVideo(string $videoTitle): bool
    {
        foreach ($this->videos as $video) {
            /** @var Video $video */
            if ($video->getTitle() == $videoTitle && !$video->getIsCheckedOut()) {
                $video->checkedOut();
                 return true;
            }
        }
        return false;
    }

    public function returnVideo(string $videoTitle): bool
    {
        foreach ($this->videos as $video) {
            /** @var Video $video */
            if ($video->getTitle() == $videoTitle && $video->getIsCheckedOut()) {
                $video->returned();
                return true;
            }
        }
        return false;
    }

    public function rate(Video $videoTitle, int $rating): bool
    {
        foreach ($this->videos as $video) {
            /** @var Video $video */
            if ($video->getTitle() == $videoTitle) {
                $video->giveRating($rating);
                return true;
            }
        }
        return false;
    }

    public function getAll(): array
    {
        return $this->videos;
    }

    public function getByIndex($index): ?Video // null vai video
    {
        return  $this->videos[$index] ?? null;
    }
}