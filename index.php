<!DOCTYPE html>
<html>
<head>
	<title>up</title>
</head>
<body>
	<?php

		if(isset($_POST['acao'])){
			$arquivo = $_FILES['file'];

			$arquivoNovo = explode('.',$arquivo['name']);
			if($arquivoNovo[sizeof($arquivoNovo)-1] != 'jpg'){
				die('voce não pode fazer upload deste tipo de arquivo');
			}else{
				echo "upload foi feito com sucesso!";
				move_uploaded_file($arquivo['tmp_name'],'upload/'.$arquivo['name']);
			}
		}
	?>

	<form action="" method="post" enctype="multipart/form-data">
		<input type="file" name="file" />
		<input type="submit" name="acao" value="Enviar" />
	</form>


</body>
</html>