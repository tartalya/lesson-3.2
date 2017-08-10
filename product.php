<?php

abstract class Product
    {

    private $color;
    private $price;
    private $category;
    private $size;
    private $madein;
    private $discount; // процент на входе
    private $model;
    private $brandName;
    private $deliveryPrice;
    private $weight;
    private $discountPrice = 0; // сумма в валюте после калькуляции

    public function __construct($model, $color, $price, $size, $weight, $category = 'other products', $madein = 'china', $discount = 0, $brandname = 'noname', $delivery = 500)
        {

        $this->model = $model;
        $this->color = $color;
        $this->price = $price;
        $this->category = $category;
        $this->size = $size;
        $this->madein = $madein;
        $this->discount = $discount;
        $this->deliveryPrice = $delivery; // предположим что средняя цена доставки высчитана в 500 рублей, а при достижении скидки более 300 рублей будем менять на 250
        $this->brandName = $brandname;
        $this->weight = $weight;
        }

    function getWeight()
        {
        return $this->weight;
        }

    function getDiscountPrice()
        {
        return $this->discountPrice;
        }

    function setWeight($weight)
        {
        $this->weight = $weight;
        return $this;
        }

    function setDiscountPrice($discountPrice)
        {
        $this->discountPrice = intval($discountPrice); // приводим к инту, зачем нам скидки с копейками, в принципе тоже самое можно было бы сделать и для price
        return $this;
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
            $this->setPrice($price);  // переопределяем цену установленную при создании экземпляра

            return $this;
        }
        }

    public function CalculateDiscount()
        {

        $this->setDiscountPrice(($this->getPrice() * $this->getDiscount()) / 100);

        if ($this->getDiscountPrice() > 300) {

            $this->setDeliveryPrice(250);
        }

        return $this->getDiscountPrice();
        }

    public function CalculateFinalPrice()
        {

        $finalPrice = $this->getPrice() - $this->CalculateDiscount() + $this->getDeliveryPrice();

        //echo $this->getPrice() . ' цена <br>';
        //echo $this->CalculateDiscount() . ' скидка в валюте <br>';
        //echo $this->getDeliveryPrice() . ' стоимость доставки <br>';

        return $finalPrice;
        }

    }

class PowerSupply extends Product
    {

    private $power;
    private $formFactor;
    private $sataCablesCount;

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

        if ($this->getWeight() < 10) {
            $this->setDiscount(0);
        }

        $finalPrice = parent::CalculateFinalPrice();

        return $finalPrice;
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
