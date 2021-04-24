<html>
	<head>
		<title>Example The Use of API</title>
	</head>
	<body>
		<form action="" method="POST">
			<input type="text" placeholder="Nomor Permohonan" id="no_permohonan" name="no_permohonan" required/>
			<input type="submit" value="get"/>
		</form>
	</body>
	
	<?php
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$no_permohonan = $_POST['no_permohonan'];
			header('Location: https://sicantikws.layanan.go.id/api/TemplateData/keluaran/30207.json?no_permohonan='.$no_permohonan);
			exit();
		}
	?>
</html>
