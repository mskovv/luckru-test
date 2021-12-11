<?php
include 'func.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Luckru</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col mt-1">
        <button class="btn btn-success mb-1" data-toggle="modal" data-target="#Modal"><i class="fa fa-plus"></i></button>
        <table class="table shadow ">
          <thead class="thead">
            <tr>
              <th>ФИО</th>
              <th>Телефон</th>
              <th>Кем приходится</th>
              <th>Действие</th>
            </tr>
            <?php foreach ($result as $value) { ?>
              <tr>
                <td><?= $value['name'] ?></td>
                <td><?= $value['phone'] ?></td>
                <td><?= $value['who_is'] ?></td>
                <td>
                  <a href="?edit=<?= $value['id'] ?>" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editModal<?= $value['id'] ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                  <a href="?delete=<?= $value['id'] ?>" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal<?= $value['id'] ?>"><i class="fa fa-trash-o"></i></a>
                  <?php require 'modal.php'; ?>
                </td>
              </tr> <?php } ?>
          </thead>
        </table>
      </div>
    </div>
  </div>

  <div class="modal fade" tabindex="-1" role="dialog" id="Modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content shadow">
        <div class="modal-header">
          <h5 class="modal-title">Добавить запись</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="" method="post">
            <div class="form-group">
              <input type="text" class="form-control" name="name" value="" placeholder="ФИО">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="phone" value="" placeholder="Телефон">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="who_is" value="" placeholder="Кем приходится">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
          <button type="submit" name="submit" class="btn btn-primary">Добавить</button>
        </div>
        </form>
      </div>
    </div>
  </div>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>