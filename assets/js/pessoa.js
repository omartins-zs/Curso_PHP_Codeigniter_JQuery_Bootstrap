$.post(baseUrl + "cidade/getCidades",
    {
        situacao: 1,
    },
    function (data) {
        alert(data);
    });