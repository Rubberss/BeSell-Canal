
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="description" content="Canal de atendimento do Cliente">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="author" content="Ruber Rodriguez">
	<title>BeSell Canal - Cliente</title>
	<link rel="icon" href="./_assets/img/bemol.png">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="./_assets/css/bootstrap.css">
	<!-- Material Design Bootstrap -->
	<link rel="stylesheet" href="./_assets/css/mdb.css">
	<link rel="stylesheet" href="./_assets/css/addons/datatables-select.min.css">
	<link rel="stylesheet" href="./_assets/css/style2.css">

</head>

<body class="fixed-sn white-skin">
	<?php include "./_layouts/dashboard.php" ?>
	<div class="container-fluid mt-5">
		<div class="row page-titles">
			<div class="col-md-5 col-8 align-self-center">
				<h3 class="text-themecolor m-b-0 m-t-0">Cadastrar Cliente</h3>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="./index.php">Voltar</a></li>
					<li class="breadcrumb-item active">Dados do cliente</li>
				</ol>
			</div>
		</div>
	</div>
	<main>
		<!-- Card -->
		<form method="POST" action="./_control/cadastrar-cliente.php" enctype="multipart/form-data"  style="color: #757575;">
			<section class="section card ">
				<div class="card-body">
				</div>
				<div class="card-body px-lg-5 pt-0">
					<div class="form-row md-form">
						<div class="col-6">
							<input type="text" id="input01" class="form-control" name="nome" required>
							<label for="input01">Nome completo</label>
						</div>
						<div class="col-6">
							<input type="text" attrname="doc" class="form-control"  name="cpf" required>
							<label for="input05">CPF</label>
						</div>
					</div>
					<div class="form-row">
						<div class="col-6">
							<div class="md-form">
								<input type="email" id="input02" class="form-control" name="email" required>
								<label for="input02">E-mail</label>
							</div>
						</div>
						<div class="col-6">
							<div class="md-form ">
								<input type="text" attrname="telephone1"  class="form-control" name="telefone" required>
								<label for="telefone"> Telefone </label>
							</div>
						</div>
					</div>
					<div class="form-row ">
						<div class="col-6">
							<div class="md-form ">
								<small>CEP</small>
								<input type="text" class="form-control"  maxlength="9" id="cep" name="cep">
							</div>
						</div>
						<div class="col-6">
							<div class="md-form ">
								<small>Rua</small>
								<input type="text" class="form-control " id="logradouro" name="rua" required>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-6">
							<div class="md-form">
								<input type="text" attrname="telephone1" class="form-control" name="complemento"required>
								<label for="telefone"> Complemento </label>
							</div>
						</div>
						<div class="col-6">
							<div class="md-form">
								<input type="text" attrname="telephone1" class="form-control "name="numero" required>
								<label for="telefone">Número</label>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-4">
							<div class="md-form">
								<small>Bairro</small>
								<input type="text" class="form-control" id="bairro" name="bairro" required>
							</div>
						</div>
						<div class="col-4">
							<div class="md-form">
								<small>Estado</small>
								<input type="text" attrname="telephone1" class="form-control" id="uf"  name="estado" required>
							</div>
						</div>
						<div class="col-4">
							<div class="md-form">
								<small>Cidade</small>
								<input type="text" class="form-control" id="localidade" name="cidade" required>
							</div>
						</div>
					</div>
					<div class="modal-footer d-flex justify-content-center">
						<button  class="btn  btn-primary" type="submit">Salvar</button>
					</div>
		</form>
		</div>
		</div>
		</section>
	</main>
	</div>
	</main>
	<?php include "./_layouts/footer.php" ?>
	<script src="./_assets/js/jquery-3.4.1.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="./_assets/js/popper.min.js"></script>
	<script type="text/javascript" src="./_assets/js/main.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="./_assets/js/bootstrap.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="./_assets/js/mdb.min.js"></script>
	<script type="text/javascript" src="./_assets/js/addons/datatables.min.js"></script>
	<script type="text/javascript" src="./_assets/js/addons/datatables-select.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-masker/1.1.0/vanilla-masker.min.js"></script>
	<script>
		function inputHandler(masks, max, event) {
			var c = event.target;
			var v = c.value.replace(/\D/g, '');
			var m = c.value.length > max ? 1 : 0;
			VMasker(c).unMask();
			VMasker(c).maskPattern(masks[m]);
			c.value = VMasker.toPattern(v, masks[m]);
		}

		var telMask = ['99 99999-9999', '99999-9999'];
		var tel = document.querySelector('input[attrname=telephone1]');
		VMasker(tel).maskPattern(telMask[0]);
		tel.addEventListener('input', inputHandler.bind(undefined, telMask, 14), false);

		var docMask = ['999.999.999-99'];
		var doc = document.querySelector('input[attrname=doc]');
		VMasker(doc).maskPattern(docMask[0]);
		doc.addEventListener('input', inputHandler.bind(undefined, docMask, 14), false);

		var docMask = ['99'];
		var doc = document.querySelector('input[attrname=ddd]');
		VMasker(doc).maskPattern(docMask[0]);
		doc.addEventListener('input', inputHandler.bind(undefined, docMask, 14), false);
	</script>


</body>

</html>