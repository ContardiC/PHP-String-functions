<?php
/**
 * User: carlocontardi
 * Date: 25/10/18
 * Time: 16:43
 */

// Visualizzare lunghezza di  una stringa
$stringa = 'Stringa di esempio';
echo strlen($stringa); // restituirà 18

// Restituire una porzione di una stringa
$data = '01/02/2016';
$giorno = substr($data, 0, 2); // 01
$mese   = substr($data, 3, 2); // 02
$anno   = substr($data, 6);    // 2016

// Cercare una porzione di testo all’interno di una stringa
$stringa = 'La mia data di nascita è il 07 dicembre 1986';
echo strpos($stringa, '1986'); // restituirà 41 che è la posizione in cui inizia la stringa 1986
echo strpos($stringa, '1987'); // restituirà false perché non ci sono occorrenze
$stringa = 'Simone è nato nel 1986';
if (strpos($stringa, 'Simone') !== false) {
    echo 'Il tuo nome è Simone';
}

// Invertire una stringa
echo strrev("Hello world!"); // stamperà "!dlrow olleH"

// Sostituire tutte le occorrenze di una stringa
$stringa = 'Il mio nome è Simone';
echo str_replace('Simone', 'Luca', $stringa); // stamperà "Il mio nome è Luca"
$stringhe = array(
    'Il mio nome è Simone',
    'Simone è nato nel 1986'
);
str_replace('Simone', 'Luca', $stringhe); // sostituirà tutte le occorrenze di Simone con Luca all'interno dell'array

// Suddividere una stringa
$data = '01/02/2016';
$elementi = explode('/', $data);
// conterrà
// Array
// (
//  [0] => 01
//  [1] => 02
//  [2] => 2016
// )

// trasformare in una data l’array precedente
$data = implode('/', $elementi); //conterrà '01/02/2016'

// Modificare le maiuscole/minuscole
$stringa = 'questa stringa contiene tutti caratteri minuscoli';
echo strtoupper($stringa); // stamperà QUESTA STRINGA CONTIENE TUTTI CARATTERI MINUSCOLI
echo ucfirst($stringa); // stamperà Questa stringa contiene tutti caratteri minuscoli
echo ucwords($stringa); // stamperà Questa Stringa Contiene Tutti Caratteri Minuscoli

// Rimuovere spazi all’inizio o alla fine di una stringa
$stringa = ' ciao ';
echo trim($stringa);  // stamperà 'ciao' senza spazi iniziali e finali
echo ltrim($stringa); // stamperà 'ciao ' senza spazi iniziali
echo rtrim($stringa); // stamperà ' ciao' senza spazi finali