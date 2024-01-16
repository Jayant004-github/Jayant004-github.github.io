<?php
    include("connection.php");

    if(isset($_POST['submit'])){
        $decode = $_POST['decode'];

        $query = "SELECT * FROM ctf2 WHERE decode = '$decode'";
        $data = mysqli_query($conn, $query);

        $total= mysqli_num_rows($data);
        echo $total;

        if($total == 1){
            // echo "Login ok";
            header('location:display.php');
        }
        else{
            // echo "Login Failed";
            header('location:displayfailed.php');
        }
    }
?>





<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Inclusion Adventure</title>
</head>
<body>
    <h1>Welcome to the File Inclusion Adventure Challenge!</h1>
    <p>Explore the website and find a way to access sensitive information.</p>
    
    <?php
    // Include the requested file (vulnerable point)
    $page = $_GET['page'] ?? 'home';
    include("pages/$page.php");
    ?>
</body>
</html>
