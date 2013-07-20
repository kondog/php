<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>処理中</title>
</head>
<body>

<?php
# DB接続
$conn = "host=localhost dbname=msgbrd user=postgres password=postgres";
$result = pg_connect( $conn );

if ( !$result ){
    die( 'connect failed.'.pg_last_error() );
}

# DBデータ出力
$name = $_POST['name'];
$msg  = $_POST['msg'];
echo "$name, $msg<br>";
$q_result = pg_query( "insert into messages values ('${name}', '${msg}' );" );
$q_result = pg_query( "commit;" );
echo "result:$q_result";
pg_close( $result );

?>

</body>
</html>
