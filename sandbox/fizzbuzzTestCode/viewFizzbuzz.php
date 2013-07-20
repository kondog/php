<html>
<head>
<title>fizzbuzz</title>
</head>
<body>
<?php
require "fizzbuzz.php";
$counter = 0;
while ($counter < 100){
    print fizzbuzz($counter);
    print "<br>";
    $counter = $counter+1;
}
?>
</body>
</html>
