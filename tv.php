<?php

class Tv
    {

    protected $color = 'black'; //в большистве случаев, так что примем за дефолт
    protected $screenSize;
    protected $currentShow;
    protected $channel;
    protected $model;

    public function show($channel)
        {

        // $this->currentShow = getChannelName($channel, time()) {} а тут можно сходить куданнибудь в интернет за программой телепередач
        // и узнать что там сейчас показывают
        $this->channel = $channel;
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
