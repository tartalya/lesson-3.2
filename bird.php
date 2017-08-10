<?php

// Придется воссоздать настоящую утку, а не больничную (

interface BirdInterface
    {

    public function __construct($color, $sound);

    public function fly();

    public function getSound();
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

        return 'Разгоняемся, машем крыльями и взлетаем';
        }

    public function getSound()
        {

        return 'издает звук ' . $this->sound;
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

        return 'Разгоняемся, машем крыльями и никак ';
        }

    }
