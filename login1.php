
<?php
    include("connection.php");

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $pwd = $_POST['password'];

        $query = "SELECT * FROM CTF WHERE username = '$username' && password = '$pwd'";
        $data = mysqli_query($conn, $query);

        $total= mysqli_num_rows($data);
        echo $total;

        if($total == 1){
            // echo "Login ok";
            header('location:display1.php');
        }
        else{
            // echo "Login Failed";
            header('location:displayfailed1.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Secure Portal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1><center>Login Secure Portal</center></h1>
    <h3><strong><center><b>Uncover the secret key hidden in plain sight; the doorway to unauthorized access awaits a clever mind. Navigate the labyrinth of cyberspace, where encrypted secrets lie dormant. Unravel the enigma, exploit the anomalies, and breach the impervious fortress to claim your victory in this digital quest.</b></center></strong></h3>
    <p><center>Only letters and numbers allowed for username and password.</center></p>
    <div class="container">
        
        <form action="#" method="POST" autocomplete="off">
            <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="User Name">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <center>
            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="Submit" name="submit">
            </div>
            </center>
        </form>
    </div>
</body>
</html>

