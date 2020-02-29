<?php 

function HailstoneNumbers($N) 
{ 
    static $c; 
  
    echo $N." "; 
  
    if ($N == 1 && $c == 0)  
    { 
  
       
        return $c; 
    }  
    else if ($N == 1 && $c != 0)  
    { 
  
       
        $c++; 
        return $c; 
    }  
    else if ($N % 2 == 0) 
    { 
  
       
        $c++; 
        HailstoneNumbers((int)($N / 2)); 
    }  
    else if ($N % 2 != 0)  
    { 
  
       
        $c++; 
        HailstoneNumbers(3 * $N + 1); 
    } 
    return $c; 
} 
  

$N = 13; 
  

$x = HailstoneNumbers($N); 
  
echo "\nNumber of Steps: ". $x; 
 
?> 