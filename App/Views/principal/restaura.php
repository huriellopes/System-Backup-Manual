<?php
	require_once __DIR__ . "/includes/menu.php";
?>

<div class="container">
	<div class="row mt-5">
		<div class="col">
			<h1>Restauração</h1>
		</div>
	</div>

	<div class="row">
		<div class="col">
			<form action="/restaurabackup" method="POST">

				<div class="form-row">
					<div class="col form-group">
						<label>Caminho Backup:</label>
						<input type="text" name="caminhoBackup" class="form-control" required autofocus />
						<span class="help-block text-muted">Caminho que será salvo o backup! ex.: C:/backup</span>
					</div>
					<div class="col form-group">
						<label>Caminho Bin do MySQL:</label>
						<input type="text" name="caminhoMysql" class="form-control" required />
						<span class="help-block text-muted">Caminho do Bin do MySQL! ex.: C:/MySQL5/bin</span>
					</div>
				</div>
				
				<div class="form-row">
					<div class="col form-group">
						<label>Host: </label>
						<input type="text" name="host" class="form-control" required />
						<span class="help-block text-muted">Host (IP). ex.: localhost ou 127.0.0.1</span>
					</div>
					<div class="col form-group">
						<label>Usuário Banco:</label>
						<input type="text" name="user" class="form-control" required />
						<span class="help-block text-muted">usuário do banco de dados! ex.: root</span>
					</div>
					<div class="col form-group">
						<label>Porta: </label>
						<input type="text" name="port" class="form-control" required />
						<span class="help-block text-muted">Porta do MySQL. ex.: 3307</span>
					</div>
				</div>
				
				<div class="form-row">
					<div class="col form-group">
						<label>Senha: </label>
						<input type="password" name="pass" class="form-control" required />
						<span class="help-block text-muted">Senha do Mysql. ex.: root</span>
					</div>
					<div class="col form-group">
						<label>Base de Dados:</label>
						<input type="text" name="banco" class="form-control" required />
						<span class="help-block text-muted">Base de dados que será feito a restauração. ex.: teste</span>
					</div>
				</div>

				<div class="form-row">
					<div class="col form-group" >
						<button type="submit" id="restaura" class="btn btn-outline-primary">Fazer Restauração</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<?php
	require_once __DIR__ . "/includes/footer.php";
?>