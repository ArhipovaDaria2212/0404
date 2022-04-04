<?php 
class Human {
    private $name;
    private $surname;
    private $patronymic;

    public function __construct($n, $s, $p) {
        $this->name = $n;
        $this->surname = $s;
        $this->patronymic = $p;
    }

    public function infa() {
        echo sprintf('Привет, я %s %s %s ', $this->name, $this->surname, $this->patronymic);    
    }

}
?>