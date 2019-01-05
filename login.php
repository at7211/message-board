<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>登入</title>
  <link rel='stylesheet' href='CSS/login.css' />
  
</head>

<body>
  <div class="navabar"><nav><img src="https://i.imgur.com/F70zRQL.png" alt=""></nav></div>
  <div class="container">
    <form action='/yylslolz/check_login.php' method='POST'>
      <p id="login">Log In to Timing</p>
      <div class="control__input"><label>username:</label><br><input name="username" /></div>
      <div class="control__input"><label>password:</label><br><input name='password' type="password" /></div>
      <div class="button">Log In</div>
      <div class="submit"><input type="submit" name='login' value="Login"></div>
      <div class="create__account"><a href="register.php">No account? Creat one!</a></div>
    </form>
  </div>
</body>
    <script type="text/javascript" src="./JS/login.js"></script>
</html>






