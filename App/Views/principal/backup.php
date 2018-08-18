<?php
	require_once __DIR__ . "/includes/menu.php";
?>

<div class="container">
	<div class="row mt-5">
		<div class="col">
			<h1>Backup</h1>
		</div>
	</div>

	<div class="row">
		<div class="col">
			<form action="/executa" method="POST">
				<div class="form-row justify-content-md-center">
					<div class="col-md-6 form-group">
						<label>Opções:</label>
						<select name="opcao" id="opcao" class="form-control" required>
							<option value disabled="true" selected="true">Selecione uma opção</option>
							<option value="1">Backup Tradicional</option>
							<option value="2">Backup Dinâmico</option>
						</select>
					</div>
				</div>

				<div class="form-row">
					<div class="col form-group">
						<label>Caminho Backup:</label>
						<input type="text" name="caminhoBackup" id="caminho" class="form-control"/>
						<span class="help-block text-muted">Caminho que será salvo o backup! ex.: C:/backup</span>
					</div>
					<div class="col form-group">
						<label>Caminho Bin do MySQL:</label>
						<input type="text" name="caminhoMysql" id="caminhoMysql" class="form-control" />
						<span class="help-block text-muted">Caminho do Bin do MySQL! ex.: C:/MySQL5/bin</span>
					</div>
				</div>
				
				<div class="form-row">
					<div class="col form-group">
						<label>Host: </label>
						<input type="text" name="host" id="host" class="form-control" />
						<span class="help-block text-muted">Host (IP). ex.: localhost ou 127.0.0.1</span>
					</div>
					<div class="col form-group">
						<label>Usuário Banco:</label>
						<input type="text" name="user" id="user" class="form-control" />
						<span class="help-block text-muted">usuário do banco de dados! ex.: root</span>
					</div>
					<div class="col form-group">
						<label>Porta: </label>
						<input type="text" name="port" id="port" class="form-control" />
						<span class="help-block text-muted">Porta do MySQL. ex.: 3307</span>
					</div>
				</div>
				
				<div class="form-row">
					<div class="col form-group">
						<label>Senha: </label>
						<input type="password" name="pass" id="senha" class="form-control" />
						<span class="help-block text-muted">Senha do Mysql. ex.: root</span>
					</div>
					<div class="col form-group">
						<label>Base de Dados:</label>
						<input type="text" name="banco" id="banco" class="form-control" />
						<span class="help-block text-muted">Base de dados que será feito o backup. ex.: teste</span>
					</div>
				</div>

				<div class="form-row">
					<div class="col form-group" >
						<button type="submit" id="submit" class="btn btn-outline-primary">Fazer Backup</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<?php
	require_once __DIR__ . "/includes/footer.php";
?>