<?php

abstract class WritingAccessories
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

    class BallPen extends WritingAccessories 
        {
        
        // not need any more
        
        }
        
    class Pencil extends WritingAccessories 
        {
        
            // так же не требуется дополнения
        
        }