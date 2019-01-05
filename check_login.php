<?php 
     require_once('conn.php');
  if(isset($_POST['username']) && isset($_POST['password']) ){
    if($_POST['username']!=='' && $_POST['password']!==''){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $stmt = $conn->prepare("SELECT * FROM at7211_users WHERE username=?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['password'])) {
                setSession($username,$conn);
            }
            setcookie('nickname', $row['nickname'], time()+3600*24);
            header('Location: index.php');
        }else{echo '<h1 class="warning">登入失敗!</h1>';}
        
    }else{echo '<h1 class="warning">登入失敗!</h1>';}
}
    function setSession($username,$conn){
        $session_id=uniqid();
        $sql_session = "INSERT INTO at7211_certificate (uc_id,username) VALUES ('$uc_id','$username')";
        if ($conn->query($sql_session) !== TRUE) {
            echo "Error: " . $sql_session . "<br>" . $conn->error;
        }
        setcookie("id", $uc_id, time()+3600*24);

    }

?>