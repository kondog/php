<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>PHPテスト</title>
</head>
<body>

<p>fizzbuzz test.</p>

<p>
<?php
function fizzbuzz( $inputNum ){
    if ( ( $inputNum % 5 == 0 ) and 
         ( $inputNum % 3 == 0 ) ){
         return 'fizzbuzz<br>';
         }
    elseif ( $inputNum % 3 == 0 ){
        return 'fizz<br>';
    }
    elseif ( $inputNum % 5 == 0 ){
        return 'buzz<br>';
    }
    else{
        return "$inputNum<br>";
    }
}

$count = 0;
while ( $count <= 100 ){
    $count = $count+1;
    print fizzbuzz($count);
}
?>
</p>

</body>
</html>


