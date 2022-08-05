<?php
session_start();

include_once('./model/Connect.php');
include_once('./model/Manager.php');

$conn = new Manager();

print_r(time());

$conn = $conn->getName("responsible");
print_r($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1><?php echo 'Valor retornado: ' . $conn['name'] ?></h1>
</body>

</html>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ordenador</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;600;700&family=Open+Sans:wght@800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="./css/main.css" />
</head>

<body>
  <div class="container-global">
    <div class="container">
      <div class="cards card-cozinha">
        <h2>Você quem limpa a <span>cozinha</span> hoje irmão(a):</h2>
        <div class="person-kitchen">

        </div>
      </div>

      <div class="cards card-caixa">
        <h2>Você é o próximo a comprar a <span>caixa de ovo</span>:</h2>
        <div class="person-eggs">

        </div>
        <button class="button">Mude para o próximo</button>
      </div>
    </div>
  </div>
</body>
<script src="./index.js"></script>

</html> -->