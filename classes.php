<?php

class Person {
    public $name;
    public $age;
    public $gender;

    public function setName($name) {
        $this->name = $name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function setGender($gender) {
        $this->gender = $gender;
    }

    public function getName() {
        $this->name;
    }

}