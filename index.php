<!DOCTYPE html>
<head>
<title>Seite im Aufbau</title>

<style type="text/css"> 
			html, body {
				width:100%;
				height:100%;
				padding:0;
				margin:0;
				font-family:Verdana, Arial, Helvetica, sans-serif;
				font-size:11px;
				line-height:18px;
				color:#333;
			}
 
			div#centerhelper {
				width:1px;
				height:50%;
				margin-bottom:-250px; /* half of container's height */
				float:left;
			}
			
			div#container {
				width:600px;
				height:300px;
				margin:0 auto;
				clear:left;
			}
			
			div#content {
				text-align:center;
			}
			
			a {
				color:#333;
			}
		</style> 

</head>

<body>

<div id="centerhelper"></div>
<div id="container">
<div id="content">
<img src="under-cunstruction-logo.png" width="600" height="120" alt="Logo" />
<p><strong><?php $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

echo $url;

?></strong></p><p>

Diese Website wird aktuell von <a href="http://www.kulturbanause.de">kulturbanause</a> entwickelt. </p></div>
</div>
</body>
</html>
