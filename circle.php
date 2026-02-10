<?php

class Circle {
    private $radius;

    public function __construct(int $radius) {
        $this->radius = $radius;
    }

    public function getArea() {
        return 3.14 * ($this->radius*$this->radius);
    }
}

$circle = new circle(7);

echo 'Area: ' . $circle->getArea();