<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
</head>
<body>

    <h1>Personal Home Page - Calculator</h1>
    
    <form action="index.php" method="post">
        Enter Number 1: <input type="number" name="num1">
        <br>
        Enter Number 2: <input type="number" name="num2">
        <br>
        Operator: <input type="text" name="operator">
        <input type="submit" value="Calculate">
    </form>

    <?php
    if(isset($_POST["num1"]) && isset($_POST["num2"]) && isset($_POST["operator"])) {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operator = $_POST["operator"];

        switch($operator) {
            case "+":
                echo "Result: " . ($num1 + $num2);
                break;
            case "-":
                echo "Result: " . ($num1 - $num2);
                break;
            case "*":
                echo "Result: " . ($num1 * $num2);
                break;
            case "/":
                if($num2 != 0) {
                    echo "Result: " . ($num1 / $num2);
                } else {
                    echo "Error: Division by zero!";
                }
                break;
            default:
                echo "Invalid Operator";
        }
    }
    ?>
</body>
</html>
