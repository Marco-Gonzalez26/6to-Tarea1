<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/styles.css">
  <title>Calculadora</title>
</head>

<body>
  <div class="container">
    <a href="../index.html" class="back-btn">← Volver al inicio</a>

    <div class="calculator" data-glow>
      <div class="calc-title">
        <h1>CASIO</h1>
      </div>

      <div class="display">
        <input value="0" readonly class="display-result" id="result"></input>
      </div>

      <div class="buttons">
        <button class="btn clear" onclick="clearResult()" type="button">C</button>
        <button class="btn operator" onclick="back()" type="button">⌫</button>
        <button class="btn operator" onclick="addToExpression('/')" type="button">÷</button>

        <button class="btn" style="opacity: 0;" type="button"></button>

        <button class="btn" onclick="addToExpression('7')" type="button">7</button>
        <button class="btn" onclick="addToExpression('8')" type="button">8</button>
        <button class="btn" onclick="addToExpression('9')" type="button">9</button>
        <button class="btn operator" onclick="addToExpression('*')" type="button">×</button>

        <button class="btn" onclick="addToExpression('4')" type="button">4</button>
        <button class="btn" onclick="addToExpression('5')" type="button">5</button>
        <button class="btn" onclick="addToExpression('6')" type="button">6</button>
        <button class="btn operator" onclick="addToExpression('-')" type="button">−</button>

        <button class="btn" onclick="addToExpression('1')" type="button">1</button>
        <button class="btn" onclick="addToExpression('2')" type="button">2</button>
        <button class="btn" onclick="addToExpression('3')" type="button">3</button>
        <button class="btn operator" onclick="addToExpression('+')" type="button">+</button>

        <button class="btn zero" onclick="addToExpression('0')" type="button">0</button>
        <button class="btn" onclick="addToExpression('.')" type="button">.</button>
        <button class="btn equals" onclick="solve()" type="button"> = </button>
      </div>
    </div>
  </div>
  <script src="../js/index.js"></script>
  <script src="../js/calculator.js"></script>
</body>

</html>