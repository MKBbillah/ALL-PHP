<?php

//$list = array("f","r","p","t","z","d","a");

//$list = array("20","10","1","4");

//sort($list);
//rsort($list);
//foreach($list as $single){
  //  echo $single. "</br>";
//}


$person_infos = array(
    'person_name' => 'Mukarram',
    'person_cell' =>  '01406440604',
    'person_address' => 'Khulna',
    "a"              => "a",
    "z"              => "z",
);

asort($person_infos);
foreach($person_infos as $key => $value){
    echo $value."</br>";
}


?>