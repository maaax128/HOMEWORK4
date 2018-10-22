<?php 
$a = file_get_contents('./spisok.json');
$json_de = json_decode($a, true);
?>


<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
    <title>Телефонная книга</title>    
</head>
<body>

  <table border="1">
   <caption><h2>Телефонная книга</h2></caption>
    <tr>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Адрес</th>
        <th>Телефоны</th>
   </tr>


<?php foreach ($json_de as $key => $arr) { ?>

<tr>
	<td><?php echo $arr['firstName'] ?></td>
	<td><?php echo $arr['lastName'] ?></td>
	<td><?php echo $arr['address'] ?></td>
	<td><?php echo $arr['phoneNumber'] ?></td>
</tr>

<?php
}
?>
</table>
</body>
</html>