<?php

class Tv
    {

    protected $color = 'black'; //в большистве случаев, так что примем за дефолт
    protected $screenSize;
    protected $currentShow;
    protected $channel;
    protected $model;

    function getColor()
        {
        return $this->color;
        }

    function getScreenSize()
        {
        return $this->screenSize;
        }

    function getCurrentShow()
        {
        return $this->currentShow;
        }

    function getChannel()
        {
        return $this->channel;
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

    function setScreenSize($screenSize)
        {
        $this->screenSize = $screenSize;
        return $this;
        }

    function setCurrentShow($currentShow)
        {
        $this->currentShow = $currentShow;
        return $this;
        }

    function setChannel($channel)
        {
        $this->channel = $channel;
        return $this;
        }

    function setModel($model)
        {
        $this->model = $model;
        return $this;
        }

   

    }
    
    class SmartTv extends Tv
        {
        
        protected $haveEthernet = true;
        protected $haveWifi; // на первых могло и не быть, дефолт задавать не будем
        
        function getHaveEthernet()
            {
            return $this->haveEthernet;
            }

        function getHaveWifi()
            {
            return $this->haveWifi;
            }

        function setHaveEthernet($haveEthernet)
            {
            $this->haveEthernet = $haveEthernet;
            return $this;
            }

        function setHaveWifi($haveWifi)
            {
            $this->haveWifi = $haveWifi;
            return $this;
            }

                
        
        
        }
