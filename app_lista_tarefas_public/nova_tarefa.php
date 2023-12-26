<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>App Lista Tarefas</title>

		<link rel="stylesheet" href="css/estilo.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
   		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	</head>

	<body>
		<nav class="navbar navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="#">
					<img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
					App Lista Tarefas
				</a>
			</div>
		</nav>

		<?php
			if(isset($_GET['inclusao']) && $_GET['inclusao'] == 1 ) {
		?>				
		<div class="modal fade" id="tarefainseridacomsucesso" tabindex="-1" aria-labelledby="tarefainseridacomsucesso" aria-hidden="true" >
        	<div class="modal-dialog">
                <div class="modal-content border rounded">
                    <div class="modal-header bg-success text-white">
                        <h5 class="modal-title bg-sucess" id="tarefainseridacomsucesso">Tarefa Inserida com sucesso!!</h5>
                    </div>
					<div class="modal-body">
						<p>Tarefa anotada com sucesso!!</p>
					</div>
                </div>
            </div>
        </div>

        <script>$('#tarefainseridacomsucesso').modal('show');</script>
		<?php
			}
		?>

		<div class="container app">
			<div class="row">
				<div class="col-md-3 menu">
					<ul class="list-group">
						<li class="list-group-item"><a href="index.php">Tarefas pendentes</a></li>
						<li class="list-group-item active"><a href="#">Nova tarefa</a></li>
						<li class="list-group-item"><a href="todas_tarefas.php">Todas tarefas</a></li>
					</ul>
				</div>

				<div class="col-md-9">
					<div class="container pagina">
						<div class="row">
							<div class="col">
								<h4>Nova tarefa</h4>
								<hr />

								<form method="post" action="tarefa_controller.php?acao=inserir" name="myForm"onsubmit="return validateForm()">
									<div class="form-group">
										<label>Descrição da tarefa:</label>
										<input type="text" class="form-control" placeholder="Exemplo: Lavar o carro" name="tarefa">
									</div>
									<button class="btn btn-success">Cadastrar</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>
		function validateForm() {
			var x = document.forms["myForm"]["tarefa"].value;
			if (x == "") {
				$('#erroentrada').modal('show');
				return false;
			}
		}
		</script>
		<div class="modal fade" id="erroentrada" tabindex="-1" aria-labelledby="erroentrada" aria-hidden="true" >
        	<div class="modal-dialog">
                <div class="modal-content border rounded">
                    <div class="modal-header bg-warning text-white">
                        <h5 class="modal-title bg-warning" id="erroentrada">Entrada vazia!!</h5>
                    </div>
					<div class="modal-body">
						<p>Entre com alguma informação para cadastrar a tarefa!!</p>
					</div>
                </div>
            </div>
        </div>
	</body>
</html>