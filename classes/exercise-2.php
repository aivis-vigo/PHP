<?php declare(strict_types=1);

class Point
{
    public int $x;
    public int $y;

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function swapPoints($replace, $new): void
    {
        $tempX = $replace->x;
        $tempY = $replace->y;

        $replace->x = $new->x;
        $replace->y = $new->y;

        $new->x = $tempX;
        $new->y = $tempY;
    }
}

$p1 = new Point(5, 2);
$p2 = new Point(-3, 6);
$p1->swapPoints($p1, $p2);

echo "(" . $p1->x . ", " . $p1->y . ")" . PHP_EOL;
echo "(" . $p2->x . ", " . $p2->y . ")";