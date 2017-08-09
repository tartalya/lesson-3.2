<?php




abstract class Car
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
        
    function getWheels()
        {
        return $this->wheels;
        }

    function setWheels($wheels)
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

class AutoMobile extends Car
    {
    
    // Полностью наследуем все методы и свойства ибо присущи все и даже без переодпределений
    
    }
    
class Traktor extends Car
    {
    
    //абсолютно так же наследуем все без изменений
    
    }
    
class Tank extends Car
    {
    
    protected $caterpillar = 2; // Добавляем гусиницы
    protected $wheels = 14; // Ведущих конечно меньше, но тут не суть
    
    // Методы не трогаем
    
    
    }
    
    
    
    
    