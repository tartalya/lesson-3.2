<?php

abstract class Product
    {

    protected $color;
    protected $price;
    protected $category;
    protected $size;
    protected $madein;
    protected $discount; // и тем не менее оставим ее 0, так как скидка на все 10 процентов по умолчанию не частая практика.
    protected $model;
    protected $brandName;
    protected $deliveryPrice;
    protected $weight;

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
        
        
        
        
        }