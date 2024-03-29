<?php


$person_infos= array("Mukarram", "01406440604", "Khulna");

//indexed


var_dump($person_infos);
//print_r($person_infos);
//echo $person_infos[0]."</br>";
//echo $person_infos[1]."</br>";
//echo $person_infos[2]."</br>";

$count = count($person_infos);

foreach($person_infos as $single_value){
    echo $single_value."</br>";
}

?>

<?php
//associative

$person_infos= array("Mukarram", "01406440604", "Khulna",5000,"adf");

$person_infos = array(
    //"key" => "value"
    "person_name" => "Mukarram",
    "person_number" => "01406440604",
    "person_address"=> "Khulna"
);

var_dump($person_infos);

echo count($person_infos);

echo $person_infos['person_name'];
echo $person_infos['person_cell'];

foreach($person_infos as $single_key =>$single_value){
    echo $single_key."";
}

?>

<?php
//multidimensional

$person_infos= array(
    "name" => "Mukarram",
    "address" => array(
        "house_no" => "10",
        "road_number" => "2",
        "Area" => array(
            "one" =>10
        ),
    ),
);

var_dump($person_infos);

echo $person_infos['address']['house_no']['one'];

?>