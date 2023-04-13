<?php declare(strict_types=1);

class Product
{
    private string $name;
    private float $startPrice;
    private int $amount;
    public function __construct(string $name, float $startPrice, int $amount)
    {
        $this->name = $name;
        $this->startPrice = $startPrice;
        $this->amount = $amount;
    }

    public function printProduct(): string
    {
        return "$this->name, price $this->startPrice, amount $this->amount";
    }

    public function setStartPrice(float $newPrice): void
    {
        $this->startPrice = $newPrice;
    }

    public function setAmount(int $newAmount): void
    {
        $this->amount = $newAmount;
    }
}

$products = [
    new Product("Logitech mouse", 70.00, 14),
    new Product("iPhone 5s", 999.99, 3),
    new Product("Epson EB-U05", 440.46, 1)
];

$products[1]->setStartPrice(749.99);
$products[1]->setAmount(7);

foreach ($products as $product) {
    echo $product->printProduct() . PHP_EOL;
}