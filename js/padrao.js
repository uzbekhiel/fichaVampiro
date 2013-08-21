var arr = new Array();
var tmp = new Array();
var tmp2 = new Array();
var flag = 0;

function valores(valor)
{
	tmp2 = valor.split(',');
	if(arr.length !=0){
		for(var i in arr){
			tmp = arr[i].split(",");
			if(tmp[0] == tmp2[0] && tmp[1] != tmp2[1]){
				arr[i] = ''+tmp2[0]+','+tmp2[1]+'';
			}
		}
		if(arr[arr.length-1] != valor && tmp[0] != tmp2[0]){
			for(var j = arr.length-1; j >= 0; j--)
			{
				if(arr[j] == valor){flag++;}
			}
			if(flag == 0){arr[arr.length] = valor;}
		}
	}else{
		arr.push(valor);
	}
}

function pegaValores()
{
	arr.push($('.cabecalho input#name').attr('value'));
	arr.push($('.cabecalho input#jogador').attr('value'));
	arr.push($('.cabecalho input#cronica').attr('value'));
	arr.push($('.cabecalho input#natureza').attr('value'));
	arr.push($('.cabecalho input#comportamento').attr('value'));
	arr.push($('.cabecalho input#cla').attr('value'));
	arr.push($('.cabecalho input#geracao').attr('value'));
	arr.push($('.cabecalho input#refugio').attr('value'));
	arr.push($('.cabecalho input#conceito').attr('value'));
}

$(document).ready(function(){
	$('span').click(function(){
        var paiClass = $(this).parent().attr('class');
		if( paiClass == 'trilha' || paiClass == 'antecedente' || paiClass == 'disciplina'){
			var idSpan = $(this).attr('id');
			var a = idSpan.split('_');
			var nome =  $('.'+paiClass+' select#'+a[1]+' option:selected').attr('value');
			var pai = $(this).parent().attr('id');
        	$('#'+pai+' span').css('background-image', 'url(imgs/white.png)');
        	$('#'+pai+' span:lt('+a[0]+')').css('background-image', 'url(imgs/black.png)');
			if(nome != '0'){
				valores(''+nome+','+a[0]+'');
			}
		}else{
			var pai = $(this).parent().attr('id');
       		var id = $(this).attr('id');
        	$('#'+pai+' span').css('background-image', 'url(imgs/white.png)');
        	$('#'+pai+' span:lt('+id+')').css('background-image', 'url(imgs/black.png)');
			valores(''+pai+','+id+'');
		}
    });
	
	$("#pt_bonus").keyup(function() {
		var valor = $("#pt_bonus").val().replace(/^(2[2-9]|[3-9][0-9])$/g,'21');
		$("#pt_bonus").val(valor);
	});
	
	$('#add').click(function() {  
	  return !$('#select1 option:selected').remove().appendTo('#select2');  
	 });  
	 $('#remove').click(function() {  
	  return !$('#select2 option:selected').remove().appendTo('#select1');  
	 }); 

});// JavaScript Document