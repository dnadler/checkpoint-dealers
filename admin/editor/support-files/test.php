<!doctype HTML>
<html>
<head>
	<script>
		function changeTest ( form ) { form.echo.value = form.orig.value }
	</script>
</head>
<body>
<form action="../action/return.html" method="post" id="origForm" enctype="application/x-www-form-urlencoded">
  <label for="orig">Original Value: </label>
  <input id="orig" onchange="changeTest(this.form)" name="orig" type="text"></input>
  <br clear="none"></br>
  <label for="echo">Echoed Value: </label>
  <input id="echo" type="text"></input>
</form>
</body>
</html>