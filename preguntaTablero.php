<?php
echo "<table border='10' cellspacing='0' cellpadding='0' width='270px' style='border-color: black'>";
for($i = 1; $i<= 8; $i++){
    echo "<tr style='height: 30px'>";
    for($j = 1; $j<= 8; $j++){
       if($i%2==0){
           if($j%2==0){
               echo "<td>&nbsp;</td>";
           }else{
               echo "<td style='background-color: black'>&nbsp;</td>";
           }
       }else{
           if($j%2==0){
               echo "<td style='background-color: black'>&nbsp;</td>";
           }else{
               echo "<td>&nbsp;</td>";
           }
       }
    }
    echo "</tr>";
}
echo "<table>";