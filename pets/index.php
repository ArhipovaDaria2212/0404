<?php
    header('Content-type: text/html; charset=utf-8');
    require_once 'cat.php';
    require_once 'dog.php';
    require_once 'toy.php';

    $toy1 = new Toy('Игрушечной мышкой');
    $toy2 = new Toy('Мячиком');
    
    $pet1 = new Dog('Скай', 'йоркширский терьер', $toy2);
    $pet2 = new Cat('Катейка', 'кошка', $toy1);

    $pet1->show();
    $pet1->voice();
    $pet1->game();

    
    $pet2->show();
    $pet2->voice();
    $pet2->game();
?>