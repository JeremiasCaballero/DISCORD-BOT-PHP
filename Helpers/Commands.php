<?php

$commands = [
    '!verify' => checkStringAfterSpace(),
    '!pene' => 'tu vieja',
];

$stringAfterSpace = [];

public function checkStringAfterSpace($command)
{
    $options = ['!verify',]; // agregar mas comando aca
    $space = ' ';

    $enterCommand = strstr($command);

}