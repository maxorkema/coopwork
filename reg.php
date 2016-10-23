<?php require_once("db/connection.php"); ?>
<?php if (isset($_POST['rpassword'])) {
          $user_name=$_POST['user_name'];
          $user_surname=$_POST['user_surname'];
          $city=$_POST['city'];
          $email=$_POST['email'];
          $password=$_POST['password'];
              $query_str="SELECT * FROM `usr` WHERE email LIKE '".$email."'"; 
              $query=mysql_query($query_str);
              $myrow = mysql_fetch_array($query); 
              if ($myrow['name']!=$user_name) {    
                if ($myrow['email']!=$email) {  

                  $query_str="INSERT INTO `un`.`usr` (`id`, `name`, `surname`, `city`, `email`, `pass`) 
                  VALUES (NULL, '$user_name', '$user_surname', '$city', '$email', '$password')";
                  mysql_query($query_str);
                  mysql_close();
                  header("Location: index.php");
                }else{header("Location: avtoriz.php");}
              }else{header("Location: reg.php");}
        }

?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Реєстрація</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
      <div class="h1"><img src="undead_n.png" width="150" 
   height="150" alt="Logo"><h1>Undead</h1><h2>Nation</h2></div>
      <form method="post" class="form-2">
      <a>Реєстрація</a>
        <section class="container one">
          <p><label for="user_name">Ім'я            </label>
            <input type="text" name="user_name" pattern="^[А-Яа-яЁёІіЇї\s]+$"><span></span></p>
          
          <p><label for="user_surname">Прізвище  </label>
            <input type="text" name="user_surname" pattern="^[А-Яа-яЁёІіЇї\s]+$"><span></span></p>
          
          <p><label for="city">Місто        </label>
            <input type="text" name="city" pattern="^[А-Яа-яЁёІіЇї\s]+$"><span></span></p>
          
          <p><label for="email">Ел.Пошта </label>
            <input type="email" name="email"><span></span></p>
          
          <p><label for="password">Пароль     </label>
            <input type="password" name="password"><span></span></p>
          
          <p><label for="password">Повторіть</label>
            <input type="password" name="password"><span></span></p>
          </p>
        </section>        
        <section class="container two">
        <button type="submit" name="rpassword" id="rpassword">Зареєструватися</button>
        </section>
      </form>
      
  </body>
</html>
