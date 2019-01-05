
<?php
    require_once('conn.php');
    if(empty($_POST['content'])){
        header('Location: index.php');
    }
        $insertSql = $conn->query('INSERT INTO at7211_comments (nickname, content, parrent_id) VALUES ("' . $_COOKIE['nickname'] . '", "' . $_POST['content'] .'", "' . $_POST['parrent_id'] .'")');
       
        if($insertSql === TRUE){
            header('Location: index.php');
        }else{
            echo 'Error: ' . $sql . '<br>' . $conn->error;
        }
    
?>