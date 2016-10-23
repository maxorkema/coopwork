<?php require_once("db/connection.php"); ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="styles.css">
<title>UN</title>
</head>
<body id="kontent">
<div class="h1"><img src="undead_n.png" width="150" 
   height="150" alt="Logo"><h1>Undead</h1><h2>Nation</h2></div>
<div class="sostav"><p>Склад команди:</p>
<ul>
 <li>Ваня "nG." Горбатюк</li>
 <li>Андрій "OD'd by an accident" Мазуренко</li>
 <li>Мишко "FireTur" Ткач</li>
<li>Максим "luxury" Кемінь</li>
<li>Олег "Nejtrino" Коваль</li>
</ul>
</div>
<div class="info"><p>Undead nation, UNation (від лат. Народжені кодити) — українська мультиігрова кіберспортивна організація. Команда вперше в історії кіберспорту 2010 року виграла три головних турніри за один рік — World Cyber Games, Intel Extreme Masters, Electronic Sports World Cup. 21 серпня 2011 року виграла приз 1 000 000 доларів США у грі Dota 2.
Має свої команди в різних ігрових дисциплінах, зокрема Dota 2, Counter-Strike, FIFA, StarCraft II, World of Tanks, League of Legends.</p></div>
  <div class="table"><table >
     <caption>Наші фанати</caption>
   <tr><th>Ім'я</th><th>Прізвище</th></tr>
   <?php
$request = "SELECT name, surname FROM usr";
$result = mysql_query($request);
if (!mysql_error()) {
  while ($row = mysql_fetch_row($result)) {
    //echo '<div class="new">';
	//echo '<span id="title" name="title" style="width:100%;">'.$row[1].'</span>';
	//echo '<span id="maintext" name="maintext">'.$row[0].'</span>';
	//echo '<span id="date" name="date">&nbsp;&nbsp;&nbsp;'.$row[2].'</span>';
	//echo '</div>';
	echo '<tr><td>'.$row[0].'</td>';
	echo '<td>'.$row[1].'</td></tr>';
    };
  }
else {
  echo "Ошибка БД в запросе ".$request.". MySQL пишет ". mysql_error();
};
mysql_free_result ($result);
?>
   
  </table>
</div>
</body>
</html>
