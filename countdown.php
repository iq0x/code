<?php
    $countdown = mktime(17, 9, 0, 7, 29, 2021);
    
    $timeNow = microtime(true);
    
    $difference = $countdown - $timeNow;
    
    $day = floor($difference / (24*3600));
    $difference = $difference % (24*3600);
    $hour = floor($difference / (60*60));
    $difference = $difference % (60*60);
    $min = floor($difference / 60);
    $sec = $difference % 60;
    
    if ($hour && $min && $sec > 0)
    {
        echo "countdown" .$hour."h ";
        echo $min."min ";
        echo $sec."sec";
    }
    
    else 
        {
           echo 'xDDD'; 
        }
?> 
