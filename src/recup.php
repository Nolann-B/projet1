<?php 


require_once "../vendor/autoload.php";

$db = new MongoDB\Client("mongodb://localhost:27017");

$db = $db->dbpoles->form;

$datas = [
    "email" => $_POST["email"],
    "nom" => $_POST["nom"],
    "sujet" => $_POST["sujet"],
    "message" => $_POST["message"]
];

//$db->insertOne($datas);

$listForm = $db->find();

?>

<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Email</th>
      <th scope="col">Sujet</th>
      <th scope="col">Message</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($listForm as $value) { ?>
    <tr>
      <td><?= $value["nom"] ?></td>
      <td><?= $value["email"] ?></td>
      <td><?= $value["sujet"] ?></td>
      <td><?= $value["message"] ?></td>
    </tr>
   <?php } ?>
  </tbody>
</table>

</html>