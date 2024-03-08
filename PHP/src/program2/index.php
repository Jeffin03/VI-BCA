<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XML FIle Loaded</title>
</head>
<body>
    <h2>XML File Loaded</h2>
    <?php
        $xml = simplexml_load_file("example.xml");
        if($xml){
            echo "<h3>Book Information: </h3>";
            foreach($xml -> book as $book){
                echo "<b>Book Title: </b>".$book -> title."<br>";
                echo "<b>Book Author: </b>".$book -> author."<br>";
                echo "<b>Book Price: </b>".$book -> price."<br>";
            }
        }else {
            echo "<p>Error loading XML file</p>";
        }
    ?>
</body>
</html>