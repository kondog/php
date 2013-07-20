<?php
    require "fizzbuzz.php";

    function testFizzbuzz( $input, $output ){
        if( $output != fizzbuzz( $input )){
            print "test failed. $input, $output.\n";
        }
    }
#                 input,     output
    testFizzbuzz(     1,          1 );
    testFizzbuzz(     3,     "fizz" );
    testFizzbuzz(     5,     "buzz" );
    testFizzbuzz(    15, "fizzbuzz" );
?>
