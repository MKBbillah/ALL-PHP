<?php

//$post=20;
//$init=0;
//while($init<=$post){
 // echo "This is my Post".$init."</br>";
  //$init++;
//}

$info =array("Mukarram","01406440604", "01");

$count_array_value = count($info);


//var_dump($info);
for($i=0;$i<$count_array_value; $i++){
  echo $i."</br>";
  echo $info[$i]."</br>";
}
/*
echo $count_array_value;
exit();

$post=20;
$init=0;
for($init=0;$init<=$post;$init++){
  echo "ami Gurichi ".$init."bar</br>";
}*/


?>
