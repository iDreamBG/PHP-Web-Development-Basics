<?php

//spl_autoload_register();

/**
 * Created by PhpStorm.
 * User: USER
 * Date: 16.10.2018 г.
 * Time: 15:28
 */


class Product
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var float
     */
    private $cost;

    /**
     * Product constructor.
     * @param string $name
     * @param float $cost
     */
    public function __construct(string $name, float $cost)
    {
        $this->setName($name);
        $this->setCost($cost);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    private function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getCost(): float
    {
        return $this->cost;
    }

    /**
     * @param float $cost
     */
    private function setCost(float $cost): void
    {
        $this->cost = $cost;
    }




}

class Person02
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var float;
     */
    private $money;

    /**
     * @var Product[];
     */
    private $products;

    /**
     * Person02 constructor.
     * @param string $name
     * @param float $money
     * @throws Exception
     */
    public function __construct(string $name, float $money)
    {
        $this->setName($name);
        $this->setMoney($money);
        $this->products = [];

    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @throws
     */
    private function setName(string $name): void
    {
        if(empty($name)){
            throw new Exception("Name cannot be empty");
        }
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getMoney(): int
    {
        return $this->money;
    }

    /**
     * @param int $money
     * @throws
     */
    private function setMoney(int $money): void
    {
        if($money < 0){
            throw new Exception("Money cannot be negative");
        }
        $this->money = $money;
    }

    /**
     * @return PRODUCT[]
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    /**
     * @param PRODUCT[] $products
     */
    public function setProducts(array $products): void
    {
        $this->products = $products;
    }


    /**
     * @param Product $product
     * @throws Exception
     */

    public function buyProduct(Product $product){
        if($product->getCost() > $this->getMoney()){
            throw new Exception($this->getName() ." can't afford ". $product->getName() . PHP_EOL);
        }
        $this->money -= $product->getCost();
        $this->products[] = $product;

        echo "{$this->getName()} bought {$product->getName()} \n";

    }

    public function __toString()
    {
        if(count($this->products) === 0){
            return "{$this->getName()} - Nothing bought \n";
        }

        $output = $this->getName()." - ";
        $output .=  implode(',' ,
            array_map(function (Product $product){
                return $product->getName();
            }, $this->products)
        );

        return $output.PHP_EOL;
    }

}

$personDate = preg_split('/[=;]/', readline());

$people = [];
for ($i = 0; $i < count($personDate) - 1; $i += 2) {
    try {
        $name = $personDate[$i];
        $money = floatval($personDate[$i + 1]);
        $people[$name] = new Person02($name, $money);
    } catch (Exception $ex) {
        echo $ex->getMessage();
        return;
    }
}

$productDate = preg_split('/[=;]/', readline(), -1, PREG_SPLIT_NO_EMPTY);

$products = [];

for($i = 0; $i < count($personDate)-1; $i+=2){
    $name = $productDate[$i];
    $cost = floatval($productDate[$i + 1]);

    $products[$name] = new Product($name, $cost);
}
$line = readline();
while ($line != "END"){

    $date = explode(' ', $line);

    $personName = $date[0];
    $productName = $date[1];

    try {
        $people[$personName]->buyProduct($products[$productName]);
    }
    catch (Exception $ex){
        echo $ex->getMessage();
    }
    $line = readline();
}

foreach ($people as $person){
    echo $person;
}