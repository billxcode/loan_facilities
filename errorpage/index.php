<?php
$i=1;
 $b=$i;
for($i=1;$i<=5;$i++){

    for($k=round(5/2);$k>$i;$k--){
     echo "*";
    }
    
    for($l=round(5/2);$l<$i;$l++){
     echo "*";   
    }
    
    for($a=1;$a<=$b;$a++){
        echo "o";
    }
    
    echo "<br>";
    
    
}


?>