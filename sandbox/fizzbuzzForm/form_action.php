<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>Pg_Connect TEST</title></head>
<body>
<?php 
    $counter = 1;
    
    function fizzbuzz( $count ){
        if( ($count % 5) == 0 and ($count % 3) == 0 ){
            return "fizzbuzz";
        } elseif( $count % 3 == 0 ){
            return "fizz"; 
        } elseif( $count % 5 == 0 ){
            return "buzz";
        } else {
            return $count;
        }
    }

    while( $counter < (int)$_POST['fzbz'] ){
        print( fizzbuzz( $counter ) );
        print( "<br>" );
        $counter = $counter+1;
    }

?>
</body>
</html>
