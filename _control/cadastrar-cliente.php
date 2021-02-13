<?php
    session_start();
    include_once("./database/connection.php");
	
	
	$msg = false;
    //Receber os dados do formulário
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
	$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
	$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
    $cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
    $rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_STRING);
    $bairro= filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
    $numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_STRING);
    $complemento = filter_input(INPUT_POST, 'complemento', FILTER_SANITIZE_STRING);
    $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
    $estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
	
	//Inserir no BD
	
	$query_cadastro = mysqli_query($connect,"INSERT INTO cliente(nome, email, cpf, telefone, cep, rua, bairro, numero, complemento, cidade, estado) VALUES ('$nome', '$email', '$cpf','$telefone','$cep','$rua','$bairro','$numero','$complemento','$cidade','$estado')");
	
	//Verifica se foi salvo
		if(mysqli_affected_rows($connect) > 0){  ?>
			<!--<script>
				Swal.fire(
  'Good job!',
  'You clicked the button!',
  'success'
);
				document.location.href = '../../_view/home';
			</script>-->
			<script>
				alert('Cadastro realizado com sucesso!');
				document.location.href = '../cadastro';
			</script>
			<?php
			exit;
		}else{  ?>
			<script>
				alert('Falha ao cadastrar aluno!');
				document.location.href = '../cadastro';
			</script>
			<?php
			exit;
		}
		$connect->close();
?>
