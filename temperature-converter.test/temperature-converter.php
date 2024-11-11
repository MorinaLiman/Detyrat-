<?php
function convertTemperature($temperature, $conversion) {
    if (!is_numeric($temperature)) {
        return "Error: Please enter a valid number.";
    }

    switch ($conversion) {
        case 'celsius-to-fahrenheit':
            return ($temperature * 9 / 5) + 32;
        case 'fahrenheit-to-celsius':
            return ($temperature - 32) * 5 / 9;
        default: 
            return "Error: Invalid conversion option.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $temperature = $_POST['temperature'];
    $conversion = $_POST['conversion'];
    $convertedTemperature = convertTemperature($temperature, $conversion);

    if (is_numeric($convertedTemperature)) {
        switch ($conversion) {
            case 'celsius-to-fahrenheit':
                $unit = "Fahrenheit";
                break;
            case 'fahrenheit-to-celsius':
                $unit = "Celsius";
                break;
        }
        echo "<h2>Temperature Converter</h2>";
        echo "<p>$temperature degrees have been converted to $convertedTemperature degrees $unit.</p>";
    } else {
        echo "<p>$convertedTemperature</p>"; // Error message
    }

    echo '<a href="temperature-converter.php"></a>';
}
?>
