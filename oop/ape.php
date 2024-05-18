<?php
require_once 'animal.php';

class Ape extends Animal {
    public function __construct($nama) {
        parent::__construct($nama);
        $this->kaki = 2;
    }

    public function berteriak() {
        return "Auooo";
    }
}
?>
