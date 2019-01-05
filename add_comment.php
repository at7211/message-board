<div class="content">
    <div class="nickname"><?php echo $row['nickname']?></div>
    <div class="time"><?php echo $row['created_at']?></div>
    <div class="response"><?php echo htmlspecialchars($row['content'], ENT_QUOTES, 'utf-8') ?></div>
    <!--子留言區  -->
    <div class="sub_list">
        <form action="create_comment.php" method="post">
            <div class="sub_content create">
                <?php
                    require_once('conn.php');
                    $parrent_id = $row['id'];
                    $Sql = $conn->query("SELECT * FROM at7211_comments where parrent_id = $parrent_id order by created_at DESC");
                    while($sub_comment=$Sql->fetch_assoc()){
                ?>
                <div class="nickname"><?php echo $sub_comment['nickname'];?></div>
                <div class="time"><?php echo $sub_comment['created_at'];?></div>
                <div class="response"><?php echo htmlspecialchars($sub_comment['content'], ENT_QUOTES, 'utf-8');?></div>
                <?php
                    }
                ?>
            </div>
            <div class="sub_content">
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
                <input type="submit" name="button" value="Publish">
                <input type="hidden" name="parrent_id" value="<? echo $row['id']; ?>">
            </div>   
        </form>
    </div>    
</div>
                            
                   
  