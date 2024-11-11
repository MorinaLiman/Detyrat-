<?php
// Pjesa kryesore e serverit dhe POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Duke marrur të dhënat nga formulari
    $valueA = $_POST['number1'] ?? 0;
    $valueB = $_POST['number2'] ?? 0;
    $operation = $_POST['operation'] ?? 'unknown';
    $output = "";

    // Pjesa e funksioneve kryesore për operacionet matematikore 
    function calculateResult($a, $b, $operation) {
        $result = null;
        switch ($operation) {
            case 'add':
                $result = $a + $b;
                break;
            case 'subtract':
                $result = $a - $b;
                break;
            case 'multiply':
                $result = $a * $b;
                break;
            case 'divide':
                $result = ($b != 0) ? $a / $b : "Error: Division by zero.";
                break;
            default: 
                $result = "Invalid operation.";
        }
        return $result;
    }

    // Dhe pjesa e fundit me rezultatet
    if (is_numeric($valueA) && is_numeric($valueB)) {
        $output = calculateResult($valueA, $valueB, $operation);
    } else {
        $output = "Error: Invalid input values.";
    }

    // Rezultatet shtese te kesaj detyre
    echo "<h2>Calculated Result</h2>";
    echo "<p>Performing '$operation' on values: $valueA and $valueB.</p>";
    echo "<p>Result: $output</p>";
    echo '<a href="calculator.html"></a>';
}
?>
