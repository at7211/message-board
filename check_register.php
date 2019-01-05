<?php 
    require_once('conn.php');

    $username = $_POST['username'];
    $password = $_POST['password'];
    $nickname = $_POST['nickname'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $insertSql = "INSERT INTO at7211_users VALUES (Null, '$username', '$password' , '$nickname')";
 
    if ($conn->query($insertSql) === TRUE) {
        echo "New record created successfully";
        header('Location: login.php');
    } else {
        echo "Error: ";
    }
    
?>



