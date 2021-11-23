<?php 

 $a=1;

while ($a <= 50) {
    if($a % 3 == 0 && $a % 5 == 0)
    {
        echo 'FooBar, '; 
    }
    elseif($a % 3 == 0 )
    { 
        echo 'Foo, ';  
    }
    elseif($a % 5 == 0 )
    {
        echo 'Bar, ';
    }
    else
    {
        echo ''.$a.' ,';
    }
  
    $a++;
}