<?php

class Rectangle {
    private $length;
    private $width;

    public function __construct(int $length, int $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function getArea() {
        return $this->length * $this->width;
    }

    public function getPerimeter() {
        return 2*$this->length + 2*$this->width;
    }
}

$rectangle = new Rectangle(25, 10);

echo 'Area: ' . $rectangle->getArea();
echo '<br>';
echo 'Perimeter: ' . $rectangle->getPerimeter();