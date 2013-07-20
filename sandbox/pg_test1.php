<?php
$conn = "host=localhost dbname=template1 user=postgres password=postgres";
$result = pg_connect($conn);

if (!$result) {
    die('接続失敗'.pg_last_error());
}

print('接続成功<br>');

//pg_freeresult($result);
//pg_close($conn);
pg_close($result);
?>
