<?php
$nameErr;
$num1 = (int)$_POST["num1"];
$num2 = (int)$_POST["num2"];
$opNum = (int)$_POST["operation"];
$op = [
    1 => function($a ,$b) { return " $a + $b = ".($a + $b);},
    2 => function($a ,$b) { return " $a - $b = ".($a - $b);},
    3 => function($a ,$b) { return " $a * $b = ".($a * $b);},
    4 => function($a ,$b) { return " $a / $b = ".($a / $b);},
];


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($num1) or empty($num2)) $nameErr = "Numbers are required";
    // ой, с in_array перепутал чутка =)
    if (!isset($op[$opNum])) $nameErr = "Undefined operation";
    if (!$nameErr){
        $ans = $op[$opNum]($num1, $num2);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?=$nameErr?>
<br>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    Введите 2 числа: <input type="number" name="num1"> <input type="number" name="num2"><br>
    Выберите операцию:
    <select name="operation">
        <option value="1">+</option>
        <option value="2">-</option>
        <option value="3">*</option>
        <option value="4">/</option>
    </select><br>
    <input type="submit">
</form>
<br>
<?=$ans?>
</body>
</html>