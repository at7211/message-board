<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>留言板</title>
    <link rel='stylesheet' href='CSS/index.css' />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <script src="JS/index.js"></script>
</head>

<body>
    <div class="comment__list">
        <form action="create_comment.php" method="post">
            <div class="head">
                <div class="comment">Message board</div>
                <div class="logout" onclick="location.href='login.php';" style="cursor :pointer;">Logout</div>
            </div>
            <!-- 主留言區 -->
            <div class="content">
                <div class="nickname">user:
                    <?php
                     if(!isset($_COOKIE["nickname"])) {
                        echo "not login";
                    } else {
                        echo$_COOKIE["nickname"];
                    }
                    ?>
                </div>
                <textarea name="content" class="comment__textarea" placeholder="Leave a message"></textarea>
                <input type="submit" class="button" value="Publish">
                <input type="hidden" name="parrent_id" value="0">
            </div>
        </form>    
            <?php
                require_once('conn.php');
                $querySql = $conn->query("SELECT * FROM at7211_comments where parrent_id = 0 order by created_at DESC");
                while($row = $querySql->fetch_assoc()) {
                        require('add_comment.php');
                }
            ?>
           
    </div>
</body>


</html>