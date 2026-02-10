<?php

class Beverage {
    public function stir() {
        echo 'Stir method of Beverage';
    }

    public function mix() {
        echo 'Mix method of Beverage';
    }

}

class Vodka extends Beverage {
    public function stir() {
        echo 'Stir method of Vodka';
    }

    public function mix() {
        echo 'Mix method of Vodak';
    }
}

class Martini extends Beverage {
    public function stir() {
        echo 'Stir method of Martini';
    }

    public function mix() {
        echo 'Mix method of Martini';
    }
}