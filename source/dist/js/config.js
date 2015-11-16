jQuery(function($){

	$('.gridItem>a').magnificPopup({
		type: 'ajax'
	});

	$('.sfTrgr').on('click', function() {
		$(this).next().stop().slideToggle(300);
		$(this).toggleClass('active');
	});

	$('.grid').masonry({
		columnWidth: 150,
		itemSelector: '.gridItem',
		gutter: 30,
		isFitWidth: true
	});

});
