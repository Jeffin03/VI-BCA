<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Replacement Form</title>

</head>

<body>
    <h2>String Replacement Form</h2>
    <form method="post">
    <?php   
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $original = $_POST["originalString"];
            $search = $_POST["searchString"];
            $replace = $_POST["replaceString"];
            echo "<h3>Result</h3>
            Original String: $original<br>
            String to Replace: $search<br>
            Replacement String: $replace<br>
            Result String: " .str_replace($search, $replace,$original);
    
         }
    ?>

        <br><br>

        Original String: <input type="text" name="originalString" required><br><br>
        String to Replace: <input type="text" name="searchString" required><br><br>
        Replacement String: <input type="text" name="replaceString" required><br><br>
        <input type="submit" name="submit" value="Replace">

    </form>

</body>

</html>