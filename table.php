<table>
  <tr>
    <th>ФИО</th>
    <th>Телефон</th>
    <th>Кем приходится</th>
    <th>Кнопки действий</th>
  </tr>
  <?php
  // include 'db.php';
  $mysqli = new mysqli("127.0.0.1", "mysql", "", "luckru", 3306);
  $res = $mysqli->query("SELECT * FROM phone_book");
  foreach ($res as $row){
    echo "<tr>";
      echo "<td>" . $row['FullName']. "</td>";
      echo "<td>" . $row['Phone']. "</td>";
      echo "<td>" . $row['WhoIS']. "</td>";
      echo "<td>". 
      "<button>" . "Удалить" . "</button>".
      "<button>" . "Редактировать" . "</button>".
    "</td>";
    echo "</tr>";
  }
?>
</table>

