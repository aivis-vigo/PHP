<?php declare(strict_types=1);

class Date
{
    private int $day;
    private int $month;
    private int $year;

    public function __construct(int $day, int $month, int $year)
    {
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }

    public function setDay($newDay): void
    {
        $this->day = $newDay;
    }

    public function getDay(): int
    {
        return $this->day;
    }

    public function setMonth($newMonth): void
    {
        $this->month = $newMonth;
    }

    public function getMonth(): int
    {
        return $this->month;
    }

    public function setYear($newYear): void
    {
        $this->year = $newYear;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function displayDate(): string {
        return sprintf("%u/%u/%u",$this->getDay(),$this->getMonth(),$this->getYear());
    }
}

class DateTest
{
    public function run()
    {
        $date = new Date(23, 03, 2013);
        echo $date->displayDate() . PHP_EOL;

        $date->setDay(11);
        $date->setYear(2023);
        echo $date->displayDate();
    }
}

DateTest::run();