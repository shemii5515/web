<html>
<head>
<title>Odd or Even</title>
</head>
<body>

<h2>Check Odd or Even</h2>

<form method="get" action="">
Enter a number:
<input type="number" name="num" required>
<input type="submit" name="submit" value="Check">
</form>

<?php
if(isset($_GET['submit'])) {

    $num = $_GET['num'];

    if($num % 2 == 0) {
        echo "<h3>$num is an Even Number</h3>";
    } else {
        echo "<h3>$num is an Odd Number</h3>";
    }

}
?>

</body>
</html>
