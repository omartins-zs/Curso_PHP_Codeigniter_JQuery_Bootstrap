$.post(baseUrl + "nota/getNotas",
	function (data) {
		var obj = JSON.parse(data);
		var estilo = "background-color: transparent;border: 0px; outline: none; text-align: center;width: 100 %";
		$.each(obj, function (i, item) {
			$('#tableNotas').append(
				'<tr>' +
				' <td> 1</td>' +
				' <td>' + item.aluno + '</td>' +
				' <td><input type="text" value="' + item.a + '" style="' + estilo + '" maxlenght="2" class="nota1></td>' +
				' <td><input type="text" value="' + item.b + '" style="' + estilo + '" maxlenght="2" class="nota2></td>' +
				' <td><input type="text" value="' + item.c + '" style="' + estilo + '" maxlenght="2" class="nota3></td>' +
				' <td><input type="text" value="' + item.d + '" style="' + estilo + '" maxlenght="2" class="nota4></td>' +
				' <td><input type="text" value="' + item.notaFinal + '" style="' + estilo + '" maxlenght="2" class="notaFinal></td>' +
				'</tr>'
			);
		});
		$('input[type=text]').focus(function () {
			$(this).select();
		});
		$('input[type=text]').focusot(function () {
			if ($(this).val() > 20) {
				$(this).focus();
				$(this).select();
			}
		})
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
