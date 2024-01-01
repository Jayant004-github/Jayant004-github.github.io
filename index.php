<?php
    include("connection.php");

    if(isset($_POST['submit'])){
        $pwd = $_POST['password'];

        $query = "SELECT * FROM ctf2 WHERE password = '$pwd'";
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





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Source Cipher Challenge</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
            background-color: #f4f4f4;
        }
        h1 {
            color: #333;
        }
        .message-container {
            margin: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #fff;
        }
    </style>
</head>
<body>
    <h1>Welcome to the Source Cipher Challenge!</h1>
    <p>You've discovered a mysterious webpage with hidden information, Unravel the hidden message encrypted in the shadows of this code. Sharpen your cryptographic prowess, decipher the enigma, and unveil the secrets concealed within the digital veil. Inspect the source code carefully and uncover the secret message encoded within. The hidden message is protected by a more advanced cryptographic technique. Can you crack the code and reveal the flag?</p>

    <div class="message-container">
        <p><strong>Hidden Message:</strong></p>
        <p id="encoded-message">1T5V3I70X_0L_N7SR!</p>
        <!-- <p><strong>Decoded Message:</strong></p>
        <p id="decoded-message"></p> -->
    
    <form action="#" method="POST" autocomplete="off">
    <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Decoded Message">
            </div>
            <center>
            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="Submit" name="submit">
            </div>
            </center>
    </form>
    </div>
    <p><strong>Challenge Steps:</strong></p>
    <ol>
        <li>Visit the website provided.</li>
        
        <li>Decode the hidden message to reveal the flag.</li>
        <li>Submit the decoded message as the flag.</li>
    </ol>

    <script>
        // Custom substitution cipher function
        function decodeMessage(encodedMessage) {
            // Custom implementation (you can replace this with your own cipher)
            let decodedMessage = "";
            for (let i = 0; i < encodedMessage.length; i++) {
                let charCode = encodedMessage.charCodeAt(i);
                if (charCode >= 65 && charCode <= 90) { // Uppercase letters
                    decodedMessage += String.fromCharCode(((charCode - 65 + 23) % 29) + 65);
                } else if (charCode >= 97 && charCode <= 122) { // Lowercase letters
                    decodedMessage += String.fromCharCode(((charCode - 97 + 23) % 29) + 97);
                } else {
                    decodedMessage += encodedMessage[i];
                }
            }
            return decodedMessage;
        }

        // Get the encoded message element
        const encodedMessageElement = document.getElementById('encoded-message');
        // Get the decoded message element
        const decodedMessageElement = document.getElementById('decoded-message');

        // Decode the message and display it
        const encodedMessage = encodedMessageElement.textContent;
        const decodedMessage = decodeMessage(encodedMessage);
        decodedMessageElement.textContent = decodedMessage;
    </script>
</body>
</html>
