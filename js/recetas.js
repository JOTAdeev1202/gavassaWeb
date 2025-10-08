
	$(function(){

		var $ensaladaImperial = $('.ensalada-imperial a').simpleLightbox();

		$ensaladaImperial.on('show.simplelightbox', function(){
			console.log('Requested for showing');
		})

		var $macarronNapolitano = $('.macarron-napolitano a').simpleLightbox();

		$macarronNapolitano.on('show.simplelightbox', function(){
			console.log('Requested for showing');
		})

		var $mousse = $('.mousse a').simpleLightbox();

		$mousse.on('show.simplelightbox', function(){
			console.log('Requested for showing');
		})

		var $spaghettiAlPesto = $('.spaghetti-al-pesto a').simpleLightbox();

		$spaghettiAlPesto.on('show.simplelightbox', function(){
			console.log('Requested for showing');
		})

		var $tomatesRellenos = $('.tomates-rellenos a').simpleLightbox();

		$tomatesRellenos.on('show.simplelightbox', function(){
			console.log('Requested for showing');
		})

		var $pastaMatrichiana = $('.pasta-matrichiana a').simpleLightbox();

		$pastaMatrichiana.on('show.simplelightbox', function(){
			console.log('Requested for showing');
		})

		var $spaghettiCorleone = $('.spaghetti-corleone a').simpleLightbox();

		$spaghettiCorleone.on('show.simplelightbox', function(){
			console.log('Requested for showing');
		})

		var $macarronPacco = $('.macarron-pacco a').simpleLightbox();

		$macarronPacco.on('show.simplelightbox', function(){
			console.log('Requested for showing');
		})

		var $causePasta = $('.cause-de-pasta a').simpleLightbox();

		$causePasta.on('show.simplelightbox', function(){
			console.log('Requested for showing');
		})

		var $spaghettiOporto = $('.spaghetti-a-la-oporto a').simpleLightbox();

		$spaghettiOporto.on('show.simplelightbox', function(){
			console.log('Requested for showing');
		})

		var $ensaladaVerona = $('.ensalada-verona a').simpleLightbox();

		$ensaladaVerona.on('show.simplelightbox', function(){
			console.log('Requested for showing');
		})

		var $coditosQueso = $('.coditos-queso a').simpleLightbox();

		$coditosQueso.on('show.simplelightbox', function(){
			console.log('Requested for showing');
		})

		var $spaghettiVegano = $('.spaghetti-vegano a').simpleLightbox();

		$spaghettiVegano.on('show.simplelightbox', function(){
			console.log('Requested for showing');
		})

		


	var $gallery = $('.gallery a').simpleLightbox();
		var $brochure = $('.brochure-cat a').simpleLightbox();
		var $fitbrand = $('.gallery-fitbrand a').simpleLightbox();
		var $marypas = $('.gallery-marypas a').simpleLightbox();

		$gallery.on('show.simplelightbox', function(){
			console.log('Requested for showing');
		})


		$borchure.on('show.simplelightbox', function(){
			console.log('Requested for showing');
		})
		.on('shown.simplelightbox', function(){
			console.log('Shown');
		})
		.on('close.simplelightbox', function(){
			console.log('Requested for closing');
		})
		.on('closed.simplelightbox', function(){
			console.log('Closed');
		})
		.on('change.simplelightbox', function(){
			console.log('Requested for change');
		})
		.on('next.simplelightbox', function(){
			console.log('Requested for next');
		})
		.on('prev.simplelightbox', function(){
			console.log('Requested for prev');
		})
		.on('nextImageLoaded.simplelightbox', function(){
			console.log('Next image loaded');
		})
		.on('prevImageLoaded.simplelightbox', function(){
			console.log('Prev image loaded');
		})
		.on('changed.simplelightbox', function(){
			console.log('Image changed');
		})
		.on('nextDone.simplelightbox', function(){
			console.log('Image changed to next');
		})
		.on('prevDone.simplelightbox', function(){
			console.log('Image changed to prev');
		})
		.on('error.simplelightbox', function(e){
			console.log('No image found, go to the next/prev');
			console.log(e);
		});
	});

