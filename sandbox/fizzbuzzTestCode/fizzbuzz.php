<?php

function fizzbuzz( $input ){
    if( ($input % 3 == 0) and ($input % 5 == 0) )
    { return "fizzbuzz"; }
    elseif( $input % 3 == 0 )
    { return "fizz"; }
    elseif( $input % 5 == 0 )
    { return "buzz"; }
    else
    { return $input; }
}

?>
