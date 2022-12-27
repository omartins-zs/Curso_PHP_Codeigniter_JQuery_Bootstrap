$.post(baseUrl + "cidade/getCidades",
    {
        situacao: 1,
    },
    function (data) {
        var c = JSON.parse(data);
        $.each(c, function (i, item) {
            $('#selectCidades').append('<option value="' + item.idCidade + '">' + item.cidade + ' </option>');
        })
    });
$('#selectCidades').change(function () {
    $('#selectCidades option:selected').each(function () {
        var id = $('#selectCidades').val();
        alert(id);

    })
})

$('#btnGetPessoas').click(function () {
	$('#tablePessoas').html(
        '<tr>'+
        '	<th style="width: 10px">#</th>'+
        '	<th>Nome</th>'+
        '	<th>Sobrenome</th>'+
        '	<th>Apelido</th>'+
        '	<th>Documento</th>'+
        '	<th>Cidade</th>'+				
        '</tr>'
);
    $.post(baseUrl + "pessoa/getPessoas",
        function (data) {
            var p = JSON.parse(data);
            $.each(p, function (i, item) {
                $('#tablePessoas').append(
                    '<tr>' +
                    ' <td> 1</td>' +
                    ' <td>' + item.nome + '</td>' +
                    ' <td>' + item.sobrenome + '</td>' +
                    ' <td>' + item.apelido + '</td>' +
                    ' <td>' + item.documento + '</td>' +
                    ' <td>' + item.cidade + '</td>' +
                    '</tr>');
            })
        });
});