<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>掲示板</title>
</head>
<body>

<h1>掲示板テスト</h1>
<form action="form_rcv.php" method="post" >
名前：<input type="text" name="name" /><br>
伝言：<input type="text" name="msg"  /><br>
<input type="submit" value="送信" />

<?php
# 1レコードを出力
function view1Record( $title, $sentence ){
    print '<table border="0" bgcolor="#ffdae0" width="90%" cellpadding="8">';
    print "<tr><td>";
    print "<h2>$title</h2>";
    print "$sentence";
    print "</td></tr>";
    print "</table>";
    print "<br>";
}

function db2html( $q_result ){
    while( $row = pg_fetch_row( $q_result ) ){
        view1Record( $row[0], $row[1] );
    }
}

# DB接続
$conn = "host=localhost dbname=msgbrd user=postgres password=postgres";
$result = pg_connect( $conn );

if ( !$result ){
    die( 'connect failed.'.pg_last_error() );
}

# DBデータ出力
$q_result = pg_query( 'select * from messages' );
db2html( $q_result );
pg_close( $result );

?>

</body>
</html>
