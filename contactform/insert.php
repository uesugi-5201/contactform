<?php
md_internal_encoding("uft8");

$pdo = new PDO("mysql;dbname=lesson1;host=localhost;","root","");

$pdo->exec("insert into contactform(name,mail,age,comments)
values('".$_POST['name']."','".$_POST['mail']."','".$_POST['age']."','".$_POST['comments']."');");
?>

<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="uft-8">
    <title>お問い合わせフォームを作る</title>
    <link rel="stylesheet"type="text/css"href="style2.css">
    </head>
    <body>
    <h1>お問い合わせフォーム</h1>
        <p>お問い合わせ有難うございました。<br>3営業日以内に担当者より連絡差し上げます。
        </p>
    
    </body>
    
</html>