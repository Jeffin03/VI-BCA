<html>
<head>
<title>Login System in PHP</title>
</head>
<body>
<h3>Write a PHP program to give authentication for registered users with Database (Login System)</h3>
<form action="" method="POST">
<label>Username</label><br>
<input type="text" name="username"><br>
<label>Password</label><br>
<input type="password" name="password"><br>
<input type="submit" name="submit">
</form>
<?php
        $connection = mysqli_connect("mysql_db","root","root");
        $db = mysqli_select_db($connection,'test');
        if(isset($_POST['submit']))
        {
        $name = $_POST['username'];
        $pswd = $_POST['password'];
         $query = mysqli_query($connection,"SELECT username,password FROM usersTable WHERE username='$name' and password='$pswd'");
         if($query)
            {
                if(mysqli_num_rows($query) > 0)
                    echo 'Login Success';
                else   
                    echo 'Login failed';
            } 
            
        }
    ?>
</body>
</html>
