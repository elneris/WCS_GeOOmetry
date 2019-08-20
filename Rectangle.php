<?php


class Rectangle
{
    /*
     * @var int
     */
    private $width;

    /*
     * @var int
     */
    private $height;

    /*
     * @var string
     */
    private $color = 'black';

    public function __construct(int $width, int $height)
    {
        $this->setWidth($width);
        $this->setHeight($height);
    }

    /**
     * @return int
     */
    public function getWidth():int
    {
        return $this->width;
    }

    /**
     * @param int $width
     * @return Rectangle
     */
    public function setWidth(int $width):Rectangle
    {
        $this->width = abs($width);
        return $this;
    }

    /**
     * @return int
     */
    public function getHeight():int
    {
        return $this->height;
    }

    /**
     * @param int $height
     * @return Rectangle
     */
    public function setHeight(int $height):Rectangle
    {
        $this->height = abs($height);
        return $this;
    }

    /**
     * @return string
     */
    public function getColor():string
    {
        return $this->color;
    }

    /**
     * @param string $color
     * @return Rectangle
     */
    public function setColor(string $color):Rectangle
    {
        $this->color = $color;
        return $this;
    }

    public function __toString()
    {
        return '<div style="width:' . $this->width . 'px;height:' . $this->height . 'px; background:' . $this->color . ';"></div>';
    }
}
