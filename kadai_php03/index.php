<?php

session_start();
//ログイン済みの場合
if (!isset($_SESSION['EMAIL'])) {
  header("Location:index2.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://www.gstatic.com/firebasejs/ui/4.8.1/firebase-ui-auth.js"></script>
    <link type="text/css" rel="stylesheet" href="https://www.gstatic.com/firebasejs/ui/4.8.1/firebase-ui-auth.css" />
    
    <title>Document</title>
</head>
<body>
    <a href='logout.php'>ログアウトはこちら。</a>

    <button type=“button” onclick="location.href='post.php'">登録</button>
    <button type=“button” onclick="location.href='read.php'">閲覧</button>
    <button type=“button” onclick="location.href='update-list.php'">更新</button>

   
</body>
</html>