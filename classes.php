<?php

class Person {
    // Properties
    public $name;
    public $age;

    // Set name method
    public function setName($newName) {
        $this->name = $newName;
    }

    // Set Age method
    public function setAge($newAge) {
        $this->age = $newAge;
    }

    // Get name method
    public function getName() {
        echo $this->name;
    }

    // Get age method
    public function getAge() {
        echo $this->age;
    }

}

// 
