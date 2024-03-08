<?php
    $rand = rand();
    $now = time();
    $next = strtotime(date("H:i",strtotime("+1 minute")));
    $diff = $next-$now;
    if(!$_COOKIE["random"])
    {
    setcookie("random",$rand,time()+$diff);
    } else 
    {
    $rand = $_COOKIE['random'];
    }
    echo "The Random Number is" .$rand;
