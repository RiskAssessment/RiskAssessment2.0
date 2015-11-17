$(document).ready(function(){
	$.ajax({
		type:'post',		//Definimos o m�todo HTTP usado
		dataType: 'json',	//Definimos o tipo de retorno
		url: 'getdados.php',//Definindo o arquivo onde ser�o buscados os dados
		success: function(dados){
			for(var i=0;dados.length>i;i++){
				//Adicionando registros retornados na tabela
				$('#tabela').append('<tr><td>'+dados[i].id+'</td><td>'+dados[i].nome+'</td><td>'
				 +dados[i].cpf+'</td><td>'+dados[i].empresa+'</td><td>'+dados[i].risco+'</td></tr>');
			}
		}
	});
});