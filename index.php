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





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Source Cipher Challenge</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: left;
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
        .button {
  background-color: #04AA6D; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
        }
.button2 {background-color: #FFFFFF;} 

    </style>
    


</head>
<body>
    <center>
    <h1>Welcome to the Source Cipher Challenge!</h1>
    <p>You've discovered a mysterious webpage with hidden information, Unravel the hidden message encrypted in the shadows of this code. Sharpen your cryptographic prowess, decipher the enigma, and unveil the secrets concealed within the digital veil. Inspect carefully and uncover the secret message encoded within. The hidden message is protected by a more advanced cryptographic technique. Can you crack the code and reveal the flag?</p>
</center>
    <div class="message-container">
    
        <center><p><strong>Hidden Message:</strong></p>
        <!-- <?php
        include('connection.php');
        $sqlget = "SELECT hiddenm FROM ctf2";
        $sqldata = mysqli_query($conn, $sqlget);


        
        while($record = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
            echo '<pre>';
            print_r($record);
            echo '</pre>';
        }
        ?> -->

        <?php

$htmlContent = file_get_contents('filename.txt');

// Use DOMDocument to parse HTML
$dom = new DOMDocument;
@$dom->loadHTML($htmlContent);

// Get the content within the 'encoded-message' element
$encodedMessageElement = $dom->getElementById('encoded-message');
$encodedMessage = $encodedMessageElement->textContent;

// Output the encoded message
echo "Hidden Message: " . $encodedMessage;

?>

    
    <!-- <form action="#" method="POST" autocomplete="off">
    <div class="form-group">
                <input type="password" class="form-control" name="decode" placeholder="Decoded Message">
            </div> -->
    </center>
            <!-- <center>
            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="Submit" name="submit">
            </div>
            </center> -->
            <a href="file.php"><button class="button button2"></button></a>
    </form>

    </div>
    
    
    <p><strong>Challenge Steps:</strong></p>
    <ol>
    <li>Visit the website provided.</li>
        
        <li>Decode the hidden message to reveal the message.</li>
        <li>After revealing the message, with your cryptography poweress decode it further to replace insert.</li> 
        <li>Submit the decoded message as the flag.</li>
    </ol>

    <script>
        
        
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
    
    </script>
</body>
</html>