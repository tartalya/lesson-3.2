<?php

interface CarInterface
    {

    public function throttle($speed);

    public function __construct($color, $model);

    public function getWheels();

    public function setWheels($wheels);

    public function getModel();

    public function getSpeed();
    }

interface TankInterface extends CarInterface
    {

    function getCaterpillar();

    function setCaterpillar($caterpillar);
    }

// Но по мне таки абстрактным классам интерфейсы ну нафиг не нуно


abstract class Car implements CarInterface
    {

    public $color;
    protected $maxSpeed;
    protected $wheels = 4;
    protected $speed = 0;
    protected $model;

    public function __construct($color, $model)
        {

        $this->model = $model;
        $this->color = $color;
        }

    public function getWheels()
        {
        return $this->wheels;
        }

    public function setWheels($wheels)
        {
        $this->wheels = $wheels;
        return $this;
        }

    public function getModel()
        {

        return $this->model;
        }

    public function throttle($speed)
        {

        $this->speed = $speed;

        return $this;
        }

    public function getSpeed()
        {

        return $this->speed;
        }

    }

class AutoMobile extends Car implements CarInterface
    {
    // Полностью наследуем все методы и свойства ибо присущи все и даже без переодпределений
    }

class Traktor extends Car implements CarInterface
    {
    //абсолютно так же наследуем все без изменений
    }

class Tank extends Car implements TankInterface
    {

    protected $caterpillar = 2; // Добавляем гусиницы
    protected $wheels = 14; // Ведущих конечно меньше, но тут не суть, переоределяем число колес

    function getCaterpillar()
        {
        return $this->caterpillar;
        }

    function setCaterpillar($caterpillar)
        {
        $this->caterpillar = $caterpillar;
        return $this;
        }

    }
