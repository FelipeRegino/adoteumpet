$.getJSON('./js/dados.json', function(result) {
	var id = window.location.search.substring(1).split('=')[1];
	var animal = result[id];

	$('#nome').text(animal.nome);

	$('#foto').attr('src', './images/' + animal.foto);

	$('#especie').text(animal.espécie);
	$('#raca').text(animal.raça);
	$('#cor').text(animal.cor);
	$('#idade').text(animal.idade);
	$('#sexo').text(animal.sexo);
	$('#cadastrado').text(animal.cadastrado ? 'sim' : 'não');

	for (var i = animal.vacinas.length - 1; i >= 0; i--) {
		$('#vacinas').append('<b><li>' + animal.vacinas[i] + '</li></b>');
	}
});