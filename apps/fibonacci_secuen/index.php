<!DOCTYPE html>
<html>
<head>
  <title>Serie Fibonacci</title>
  <link rel="stylesheet" type="text/css" href="bootstrap.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-8 col-md-6">
        <h1 class="text-center mt-5">Serie Fibonacci</h1>
        <h5 class="text-center mt-5">Ingrese un número</h5>
        <div class="d-flex justify-content-center mt-4"> 
          <form method="POST">
            <input type="number" name="fibonacci-number" min="1" max="99" placeholder="">
            <button type="submit" name="generate-button">Generar</button>
          </form>
        </div>
        <div id="fibonacci-sequence" class="text-center mt-4">
          <?php
            // Comprobamos si se ha enviado el formulario
            if (isset($_POST['generate-button'])) {
              // Obtenemos el número ingresado por el usuario
              $number = intval($_POST['fibonacci-number']);
              // Verificamos que el número esté dentro del rango permitido
              if ($number < 1 || $number > 99) {
                echo 'Ingrese un número válido entre 1 y 99.';
              } else {
                // Generamos la secuencia de Fibonacci
                $sequence = generateFibonacciSequence($number);
                echo implode(', ', $sequence);
              }
            }

            // Función para generar la secuencia de Fibonacci
            function generateFibonacciSequence($n) {
              $sequence = array(0, 1);
              // Generamos la secuencia iterativamente
              for ($i = 2; $i <= $n; $i++) {
                $sequence[$i] = $sequence[$i - 1] + $sequence[$i - 2];
              }
              return $sequence;
            }
          ?>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
