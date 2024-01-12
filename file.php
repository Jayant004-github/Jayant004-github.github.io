<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
    <video width="320" height="240" autoplay>
  <source src="Smartest Rick Roll but with a different link. ( 720 X 1280 ).mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">
Your browser does not support the video tag.

</video>
<h1>Never you give up. You all just got Rickrolled.<h1>
</center>
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
        // Custom 
        function decodeMessage(encodedMessage) {
            // Custom 
            let decodedMessage = &quot;&quot;;
            for (let i = 0; i &lt; encodedMessage.length; i++) {
                let charCode = encodedMessage.charCodeAt(i);
                if (charCode &gt;= 65 &amp;&amp; charCode &lt;= 90) { 
                    decodedMessage += String.fromCharCode(((charCode - 65 + 23) % 29) + 65);
                } else if (charCode &gt;= 97 &amp;&amp; charCode &lt;= 122) { 
                    decodedMessage += String.fromCharCode(((charCode - 97 + 23) % 29) + 97);
                } else {
                    decodedMessage += encodedMessage[i];
                }
            }
            return decodedMessage;
        }
        const encodedMessageElement = document.getElementById(&#39;encoded-message&#39;);
        const decodedMessageElement = document.getElementById(&#39;decoded-message&#39;);
        const encodedMessage = encodedMessageElement.textContent;
        const decodedMessage = decodeMessage(encodedMessage);
        decodedMessageElement.textContent = decodedMessage;
    &lt;/script&gt;
</script>
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
