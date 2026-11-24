<html>
<head>
    <title>Student Details</title>
</head>
<body>

<h2>Student Details Form</h2>

<form method="post" action="">

    Name:
    <input type="text" name="name" required>
    <br><br>

    Email ID:
    <input type="email" name="email" required>
    <br><br>

    Address:
    <textarea name="address" required></textarea>
    <br><br>

    Gender:
    <input type="radio" name="gender" value="Male" required> Male
    <input type="radio" name="gender" value="Female"> Female
    <br><br>

    Date of Birth:
    <input type="date" name="dob" required>
    <br><br>

    <input type="submit" name="submit" value="Submit">

</form>

<?php
if(isset($_POST['submit'])) {

    echo "<h2>Student Details</h2>";

    echo "Name: " .
        htmlspecialchars($_POST['name']) . "<br>";

    echo "Email: " .
        htmlspecialchars($_POST['email']) . "<br>";

    echo "Address: " .
        htmlspecialchars($_POST['address']) . "<br>";

    echo "Gender: " .
        htmlspecialchars($_POST['gender'] ?? '') . "<br>";

    echo "Date of Birth: " .
        htmlspecialchars($_POST['dob']) . "<br>";

}

?>

</body>
</html>



