<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleinsert.css">
    <title>Document</title>
</head>
<body>
    
<center>
        <?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "login_db");

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        if($conn){
            echo "success";
        }

        // Taking all 5 values from the form data(input)
        $username = $_REQUEST['username'];
        $topic = $_REQUEST['topic'];
        $content = $_REQUEST['content'];
       

        // We are going to insert the data into our sampleDB table
        $sql = "INSERT INTO mytable VALUES ('$username',
            '$topic','$content')";

        // Check if the query is successful
        if(mysqli_query($conn, $sql)){
            echo "<h1>Data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h1> <br> <h2>Here's what we received</h2>";

            echo nl2br(" <h1> \n$username\n $topic\n "
                . "$content </h1>");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </center>
    
</body>
</html>