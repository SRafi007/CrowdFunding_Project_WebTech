<!DOCTYPE HTML>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<script type="text/javascript">

		function loadDoc()
		{
			const xhttp= new XMLHttprequest();
			xhttp.onload=function(){
				document.getElementById('txt1').innerHTML="hey bangladesh";
			}
			xhttp.send();
		}
		
	</script>
</head>
<body>

	<div id='info1'>
		<h3 id="txt1">hello world</h3>
		<button type='button' onclick="loadDoc()">change content	
		</button>
	</div>
	<table>
		
	</table>
</body>
</html>