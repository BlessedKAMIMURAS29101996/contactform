<?php
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson01; host=localhost;","root","root");

$pdo->exec("INSERT INTO contactform(name,mail,age,comments)VALUES('".$_POST['name']."','".$_POST['mail']."','".$_POST['age']."','".$_POST['comments']."');");
?>
<!doctype HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>お問合わせフォームを作る</title>
        <link rel="stylesheet"type="text/css" href="sytle2.css">
</head>
<body>
    <h1>お問合わせフォーム</h1>
    <div class="confirm">
        <p>
            お問合わせ有難うございました。<br>３営業日以内に担当者よりご連絡差し上げます。
</p>
</div>
</bodY>
</html>