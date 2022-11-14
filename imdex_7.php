<?php   // Lesson 7 Доступ к MySQL посредством PHP - используем класс: mysqli

require_once 'setting.php'; 

//connecting mySQL DB (data)
$connection = new mysqli($host, $user, $pass, $data);
if ($connection->connect_error) die('Connection Error'); 
else print ("Good connection!!! <br>");

//запрос к нашей БД
 $query = 'SELECT name, age FROM users'; 
  //$result = $connection->query($query);   //эту строчку можно и так как указано ниже, чтобы не вводить $query
 $result = $connection->query('SELECT name, age FROM users');
  if (!$result) die('No Result'); 
  else print ("And therefore GOOD RESULT!<br>");

 
 $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
 foreach ($rows as $row ) {
    print ("Клиент: " . $row['name']. "; Возраст: " . $row['age']."<br>");
}

// Закрываем запрос и соеденение (connect)
$result->close();
$connection->close();

?>