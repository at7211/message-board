
<?php
    require_once('conn.php');
    if(empty($_POST['content'])){
        header('Location: index.php');
    }
        $insertSql = $conn->query('INSERT INTO at7211_sub_comments (nickname, content) VALUES ("' . $_COOKIE['nickname'] . '", "' . $_POST['content'] .'")');
       
        if($insertSql === TRUE){
            header('Location: index.php');
        }else{
            echo 'Error: ' . $sql . '<br>' . $conn->error;
        }
    
?>