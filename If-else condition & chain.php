<?php
$age = 10;
if ($age>=10){


echo "You go to school";
}

$current_Day = date("D");

if($current_Day=="Fri"){
    echo "This is Friday. 10% Discount";
}
elseif($current_Day=="sat"){
    echo "This is saturday ans get 2% Discount";
}

elseif($current_Day=="sun"){
    echo "This is sunday ans get 5% Discount";
}

else{ echo "Normally get 7% Discount";
}

?>
