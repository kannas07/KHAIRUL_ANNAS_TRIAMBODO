<?php 

function drawLine($n) 
{   
    for ($i = 0; $i < $n; $i++) 
    { 
          for($j = 0; $j <= $i; $j++ ) 
        { 
              
            // Printing stars
            echo "&nbsp";
            echo "&nbsp";
            echo "&nbsp";
            echo "&nbsp";
            echo "&nbsp";
            echo "&nbsp"; 
            if ($j == $i){
            echo "*"; 
            }
        } 
  
        echo "<br>"; 
        echo "<br>"; 
    } 
} 
   
    drawLine(8); 
?>