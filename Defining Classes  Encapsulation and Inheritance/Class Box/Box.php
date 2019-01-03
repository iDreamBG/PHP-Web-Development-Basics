<?php

class Box
{
    /**
     * @var float
     */
    private $length;

    /**
     * @var float
     */
    private $width;

    /**
     * @var float
     */
    private $height;

    /**
     * @param float $length
     */
    public function setLength(float $length): void
    {
        $this->length = $length;
    }

    /**
     * @param float $width
     */
    public function setWidth(float $width): void
    {
        $this->width = $width;
    }

    /**
     * @param float $height
     */
    public function setHeight(float $height): void
    {
        $this->height = $height;
    }

    /**
     * Box constructor.
     * @param float $length
     * @param float $width
     * @param float $height
     */
    public function __construct(float $length, float $width, float $height)
    {
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * @return float
     */
    public function getLength(): float
    {
        return $this->length;
    }

    /**
     * @return float
     */
    public function getWidth(): float
    {
        return $this->width;
    }


    /**
     * @return float
     */
    public function getHeight(): float
    {
        return $this->height;
    }


    public function Volume()
    {
        $result = $this->getLength() * $this->getHeight() * $this->getWidth();
        return $result;
    }

    public function LSA()
    {
        $result = (2 * $this->getLength() * $this->getHeight())
            + (2 * $this->getWidth() * $this->getHeight());
        return $result;
    }

    public function SA()
    {
        $result = (2 * $this->getLength() * $this->getWidth())
            + (2 * $this->getLength() * $this->getHeight())
            + (2 * $this->getWidth() * $this->getHeight());
        return $result;
    }

    public function output()
    {
        $Volume = number_format($this->Volume(), 2, '.', '');
        $LSA = number_format($this->LSA(), 2, '.', '');
        $SA = number_format($this->SA(), 2, '.', '');

        return "Surface Area - $SA\nLateral Surface Area - $LSA\nVolume - $Volume";
    }
}

$l = floatval(readline());
$w = floatval(readline());
$h = floatval(readline());

if ($w <= 0) {
    echo 'Width cannot be zero or negative.';
    die();
}
if ($h <= 0) {
    echo 'Height cannot be zero or negative.';
    die();
}
if ($l <= 0) {
    echo 'Length cannot be zero or negative.';
    die();
}

$result = new Box($l, $w, $h);
$output = $result->output();
echo $output;
