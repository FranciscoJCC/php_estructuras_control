<?php


function get_time(){
    return date("h:i:s a",time());
}

echo "Hola, ¿me podrías decir qué hora es? \n";
echo "Claro, son las " . get_time();

echo "\n";