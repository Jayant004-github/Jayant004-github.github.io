<h1>Login failed.</h1>
<script>
       &lt;script&gt;
// &lt;![CDATA[  &lt;-- For SVG support
	if (&#39;WebSocket&#39; in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName(&quot;link&quot;));
				var head = document.getElementsByTagName(&quot;head&quot;)[0];
				for (var i = 0; i &lt; sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href &amp;&amp; typeof rel != &quot;string&quot; || rel.length == 0 || rel.toLowerCase() == &quot;stylesheet&quot;) {
						var url = elem.href.replace(/(&amp;|\?)_cacheOverride=\d+/, &#39;&#39;);
						elem.href = url + (url.indexOf(&#39;?&#39;) &gt;= 0 ? &#39;&amp;&#39; : &#39;?&#39;) + &#39;_cacheOverride=&#39; + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === &#39;http:&#39; ? &#39;ws://&#39; : &#39;wss://&#39;;
			var address = protocol + window.location.host + window.location.pathname + &#39;/ws&#39;;
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == &#39;reload&#39;) window.location.reload();
				else if (msg.data == &#39;refreshcss&#39;) refreshCSS();
			};
			if (sessionStorage &amp;&amp; !sessionStorage.getItem(&#39;IsThisFirstTime_Log_From_LiveServer&#39;)) {
				console.log(&#39;Live reload enabled.&#39;);
				sessionStorage.setItem(&#39;IsThisFirstTime_Log_From_LiveServer&#39;, true);
			}
		})();
	}
	else {
		console.error(&#39;Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.&#39;);
	}
	// ]]&gt;
        // Custom substitution cipher function
        function decodeMessage(encodedMessage) {
            // Custom implementation (you can replace this with your own cipher)
            let decodedMessage = &quot;&quot;;
            for (let i = 0; i &lt; encodedMessage.length; i++) {
                let charCode = encodedMessage.charCodeAt(i);
                if (charCode &gt;= 65 &amp;&amp; charCode &lt;= 90) { // Uppercase letters
                    decodedMessage += String.fromCharCode(((charCode - 65 + 23) % 29) + 65);
                } else if (charCode &gt;= 97 &amp;&amp; charCode &lt;= 122) { // Lowercase letters
                    decodedMessage += String.fromCharCode(((charCode - 97 + 23) % 29) + 97);
                } else {
                    decodedMessage += encodedMessage[i];
                }
            }
            return decodedMessage;
        }

        // Get the encoded message element
        const encodedMessageElement = document.getElementById(&#39;encoded-message&#39;);
        // Get the decoded message element
        const decodedMessageElement = document.getElementById(&#39;decoded-message&#39;);

        // Decode the message and display it
        const encodedMessage = encodedMessageElement.textContent;
        const decodedMessage = decodeMessage(encodedMessage);
        decodedMessageElement.textContent = decodedMessage;
    &lt;/script&gt;
</script>
