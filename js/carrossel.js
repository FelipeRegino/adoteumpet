$.getJSON('./js/dados.json', function(result) {
	for (var i = 0; i <= result.length - 1; i++) {
		$('.row.carrossel').append('<div class="four-columns item"><a href="./detalhes.html?id=' + i + '"><img src="images/' + result[i].foto + '" alt="' + result[i].nome + '"></a><div class="carousel-caption"><h3>' + result[i].nome + '</h3></div></div>');
		if(i % 4 == 0) {
			if(i == 0) {
				classes = 'active carousel-dot';
			} else {
				classes = 'carousel-dot';
			}
			$('.carousel-indicators>ol').append('<li class="' + classes + '"></li>');
		}
	}

	$(function () {
		var width = parseInt($('.carrossel .four-columns').outerWidth()) * parseInt($('.carrossel .four-columns').length) + parseInt($('.carrossel').css('padding'));
		$('.carrossel').css('width', width);

		var numItens = 4;
		
		var ident = 0;
		var count = ($('.carrossel .four-columns').length / numItens) - 1;
		var slide = ($('.carrossel .four-columns').outerWidth() * numItens);

		$('.left').hide();

		$('.right').click(function () {
			if (ident < count) {
				ident++;
				$('.carrossel').animate({'margin-left': '-=' + slide + 'px'}, 500);
				$('.carousel-dot.active').toggleClass('active');
				$('.carousel-dot').eq(ident).toggleClass('active');
				$('left').show();
			}
			if (ident >= count) {
				$('.right').hide();
			}
		});

		$('.left').click(function () {
			if (ident >= 1) {
				ident--;
				$('.carrossel').animate({'margin-left': '+=' + slide + 'px'}, 500);
				$('.carousel-dot.active').toggleClass('active');
				$('.carousel-dot').eq(ident).toggleClass('active');
				$('right').show();
			}
			if (ident < 1) {
				$('.left').hide();
			}
		});

		$('.carousel-dot').click(function () {
			ident = $(this).index();
			move = slide * ident;
			$('.carrossel').animate({'margin-left': '-' + move + 'px'}, 500);

			$('.carousel-dot.active').toggleClass('active');
			$(this).toggleClass('active');

			if($(this).index() == 0) {
				$('.left').hide();
				$('.right').show();
			} else if ($(this).index() + 1 == $('.carousel-dot').length) {
				$('.right').hide();
				$('.left').show();
			} else {
				$('.left').show();
				$('.right').show();
			}
		});
	});

});