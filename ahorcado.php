<?php

define("MAX_ATTEMPS",6);
$posibble_words = ["Alemania","México","Rusia","Francia","Perú","Ucrania"];

echo "Juego del ahorcado! \n\n";


//iniciamos el juego

$choosen_word = $posibble_words[rand(0,5)];
$choosen_word = strtolower($choosen_word);
$word_length =  strlen($choosen_word);
$discover_letters = str_pad("",$word_length,"_");
$attemps = 0;

echo "Palabra de $word_length letras \n\n";
echo $discover_letters . "\n\n";

//Pedimos al usuario que escriba
$player_letter = readline("Ingresa una letra: ");
$player_letter = strtolower($player_letter);

echo "\n";