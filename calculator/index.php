<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>
<body>
    <!--Pjesa kryesore e krijimit te inputave per operacitonet matematikore-->
    <h2>Kalkulator Bazik</h2>
    <form action="calculator.php" method="post">

    <label for="number1">Number 1:</label>
    <input type="number" name="number1" required>

    <label for="number2">Number 2:</label>
    <input type="number" name="number2" required>
    <!--Pjesa e krijimit te operacioneve matematikore si mbledhja,zbritja,shumezimi,pjestimi-->
    <label for="operation">Operation :</label>
    <select name="operation" required>
        <option value="add">Addition (+)</option>
        <option value="subtract">Subtraction (-)</option>
        <option value="multiply">Multiplication (*)</option>
        <option value="divide">Division (÷)</option>
</select>
<!--Pjesa e butonit ku pas perfundimit te numrave dhe zgjedhjes se operacionit klikon ne buton Calculate
dhe del rezultati-->
<button type="submit">Calculate</button>
</form>



</body>
</html>