<?php
require_once 'animal.php';

class Frog extends Animal {
    public function __construct($nama) {
        parent::__construct($nama);
    }

    public function melompat() {
        return "Hop Hop";
    }
}
?>
