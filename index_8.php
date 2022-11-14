
<?php  // Lesson 8 Доступ к MySQL посредством PHP - используем более новый класс: PDO

//try {
  
// $connection = new PDO('mysql:host=localhost;dbname=mytest2', 'root', 'mysql');

// //Запись данных в нашу БД с пом. INSERT - все столбцы, кроме id (auto), должны фигурировать
// $query = "INSERT INTO users (name, age, login, password) VALUE('George', null, 'ghost', 'Ginger1')";
// $nRows=$connection->exec($query);

// echo "В таблицу Users добавлено строк: $nRows";


// } catch (PDOException $e) {
//   print "Error!: " . $e->getMessage() . "<br/>";
//   die();
// }

// print("Кол-во добавленных строк:\n");
// $count = $connection->rowCount();
// print("Добалено $count строк.\n");


?>
