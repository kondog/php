<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>Pg_Connect TEST</title></head>
<body>

testtest<br>

<?php
$conn = "host=localhost dbname=template1 user=postgres password=postgres";
$result = pg_connect($conn);

if (!$result) {
    die('接続失敗'.pg_last_error());
}

print('接続成功<br>');


$q_result = pg_query( 'select * from test' );

while( $row = pg_fetch_row( $q_result ) ){
    print( "$row[0] _ $row[1]" );
    print( "<br />\n" );
}
print( "$q_result" );
pg_close($result);
?>
</body>
</html>


