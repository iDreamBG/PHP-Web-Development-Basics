<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 16.10.2018 г.
 * Time: 15:28
 */

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
            throw new Exception("Money cannot be negative number");
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

        echo "{$this->getName()} bought {$product->getName()}. \n";

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