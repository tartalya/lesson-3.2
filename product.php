<?php

abstract class Product
    {

    protected $color;
    protected $price;
    protected $category;
    protected $size;
    protected $madein;
    protected $discount; // процент на входе
    protected $model;
    protected $brandName;
    protected $deliveryPrice;
    protected $weight;
    protected $discountPrice = 0; // сумма в валюте после калькуляции

    public function __construct($model, $color, $price, $size, $category = 'other products', $madein = 'china', $discount = 0, $brandname = 'noname', $delivery = 500, $weight)
        {

        $this->model = $model;
        $this->color = $color;
        $this->price = $price;
        $this->category = $category;
        $this->size = $size;
        $this->madein = $madein;
        $this->discount = $discount;
        $this->deliveryPrice = $delivery; // предположим что средняя цена доставки высчитана в 500 рублей, а при покупке свыше определенной суммы будет уменьшаться
        $this->brandName = $brandname;
        $this->weight = $weight;
        
        
        
        }

    function getDeliveryPrice()
        {
        return $this->deliveryPrice;
        }

    function setDeliveryPrice($deliveryPrice)
        {
        $this->deliveryPrice = $deliveryPrice;
        return $this;
        }

    function getBrandName()
        {
        return $this->brandName;
        }

    function setBrandName($brandName)
        {
        $this->brandName = $brandName;
        return $this;
        }

    function getColor()
        {
        return $this->color;
        }

    function getCategory()
        {
        return $this->category;
        }

    function getSize()
        {
        return $this->size;
        }

    function getMadein()
        {
        return $this->madein;
        }

    function getDiscount()
        {
        return $this->discount;
        }

    function getModel()
        {
        return $this->model;
        }

    function setColor($color)
        {
        $this->color = $color;
        return $this;
        }

    function setCategory($category)
        {
        $this->category = $category;
        return $this;
        }

    function setSize($size)
        {
        $this->size = $size;
        return $this;
        }

    function setMadein($madein)
        {
        $this->madein = $madein;
        return $this;
        }

    function setDiscount($discount)
        {
        $this->discount = $discount;
        return $this;
        }

    function setModel($model)
        {
        $this->model = $model;
        return $this;
        }

    public function getPrice()
        {


        return $this->price;
        }

    public function setPrice($price)
        {


        if ($price <= 0) {

            echo 'Неправильная цена, вы наверно ошиблись при вводе';
            return false;
        } else {
            $this->price = $price;  // переопределяем цену установленную при создании экземпляра

            return $this;
        }
        }

        
        public function CalculateDiscount()
            {
            
            $this->discountPrice = $price * ($discount / 100);
        
        if ($this->discountPrice > 300) {
            
            $this->deliveryPrice = 250;
            
        }
            
            return $this->discountPrice;
            }
            
            public function CalculateFinalPrice()
                {
                
                $finalPrice = $this->price - $this->CalculateDiscount() + $this->deliveryPrice;
                
                }
    }

class PowerSupply extends Product
    {

    protected $power;
    protected $formFactor;
    protected $sataCablesCount;
    
    

    function getPower()
        {
        return $this->power;
        }

    function getFormFactor()
        {
        return $this->formFactor;
        }

    function getSataCablesCount()
        {
        return $this->sataCablesCount;
        }

    function setPower($power)
        {
        $this->power = $power;
        return $this;
        }

    function setFormFactor($formFactor)
        {
        $this->formFactor = $formFactor;
        return $this;
        }

    function setSataCablesCount($sataCablesCount)
        {
        $this->sataCablesCount = $sataCablesCount;
        return $this;
        }

        public function CalculateFinalPrice()
            {
            
            $tmp = parent::CalculateFinalPrice();
            
            if ($this->weight < 10) {
                
                return $tmp - $this->discountPrice; //отнимаем скидку по условию в блоках питания
                
            }
            
            else {
                
                return parent::CalculateFinalPrice();
            }
            
            }
    }

class SmartPhone extends Product
    {

    protected $ScreenDimension;
    protected $ram;
    protected $rom;
    protected $clockSpeed;

    function getScreenDimension()
        {
        return $this->ScreenDimension;
        }

    function getRam()
        {
        return $this->ram;
        }

    function getRom()
        {
        return $this->rom;
        }

    function getClockSpeed()
        {
        return $this->clockSpeed;
        }

    function setScreenDimension($ScreenDimension)
        {
        $this->ScreenDimension = $ScreenDimension;
        return $this;
        }

    function setRam($ram)
        {
        $this->ram = $ram;
        return $this;
        }

    function setRom($rom)
        {
        $this->rom = $rom;
        return $this;
        }

    function setClockSpeed($clockSpeed)
        {
        $this->clockSpeed = $clockSpeed;
        return $this;
        }

        
    }

    
    class CpuCooler extends Product
        {
        
        protected $socket;
        protected $speed;
        
        function getSocket()
            {
            return $this->socket;
            }

        function getSpeed()
            {
            return $this->speed;
            }

        function setSocket($socket)
            {
            $this->socket = $socket;
            return $this;
            }

        function setSpeed($speed)
            {
            $this->speed = $speed;
            return $this;
            }

                
        
        }