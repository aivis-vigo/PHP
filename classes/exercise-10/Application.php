<?php declare(strict_types=1);

class Application
{
    private VideoStore $videoStore;

    public function __construct(VideoStore $videoStore)
    {
        $this->videoStore = $videoStore;
    }

    public function run(): void
    {
        while (true) {
            echo "Choose the operation you want to perform \n";
            echo "Choose 0 for EXIT\n";
            echo "Choose 1 to fill video store\n";
            echo "Choose 2 to rent video (as user)\n";
            echo "Choose 3 to return video (as user)\n";
            echo "Choose 4 to rate video (as user)\n";
            echo "Choose 5 to list inventory\n";

            $command = (int)readline();

            switch ($command) {
                case 0:
                    echo "Bye!";
                    die;
                case 1:
                    $this->create();
                    break;
                case 2:
                    $this->rentVideo();
                    break;
                case 3:
                    $this->returnVideo();
                    break;
                case 4:
                    $this->rateVideo();
                    break;
                case 5:
                    $this->listInventory();
                    break;
                default:
                    echo "Sorry, I don't understand you..";
            }
        }
    }

    private function create()
    {
        while (true) {
            $videoTitle = readline("Enter video title: ");
            $this->videoStore->add(
                new Video($videoTitle)
            );
            $toContinue = readline("Want to add more?(y/n): ");
            if ($toContinue == "n") {
                break;
            }
        }
    }

    private function rentVideo()
    {
        $videoTitle = readline("Enter movie you'd like to rent: ");
        if ($this->videoStore->checkOutVideo($videoTitle)) {
            echo "You rented out $videoTitle";
        } else {
            echo "Video not found!";
        }
    }

    private function returnVideo()
    {
        $videoTitle = readline("Enter movie title you'd like to return: ");
        if ($this->videoStore->returnVideo($videoTitle)) {
            echo  "$videoTitle returned";
        } else {
            echo "Video not found!";
        }
    }

    private function rateVideo()
    {
        $this->listInventory();

        $videoIndex = readline("Enter movie ID you'd like to rate: ");
        $video = $this->videoStore->getByIndex($videoIndex);

        if ($video == null) {
            echo "Video not found!" . PHP_EOL;
            return;
        }

        $rating = (int) readline("Enter rating: ");

        if ($rating <= 0) {
            echo "Invalid rating!" . PHP_EOL;
        }

        $video->rate($rating);
    }

    private function listInventory()
    {
        foreach ($this->videoStore->getAll() as $index => $video) {
            /** @var Video $video */
            $isAvailable = $video->getIsCheckedOut() ? "No" : "Yes";
            echo "[$index] Title: {$video->getTitle()}, Rating: {$video->getAvgRating()}, Available: $isAvailable" . PHP_EOL;
        }
    }
}