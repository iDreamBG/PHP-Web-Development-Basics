<?php

class Book
{
    /**
     * @var string
     */
    private $author;

    /**
     * @var string
     */
    private $title;

    /**
     * @var float
     */
    private $price;

    /**
     * Book constructor.
     * @param string $author
     * @param string $title
     * @param float $price
     * @throws Exception
     */
    public function __construct(string $author, string $title, float $price)
    {
        $this->setAuthor($author);
        $this->setTitle($title);
        $this->setPrice($price);
    }


    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @param string $author
     * @throws Exception
     */
    private function setAuthor(string $author): void
    {
        if(is_numeric(explode(" ", $author)[1][0])){
            throw new Exception('Author not valid!');
        }
            $this->author = $author;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @throws Exception
     */
    private function setTitle(string $title): void
    {
        if(strlen($title) < 3){
            throw new Exception('Title not valid!');
        }
        $this->title = $title;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @throws
     */
    private function setPrice(float $price): void
    {
        if($price <= 0){
            throw new Exception('Price not valid!');
        }
        $this->price = $price;
    }
}