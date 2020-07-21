<html>
    <br>
<head>COVID 19 KALKULATOR</head>    
<body>
    

<form action="" method="post">

<br>
<input type="number" step="0.001" name="num1"> <br>    <p><center>Unesi broj</center></p>
<input type="number" step="0.001" name="num2"><br>    <p><center>Unesi broj</center></p>
<input type="text" name="op"><br>    <p><center>Unesi operator</center></p>
<input type="submit">

</form>
<br>
<?php 

$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$op = $_POST["op"];


if($op == "+"){
    echo "Rezultat je: " . ($num1 + $num2);
}  elseif ($op == "-"){
    echo "Rezultat je: " . ($num1 - $num2);
}
elseif ($op == "/"){
    echo "Rezultat je: " . ($num1 / $num2);
}
elseif ($op == "*"){
    echo "Rezultat je: " . ($num1 * $num2);
} else {
    echo "Unesi pravilno koju operaciju koristiš!";
}

?>


</body>
</html>

