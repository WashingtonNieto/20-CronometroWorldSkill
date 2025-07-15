<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/style.css">

  
  <title>Cronometro</title>
</head>
<body>
  <div class="layout_cronometro">
    <div class="layout__cronometro__logo">
      <img src="./assets/img/WorldSkills-Colombia.png" alt="Logo worldskill">
    </div>
    <div class="habilidad">
      <?php echo htmlspecialchars($_POST["habilidad"]); ?>
    </div>
    <div class="modulo">
      <?php echo htmlspecialchars($_POST["modulo"]); ?>
    </div>
    <div class="tiempo">
      <div class="hora">
        <span id="horas"><?php echo (int)$_POST["horas"]; ?></span>
        <h4>HORAS</h4>
      </div>
      <div class="minuto">
        <span id="minutos"><?php echo (int)$_POST["minutos"]; ?></span>
        <h4>MINUTOS</h4>
      </div>
      <div class="segundo">
        <span id="segundos"><?php echo (int)$_POST["segundos"]; ?></span>
        <h4>SEGUNDOS</h4>
      </div>
    </div>
    <div id="temporizador"></div>

 </div>
  

  <script src="./main.js"></script>
</body>
</html>