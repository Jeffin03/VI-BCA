<?php
//  This is the server name of my personal MySQL server, change it to localhost if you are not using the dockerized development server
$servername = "mysql_db";  
$username = "root";
$password = "root";
$dbname = "test";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $active = mysqli_real_escape_string($conn, $_POST["active"]);
    $sql = "INSERT INTO users (id,name,email,password,active) VALUES ('$id','$name', '$email','$password','$active')";
    if ($conn->query($sql) === TRUE) {
        echo "Registration successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Registration Form</title>
</head>

<body>
    <h2>Email Registration Form</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        ID: <input type="text" name="id" required><br><br>    
        Name:<input type="text" name="name" required><br><br>
        Email:<input type="email" name="email" required><br><br>
        Password:<input type="password" name="password" required><br><br>
        Active:<input type="active" name="active" required><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>
