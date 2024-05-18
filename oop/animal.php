<?php
class Animal {
    public $nama;
    public $kaki;
    public $berdarah_dingin;

    public function __construct($nama) {
        $this->nama = $nama;
        $this->kaki = 4;
        $this->berdarah_dingin = "No";
    }

    public function get_nama() {
        return $this->nama;
    }

    public function get_kaki() {
        return $this->kaki;
    }

    public function get_berdarah_dingin() {
        return $this->berdarah_dingin;
    }
}
?>
