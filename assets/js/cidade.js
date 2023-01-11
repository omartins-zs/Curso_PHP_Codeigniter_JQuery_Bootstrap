$.post(
	baseUrl + "cidade/getCidades",
	{
		situacao: 1,
	},
	function (data) {
		var obj = JSON.parse(data);
		var estilo =
			"width:100px;height:100px;-moz-border-radius:50%;-webkit-border-radius:50%;border-radius:50%;background:#5CB85C";
		output = "";
		$.each(obj, function (i, item) {
			output +=
				" <li>" +
				' <div style="' +estilo +'" class="clsCidade">' +
				'<input type="text" style="width="50%" value="' +item.cidade +'" class=""clsNomeCidade">' +
				'<a class="users-list-name" href="#">' + item.cidade + "</a>" +
				'<span class="users-list-date">' + item.idCidade + "</span>" +
				" </li>";
		});

		$("#listCidades").html(output);
		$("#listCidades .clsCidade").click(function () {
			var i = $(".clsCidade").index(this);
			var nc = $(".clsNomeCidade:eq(" + i + ")").val();
			alert(i + nc);
		});
	}
);

$("#btnGravar").click(function () {
	var i = 0;
	$("#listCidades .clsNomeCidade").each(function () {
		var nc = $(".clsNomeCidade:eq(" + i + ")").val();
		i++;
		alert(nc);

		$.post("gravarCidade", function (data) {
			alert("Foi gravado corretamente");
		});
	});
});
