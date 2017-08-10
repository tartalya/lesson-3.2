<?php

// Придется воссоздать настоящую утку, а не больничную (

interface BirdInterface
    {

    public function __construct($color, $sound);

    public function fly();

    public function makeSound($sound);
    }

class Bird implements BirdInterface
    {

    protected $color;
    protected $sound;

    public function __construct($color, $sound = '')
        {

        $this->color = $color;
        $this->sound = $sound;
        }

    public function fly()
        {

        echo 'Разгоняемся, машем крыльями и взлетаем';

        return true;
        }

    public function makeSound($sound)
        {
        $this->sound = $sound;
        echo 'издает звук ' . $this->sound;

        return true;
        }

    }

class Duck extends Bird implements BirdInterface
    {
    // Заимствуем в полном обьеме без изменений
    }

class Chicken extends Bird implements BirdInterface
    {

    public function fly()
        {
        // переопределим, курицы не умеет летать и тогда метод можно сделать пустым и вернуть false

        echo 'Разгоняемся, машем крыльями и никак ';
        return false;
        }

    }
