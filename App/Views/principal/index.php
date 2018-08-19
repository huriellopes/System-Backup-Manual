<?php 
	require_once __DIR__ . "/includes/menu.php";
?>

<div class="container">
	<div class="row mt-3">
		<div class="col mt-5">
			<div class="alert alert-warning" role="alert">
				<h3 class="text-center"><i class="fas fa-exclamation-triangle"></i></h3>
				<h4 class="alert-heading text-center">Atenção!</h4>
				<p class="text-justify">
					O sistema de backup manual tem o objetivo de trazer facilidade em fazer o backup de um banco de dados, podendo ser feito de duas formas! Um é no estilo do phpmyadmin, e outro que é bastante utilizado por muitas empresas! Também vem com a função de fazer restauração de backup de uma forma mais prática e fácil! <strong>Obs.: </strong>Para fazer a restauração do banco de dados, você deverá criar antes o banco, para restaurar as tabelas e os dados do banco. <strong>ex.:</strong> <strong>CREATE DATABASE</strong> teste;
				</p>
				<hr />
				<p class="mb-0 text-center">
					Sistema feito por: Huriel Lopes - <i class="far fa-copyright far-1x"></i> Todos os Direitos Reservados
				</p>
			</div>
		</div>
	</div>
</div>

<?php 
	require_once __DIR__ . "/includes/footer.php";
?>