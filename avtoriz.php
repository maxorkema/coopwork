<?php require_once("db/connection.php"); ?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Авторизація</title>
    <link rel="stylesheet" href="styles.css">
      </head>
  <body>
  <div class="h1"><img src="undead_n.png" width="150" 
   height="150" alt="Logo"><h1>Undead</h1><h2>Nation</h2></div>
<form class="form-1">
    <p class="field">
       <p>Вхід</p>
        <input type="text" name="login" placeholder="Пошта">
        <i class="icon-user icon-large"></i>
    </p>
        <p class="field">
        <input type="password" name="password" placeholder="Пароль">
        <i class="icon-lock icon-large"></i>
    </p>       
    <p class="submit">
         <button type="submit">Увійти</button>
    </p>

      
  </body>
</html>
</form>
