<?php

interface WrAccessories
    {

    function getFullness();

    function setFullness($fullness);

    function getColor();

    function getWriteColor();

    public function write($text);

    public function showText();

    public function checkAmount();
    }

abstract class WritingAccessories implements WrAccessories
    {

    protected $color;
    protected $fullness = 100; // примем как 100 процентов 
    protected $writeColor;
    protected $text;

    public function __construct($color = 'black', $writeColor = 'blue')
        {

        $this->color = $color;
        $this->writeColor = $writeColor;
        }

    function getFullness()
        {
        return $this->fullness;
        }

    function setFullness($fullness)
        {
        $this->fullness = $fullness;
        return $this;
        }

    function getColor()
        {
        return $this->color;
        }

    function getWriteColor()
        {
        return $this->writeColor;
        }

    public function write($text)
        {

        $this->fullness = round($this->fullness - strlen($text) / 100); //Предположим что расход 1 процент на 100 символов
        $this->text = $text . '<br>';

        echo $this->showText();

        return true;
        }

    public function showText()
        {

        return $this->text;
        }

    public function checkAmount()
        {

        return $this->fullness;
        }

    }

class BallPen extends WritingAccessories implements WrAccessories
    {
    // not need any more
    }

class Pencil extends WritingAccessories implements WrAccessories
    {
    // так же не требуется дополнения
    }
