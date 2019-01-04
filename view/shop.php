<?php include_once("header.php");?>	

<section>
	<div class="container" id="destaque-produtos-container" ng-controller="destaque-controller">

		<div id="destaque-produtos" class="owl-carousel">
			<!--<div class="owl-carousel"> -->
				<div class="item"  ng-repeat="produto in produtos">
					<div class="row">

						<div class="col-md-6 col-imagem">
							<img src="img/produtos/{{produto.foto_principal}}" alt="{{produto.nome_prod_longo}}">
						</div>

						<div class="col-md-6 col-descricao">
							<h2>{{produto.nome_prod_longo}}</h2>
							<div class="box-valor">
								<div class="text-noboleto text-arial-cinza">no boleto</div>
								<div class="text-por text-arial-cinza">por</div>
								<div class="text-reais text-roxo">R$</div>
								<div class="text-valor text-roxo">{{produto.preco}}</div>
								<div class="text-valor-centavos text-roxo">,{{produto.centavos}}</div>
								<div class="text-parcelas text-arial-cinza">ou em até {{produto.parcelas}}x de {{produto.parcela}}</div>
								<div class="text-total text-arial-cinza">Total a prazo R$ {{produto.total}}</div>
								
							</div>
							<a href="#" class="btn btn-comprar text-roxo"><i class="fa fa-shopping-cart"></i>compre agora</a>
							
						</div>
					</div>
				</div>
				

			<!--</div> -->
		</div>

		<button type="button" id="btn-destaque-prev"><i class="fa fa-angle-left"></i></button>
        <button type="button" id="btn-destaque-next"><i class="fa fa-angle-right"></i></button>

	</div>	

	<div id="promocoes" class="container">

		<div class="row">
			<div class="col-md-2">

				<div class="box-promocao box-1">
					<p>ecolha por desconto</p>
					
				</div>
				
			</div>
			<div class="col-md-10">

				<div class="row-fluid">

					<div class="col-md-3">
						<div class="box-promocao">
							<div class="text-ate">até</div>
							<div class="text-numero">40</div>
							<div class="text-porcento">%</div>
							<div class="text-off">off</div>					
						</div>
					</div>

					<div class="col-md-3">
						<div class="box-promocao">
							<div class="text-ate">até</div>
							<div class="text-numero">60</div>
							<div class="text-porcento">%</div>
							<div class="text-off">off</div>	
					
						</div>
					</div>

					<div class="col-md-3">
						<div class="box-promocao">
							<div class="text-ate">até</div>
							<div class="text-numero">80</div>
							<div class="text-porcento">%</div>
							<div class="text-off">off</div>	
					
						</div>
					</div>

					<div class="col-md-3">
						<div class="box-promocao">
							<div class="text-ate">até</div>
							<div class="text-numero">85</div>
							<div class="text-porcento">%</div>
							<div class="text-off">off</div>	
					
						</div>
					</div>

				</div>

			</div>

		</div>
		

	</div>

	<div id="mais-buscados" class="container">
		
		<div class="row text-center title-default-roxo">
			<h2>os mais buscados<hr></h2>
        </div>

        <div class="row">
        	
        	<div class="col-md-3">
        		<div class="box-produto-info">
        			<a href="#">
		        		<img src="img/produtos/panelas.png" alt="Panelas" class="produto-img">
		        		<h3>Conjunto de Panelas Tramontina Versles fgtfucgnds fvdgfjr</h3>
		        		<div class="estrelas" data-score="3" ></div>
		        		<div class="text-qnt-reviews text-arial-cinza">(300)</div>
		        		<div class="text-valor text-roxo">R$ 109,90</div>
		        		<div class="text-parcelado text-arial-cinza">10x de R$10,99 sem juros</div>
		        	</a>
	        	</div>
        	</div>

        	<div class="col-md-3">
        		<div class="box-produto-info">
        			<a href="#">
		        		<img src="img/produtos/panelas.png" alt="Panelas" class="produto-img">
		        		<h3>Conjunto de Panelas Tramontina Versles fgtfucgnds fvdgfjr</h3>
		        		<div class="estrelas" data-score="2"></div>
		        		<div class="text-qnt-reviews text-arial-cinza">(300)</div>
		        		<div class="text-valor text-roxo">R$ 109,90</div>
		        		<div class="text-parcelado text-arial-cinza">10x de R$10,99 sem juros</div>
		        	</a>
	        	</div>
        		
        	</div>

        	<div class="col-md-3">
        		<div class="box-produto-info">
        			<a href="#">
		        		<img src="img/produtos/panelas.png" alt="Panelas" class="produto-img">
		        		<h3>Conjunto de Panelas Tramontina Versles fgtfucgnds fvdgfjr</h3>
		        		<div class="estrelas" data-score="2.5"></div>
		        		<div class="text-qnt-reviews text-arial-cinza">(300)</div>
		        		<div class="text-valor text-roxo">R$ 109,90</div>
		        		<div class="text-parcelado text-arial-cinza">10x de R$10,99 sem juros</div>
		        	</a>
	        	</div>
        	</div>

        	<div class="col-md-3">
        		<div class="box-produto-info">
        			<a href="#">
		        		<img src="img/produtos/panelas.png" alt="Panelas" class="produto-img">
		        		<h3>Conjunto de Panelas Tramontina Versles fgtfucgnds fvdgfjr</h3>
		        		<div class="estrelas" data-score="4"></div>
		        		<div class="text-qnt-reviews text-arial-cinza">(300)</div>
		        		<div class="text-valor text-roxo">R$ 109,90</div>
		        		<div class="text-parcelado text-arial-cinza">10x de R$10,99 sem juros</div>
		        	</a>
	        	</div>
        	</div>

        </div>



    </div>

</section>

<?php include_once("footer.php");?>		

<script>

angular.module("shop",[]).controller("destaque-controller", function($scope, $http){
	$scope.produtos = [];

	$http({
	  method: 'GET',
	  url: 'produtos'
	}).then(function successCallback(response) {
	   $scope.produtos = response.data;
	    // this callback will be called asynchronously
	    // when the response is available
	  }, function errorCallback(response) {
	    // called asynchronously if an error occurs
	    // or server returns response with an error status.
	  });

});
$(function(){

		$('.owl-carousel').owlCarousel({
			loop:true,		    	        
		    items:1,
		    sigleItem: true
		       
		});

		
	  	var owlDestaque = $(".owl-carousel");
		owlDestaque.owlCarousel();

		$('#btn-destaque-next').click(function() {
		    owlDestaque.trigger('next.owl.carousel');
		});

		// Go to the previous item
		$('#btn-destaque-prev').click(function() {
		    // With optional speed parameter
		    // Parameters has to be in square bracket '[]'
		    owlDestaque.trigger('prev.owl.carousel', [300]);
		});

		$('.estrelas').each(function(){
			$(this).raty({
				starHalf: 'lib/raty/lib/images/star-half.png',
				starOff:'lib/raty/lib/images/star-off.png',
				starOn: 'lib/raty/lib/images/star-on.png',
				score: parseFloat($(this).data("score"))
			});
		});
});

</script>
</body>


</html>