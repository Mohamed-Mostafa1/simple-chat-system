<?php require 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <script src="ajax.js"></script>
    <title>chat system</title>
</head>
<body onload="ajax();">
    <div id="container">
        <div id="chat_box">
            <div id="chat"></div>
        </div>
        <form method="post" action="index.php">
            <input type="text" name="name" placeholder="enter name">
            <textarea name="msg" id="" cols="30" rows="10" placeholder="enter message"></textarea>
            <input type="submit" name="submit" value="send">
        </form>
        <?php
        if (isset($_POST['submit']))
        {
            $name = $_POST['name'];
            $message = $_POST['msg'];
            $stmt = $pdo->prepare('INSERT INTO chat(name,message) VALUES (:name,:message)');
            $stmt->execute(['name' => $name, 'message' => $message]);
            echo "<embed loop='false' src='facebook_chat.mp3' hidden='true' autoplay='true'/> ";
        }
        ?>
    </div>
</body>
</html>