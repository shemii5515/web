

<html> <body>

<h2>Factorial of a Number</h2>

<form method="post" action="">
   Enter a number:
   <input type="number" name="num" required>
   <input type="submit" name="submit" value="Find">
   </form>

<?php
if(isset($_POST['submit']))
{
    $n = $_POST['num'];
    $fact = 1;
    for($i = 1; $i <= $n; $i++)
    {
    $fact = $fact * $i;
    }
    echo "Factorial of $n is $fact";
}
?>

</body> </html>
