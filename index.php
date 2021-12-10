<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="css/style.css">
  <title>Luckru</title>
</head>

<body>
  <div class="row" style="opacity: 0;">
    <table class="addRow">
      <tr>
        <td><input placeholder="ФИО"></input></td>
        <td><input placeholder="Телефон"></input></td>
        <td><input placeholder="Кем приходится"></input></td>
      </tr>
      <td><button id="sucsess" onclick="showHideAddingRow()">Применить</button></td>
    </table>
  </div>

  <div class="wrapper">
    <button class="addBtn" id="addBtn" onclick="showHideAddingRow()" onclick="">Добавить запись</button>
    <div class="container">
      <?php
      include 'table.php';
      ?>
    </div>
  </div>
  <script src="app.js"></script>
</body>

</html>