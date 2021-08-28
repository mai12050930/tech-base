<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>掲示板</title>
    </head>
    <body>
        <form action="" method="POST">
            <input type="text" value="コメント" name="text">
            <input type="submit" value="送信">
        </form>
        <?php
            $comment = $_POST["text"];
            echo $comment."を受け取りました";
        ?> 
    </body>
</html>