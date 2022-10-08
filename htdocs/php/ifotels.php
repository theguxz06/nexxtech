<?php

//if or else

$valorA=10;
 
if($valorA ==10) {
    echo "Es igual a 10";
} else { 
    echo "No es igual a 10";
}
?>

<?php
//while or do-while

$i = 0;
do {
    echo $i++;
} while ($i <= 10);

// while($i <= 10){
//     echo $i++ ;
// }

?>

<?php
// for or foreach 

$arr = array(1,2,3,4);
// for($i=0; $i<4; $i++) {
//     echo $arr[$i];
// }

foreach($arr as $value) {
    echo $value;
}
?>