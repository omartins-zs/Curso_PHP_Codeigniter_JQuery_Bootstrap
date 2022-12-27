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

$('#btnGetPessoas').click(function(){
    // alert('entrou no button');
    $.post(baseUrl + "pessoa/getPessoas",
        function (data) {
            alert(data);

            // var c = JSON.parse(data);
            // $.each(c, function (i, item) {
            //     $('#selectCidades').append('<option value="' + item.idCidade + '">' + item.cidade + ' </option>');
        });
});