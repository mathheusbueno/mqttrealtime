<!DOCTYPE html>
<meta http-equiv=”Content-Type” content=”text/html; charset=iso-8859-1″>
<html>

	<head>
		<meta charset="UTF-8">
		<title>@mathheusbueno</title>
	</head>
	<body>
<center>

		<h2 align=center>Developed by LKZ</h2>
		<h3 id="temp_display">Aguardando atualização do Nivel...</h3>
		<h3 id="humidity_display">Aguardando atualização da Vazão...</h3>
		<h3 id="led_status">Aguardando a atualização do LED...</h3>
		<button id="status_button" type="button" onclick="led_toggle();">LED!</button>


</br></br></br></br></br></br></br>
Controle do sistema:
	<form name="form">
	<input type=text name="texto">
	<input type=button value="Setar" onClick="verificarTexto()">
	</form>


	</script>
		<script src="lib/mqttws31.js"></script>
		<script src="lkz.js"></script>
		<script>connect();</script>
</center>
	</body>
</html>
