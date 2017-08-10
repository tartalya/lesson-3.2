<?php

interface TvInterface 
    {
    function getColor();
    function getScreenSize();
    function getCurrentShow();
    function getChannel();
    function getModel();
    function setColor($color);
    function setScreenSize($screenSize);
    function setCurrentShow($currentShow);
    function setChannel($channel);
    function setModel($model);
    
    }

interface SmartTvInterface extends TvInterface
    {
    
    function getHaveEthernet();
    function getHaveWifi();
    function setHaveEthernet($haveEthernet);
    function setHaveWifi($haveWifi);
    
    }
    
    
    
class Tv implements TvInterface
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
    
    class SmartTv extends Tv implements SmartTvInterface
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
