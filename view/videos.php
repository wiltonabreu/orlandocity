<?php include_once("header.php");?>	

<link rel="stylesheet" href="https://cdn.plyr.io/3.4.7/plyr.css">

<section>
	<div id="call-to-action">

		<div class="container">

			<div class="row text-center">
				<h2>Videos<hr></h2>
				
			</div>

			<div class="row">

				<video id="player" playsinline controls>
				    <source src="mp4/highlights.mp4" type="video/mp4" poster="img/highlights.jpg">

				    <track kind="captions" label="Português(BR)" src="vtt/legendas.vtt" srclang="pt-br" default>
	    
				    
				</video>
					
				
			</div>
			
			

		</div>

	</div>

	<div id="news" class="container">

		<div class="row text-center">
			<h2>Latest News<hr></h2>
        </div>

		<div class="row thumbnails owl-carousel owl-theme">

			<div class="item" data-video="highlights">
				<div class="item-inner">
					<img src="img/highlights.jpg">
					<h3>Highlights</h3>							
				</div>
			</div>

			<div class="item" data-video="Orlando_City_Foundation_2015">
				<div class="item-inner">
					<img src="img/Orlando_City_Foundation_2015.jpg">
					<h3>Orlando City Foundation 2015</h3>
					
				</div>
			</div>
			<div class="item" data-video="highlights">
				<div class="item-inner">
					<img src="img/highlights.jpg">
					<h3>Highlights</h3>							
				</div>
			</div>

			<div class="item" data-video="Orlando_City_Foundation_2015">
				<div class="item-inner">
					<img src="img/Orlando_City_Foundation_2015.jpg">
					<h3>Orlando City Foundation 2015</h3>
					
				</div>
			</div>				
			
		</div>
	</div>

</section>

				

<?php include_once("footer.php");?>


<script src="https://cdn.plyr.io/3.4.7/plyr.js"></script>
<script>
		 $(function(){
		 	$(".thumbnails .item").on("click", function(){
		 		
		 		$("video").attr({
		 			"src":"mp4/"+$(this).data('video')+".mp4",
		 			"poster":"img/"+$(this).data('video')+".jpg"

		 		});
		 	});

		 });
</script>
<script>const player = new Plyr('#player');</script>