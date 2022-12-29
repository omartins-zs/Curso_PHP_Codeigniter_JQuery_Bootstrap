$.post(baseUrl + "nota/getNotas",
	function (data) {
		var obj = JSON.parse(data);
		var style = "background-color: transparent;border: 0px; outline: none; text-align: center;width: 100%";
		$.each(obj, function (i, item) {
			$('#tableNotas tbody').append(
				'<tr class="linhaNotas">' +
				' <td> 1</td>' +
				' <td><div class="aluno" id="' + item.idPessoa + '"></div>' + item.aluno + '</td>' +
				' <td><input type="text" value="' + item.a + '" style="' + style + '" maxlength="2" class="nota1"></td>' +
				' <td><input type="text" value="' + item.b + '" style="' + style + '" maxlength="2" class="nota2"></td>' +
				' <td><input type="text" value="' + item.c + '" style="' + style + '" maxlength="2" class="nota3"></td>' +
				' <td><input type="text" value="' + item.d + '" style="' + style + '" maxlength="2" class="nota4"></td>' +
				' <td><input type="text" value="' + item.notaFinal + '" style="' + style + '" maxlength="2" class="notaFinal"></td>' +
				'</tr>'
			);
		});
		$('input[type=text]').focus(function () {
			$(this).select();
		});

		$('input[type=text]').focusout(function () {
			if ($(this).val() > 20) {
				alert('Este valor é invalido!');
				$(this).focus();
				$(this).select();
			}
		});

		$('#tableNotas .nota4').keyup(function () {
			var i = $('.nota4').index(this);

			var n1 = $('.nota1:eq(' + i + ')').val();
			var n2 = $('.nota2:eq(' + i + ')').val();
			var n3 = $('.nota3:eq(' + i + ')').val();

			// var n4 = $('.nota1:eq('+i+')').val();
			var media = (parseFloat(n1) + parseFloat(n2) + parseFloat(n3) + parseFloat($(this).val())) / 4;

			$('.notaFinal:eq(' + i + ')').val(media);
		});
	});


            // alert(data);
            // // situacao: 1,
            // // },
//             $('#selectCidades').change(function () {
//     $('#selectCidades option:selected').each(function () {
//             var id = $('#selectCidades').val();

//         })
// })

// $('#btnGetPessoas').click(function () {
//     	$('#tablePessoas').html(
//                 '<tr>'+
//                 '	<th style="width: 10px">#</th>'+
//         '	<th>Nome</th>'+
//         '	<th>Sobrenome</th>'+
//         '	<th>Apelido</th>'+
//         '	<th>Documento</th>'+
//         '	<th>Cidade</th>'+
//         '</tr>'
// );
//     $.post(baseUrl + "pessoa/getPessoas",
//         function (data) {
//             var p = JSON.parse(data);
//             $.each(p, function (i, item) {
//                     $('#tablePessoas').append(
//                             '<tr>' +
//                             ' <td> 1</td>' +
//                             ' <td>' + item.nome + '</td>' +
//                             ' <td>' + item.sobrenome + '</td>' +
//                     ' <td>' + item.apelido + '</td>' +
//                     ' <td>' + item.documento + '</td>' +
//                     ' <td>' + item.cidade + '</td>' +
//                     '</tr>');
//             })
//         });
// });
// <th>Aluno</th>
// <th>1B</th>
// <th>2B</th>
// <th>3B</th>
// <th>4B</th>
// <th>Final</th>
// < option value = "' + item.idCidade + '" > ' + item.cidade + ' </ > ');
