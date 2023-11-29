<?php
$min = 1000;
$max = 9999;

$pass = mt_rand($min,$max);
$name = Auth::user();
?>
<!DOCTYPE HTML>
<html lang = "ja">
    <head>
        <meta charset = "utf-8">
        <title>Room</title>
    </head>
    <body>
        <h1>room</h1>
        <p>
            ユーザ情報1{{$name->name}}
            
            ユーザ情報２
        </p>
        <p>パスワード{{$pass}}</p>
        
        <p>チャット</p>
    </body>
</html>