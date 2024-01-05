<h1>Login failed.</h1>
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
