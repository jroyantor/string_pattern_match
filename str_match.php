<?php

function count_substr($substr, $string)
{
    $ssl = strlen($substr);
    $sl = strlen($string);
    $count = 0;
 
    for ($i = 0; $i <= $sl - $ssl; $i++)
    {
        for ($j = 0; $j < $ssl; $j++)
            if ($string[$i+$j] != $substr[$j])
                break;
                
        if ($j == $ssl)
        {
            $count++;
            $j = 0;
        }
    }
    return $count;
}


?>