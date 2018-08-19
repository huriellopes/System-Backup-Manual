// Função para retornar o json
$(document).ready(function () {
	$("#submit").on("click", function () {
		var url = "http://localhost:8080/executa";

		$.ajax({
			type: "GET",
			url: url,
			datatype: "JSON",
			contetType: "application/json; charset=utf-8",
			cache: false,
			success: function (retorno) {
				if (retorno) {
					swal('Sucesso','Backup Feito com Sucesso!','success',document.location.href="http://localhost:8080/backup");
				} else {
					swal('Atenção','Ops... Deu algo errado!','error',document.location.href="http://localhost:8080/backup");
				}
			}
		});
	});
});

// Função para retornar o json
$(document).ready(function () {
	$("#restaura").on("click", function () {
		var url = "http://localhost:8080/RestauraBackup";

		$.ajax({
			type: "GET",
			url: url,
			datatype: "JSON",
			contetType: "application/json; charset=utf-8",
			cache: false,
			success: function (retorno) {
				if (retorno) {
					swal('Sucesso','Restauração feita com Sucesso!','success',document.location.href="http://localhost:8080/restaura");
				} else {
					swal('Atenção','Ops... Deu algo errado!','error',document.location.href="http://localhost:8080/restaura");
				}
			}
		});
	});
});

// Função para mostrar e oultar elementos
$(document).ready(function () {
	$("#opcao").on("change", function () {
		var opcao = $("#opcao").val();

		// Verifica as opções e mostra os campos necessários
		if (opcao === '1') {
			$("#caminho").prop('disabled', false);
			$("#caminhoMysql").prop('disabled', true);
			$("#host").prop('disabled', false);
			$("#user").prop('disabled', false);
			$("#port").prop('disabled', false);
			$("#senha").prop('disabled', false);
			$("#banco").prop('disabled', false);
		} else if (opcao == '2') {
			$("#caminho").prop('disabled', false);
			$("#caminhoMysql").prop('disabled', false);
			$("#host").prop('disabled', false);
			$("#user").prop('disabled', false);
			$("#port").prop('disabled', false);
			$("#senha").prop('disabled', false);
			$("#banco").prop('disabled', false);
		} 
	});
});