$(function(){
	//Pesquisar os cursos sem refresh na página
	$("#pesquisa_cliente").keyup(function(){
		
		var pesquisa = $(this).val();
		
		//Verificar se há algo digitado
		if(pesquisa != ''){
			var dados = {
				palavra : pesquisa
			}		
			$.post('busca.php', dados, function(retorna){
				//Mostra dentro da ul os resultado obtidos 
				$(".resultado_cliente").html(retorna);
			});
		}else{
			$(".resultado_cliente").html('');
		}		
	});
});



$(function a(){
	//Pesquisar os cursos sem refresh na página
	$("#pesquisa_vendedor").keyup(function(){
		
		var pesquisa_vendedor = $(this).val();
		
		//Verificar se há algo digitado
		if(pesquisa_vendedor != ''){
			var dados = {
				palavra : pesquisa_vendedor
			}		
			$.post('busca.php', dados, function(retorna){
				//Mostra dentro da ul os resultado obtidos 
				$(".resultado_vendedor").html(retorna);
			});
		}else{
			$(".resultado_vendedor").html('');
		}		
	});
});