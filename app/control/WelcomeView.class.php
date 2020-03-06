<?php

use Adianti\Widget\Base\TElement;
use Adianti\Widget\Form\TEntry;

class WelcomeView extends TPage
{
    public function __construct()
    {
        parent::__construct();
        
        //collapse script
        TScript::create('
        function getLocation() {
          if ("geolocation" in navigator){             
            navigator.geolocation.getCurrentPosition(function(position){ 
                $("#coords").html("Latitude : "+position.coords.latitude+" </br>Longitude :"+ position.coords.longitude);
                $("[name=latitude]").val(position.coords.latitude);
                $("[name=longitude]").val(position.coords.longitude);
              });
          }else{
            console.log("O navegador não suporta geolocalização!");
          }
        }
');

        $latidude = new TEntry('latitude');
        $longitude = new TEntry('longitude');

        $p = new TElement('p');
        $p->id = 'coords';

        $div = new TElement('div');
        $div->add($p);
        $div->add($latidude);
        $div->add($longitude);

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
        $frame->add($div);
        
        $vbox->add($frame);
        
        parent::add($vbox);
    }
}
