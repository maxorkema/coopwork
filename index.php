<?php require_once("db/connection.php"); ?>
<?php if (isset($_POST['rpassword'])) {
          if(!empty($_POST['login']) && !empty($_POST['password'])) {
  $login=htmlspecialchars($_POST['login']);
  $password=htmlspecialchars($_POST['password']);
  $query =mysql_query("SELECT * FROM usr WHERE email='".$login."' AND pass='".$password."'");
  $numrows=mysql_num_rows($query);
  if($numrows!=0)
 {
while($row=mysql_fetch_assoc($query))
 {
  $dblogin=$row['email'];
  $dbpassword=$row['pass'];
 }
  if($login == $dblogin && $password == $dbpassword)
 {
   header("Location: main.php");
  }
  } else {header("Location: reg.php");}
  } else {header("Location: index.php");}
  } 
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Авторизація</title>
    <link rel="stylesheet" href="style.css">
      </head>
  <body>
  <div class="h1"><img src="undead_n.png" width="150" 
   height="150" alt="Logo"><h1>Undead</h1><h2>Nation</h2></div>
<form class="form-1" method="post">
    <p class="field">
       <p>Вхід</p>
        <input type="text" name="login" id="login" placeholder="Пошта">
        <i class="icon-user icon-large"></i>
    </p>
        <p class="field">
        <input type="password" name="password" id="password" placeholder="Пароль">
        <i class="icon-lock icon-large"></i>
    </p>       
    <p class="submit">
         <button type="submit" name="rpassword" id="rpassword">Увійти</button>
    </p>

     </form> 
  </body>
</html>

