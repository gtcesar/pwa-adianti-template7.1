<?php

use Adianti\Widget\Base\TElement;

class WelcomeView extends TPage
{
    public function __construct()
    {
        parent::__construct();
        
        //collapse script
        TScript::create('
        var x = document.getElementById("coords");
        
        function getLocation() {
          if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
          } else { 
            x.innerHTML = "Geolocation is not supported by this browser.";
          }
        }
        
        function showPosition(position) {
          x.innerHTML = "Latitude: " + position.coords.latitude + 
          "<br>Longitude: " + position.coords.longitude;
        }
');


        $p = new TElement('p');
        $p->id = 'coords';


        $vbox = new TVBox;       
        
        $botao = new TButton('botao');
        $botao->setImage('fa:map-marker green');        
        $botao->setLabel('Minhas coordenadas');        
        $botao->addFunction("getLocation()");
        
        $hbox = new THBox;
        $hbox->addRowSet( $botao );
        $frame = new TFrame;
        $frame->setLegend('Clique para obter as suas coordenadas');
        $frame->add($hbox);
        $frame->add($p);
        
        $vbox->add($frame);
        
        parent::add($vbox);
    }
}
