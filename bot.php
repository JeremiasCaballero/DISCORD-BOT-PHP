<?php

use Discord\Discord;
use Discord\webSockets\Event;
use Discord\webSockets\Intents;

require_once('./vendor/autoload.php');



$key = 'OTE5NzA1ODk4MTExMzU2OTM4.YbZs3Q.DdOS4pl9-gPMs7M7XDPoRkbDTuo';

$discord = new Discord(['token'=> $key]);
$discord->on('ready', function(Discord $discord){
    echo 'bot is ready';
    $discord->on('message', function($message, $discord){
        $content = $message->content;
        if(strpos($content, '!') === false) return;
        echo $content;
        if($content == '!saludo'){
            $message->reply('@everyone Hola aguante php');
        }

        if($content == '!search')
        {

        }
        if($content == '!information'){
            $message->reply('Mi inteligencia artificial es peor que un bucle cimoliano y un cuadruple for del facha, por favor no me pdias mucho.');
        }
        if($content == '!bot'){
            $message->reply(
                'Fui creado el 12/12/2021 por Turquito, me considero un bot totalmente turco, mi version de php es 7.4 y utilizo web-sockets para comunicarme!');
        }
    });
});
$discord->run();

?>