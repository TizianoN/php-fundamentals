<?php 

$fruits = [
  "banana",     // indice 0
  "pera",       // indice 1
  "mela"        // indice 2
];

$person = [
  "first_name" => "Tiziano",
  "last_name" => "Nic"
];

// array_key_exists(key, array) - restituisce true se esiste la chiave nell'array, altrimenti false
// var_dump(array_key_exists(5, $fruits));
// var_dump(array_key_exists("first_name", $person));

// in_array(value, array) - restituisce true se il valore è presente nell’array, altrimenti false
// var_dump(in_array("mango", $fruits));
// var_dump(in_array("Tiziano", $person));

// array_keys(array) - restituisce tutte le chiavi dell’array
// var_dump(array_keys($fruits));
// var_dump(array_keys($person));

// array_merge(array1, array2 …) - unisce due o più array
// var_dump(array_merge($person, $fruits));

// array_search(value, array) - cerca il valore all’interno di un array e restituisce la chiave 
// della prima occorrenza trovata; se il valore non è presente restituisce false

var_dump(array_search("mela", $fruits));


