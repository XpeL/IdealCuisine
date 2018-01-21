<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="shortcut icon" href="images/star.png" type="favicon/ico" /> -->

        <title>Idéale cuisine</title>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/flexslider.css">
        <link rel="stylesheet" href="css/pricing.css">
        <link rel="stylesheet" href="css/main.css">

		<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>

        <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
        <script type="text/javascript" src="https://blockchain.info/Resources/js/pay-now-button.js"></script>
        <script src="js/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="js/jquery.flexslider.min.js"></script>
        <script type="text/javascript">
            $(window).load(function() {
                $('.flexslider').flexslider({
                 animation: "slide",
                 controlsContainer: ".flexslider-container"
                });
            });

            $("div_name").css("min-height", $(window).height() );
        </script>

        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script>
            function initialize() {
                var mapCanvas = document.getElementById('map-canvas');
                var mapOptions = {
                    center: new google.maps.LatLng(50.625788, 5.531526),
                    zoom: 16,
                    scrollwheel: false,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }
                var map = new google.maps.Map(mapCanvas, mapOptions)

                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(50.625788, 5.531526),
                    title:"Idéale cuisine"
                });

                // To add the marker to the map, call setMap();
                marker.setMap(map);
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
		<script>
			$(document).ready(function(){
				$("#accueil").click(function(){
					$("#accueil").show();
				});
				$("#entreprise").click(function(){
					$("entreprise").show();
				});

				
			});
		</script>
        <style>
            .cover-thing {
                width: 100%;
                height: 100%;
                float: left;
            }
        </style>

    </head>
    <body data-spy="scroll" data-target="#template-navbar">
        <nav id="template-navbar" class="navbar navbar-default custom-navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ideal-cuisine">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#" style="padding-top:10px;" >
							
		            </a>
                </div>

                <div class="collapse navbar-collapse" id="ideal-cuisine">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#accueil">ACCUEIL</a></li>
						<li><a href="#entreprise">L’ENTREPRISE</a></li>
                        <li><a href="#realisation">REALISATIONS</a></li>
						<li><a href="#marks">MARQUES PARTENAIRES</a></li>
						<li><a href="#promotions">PROMOTIONS</a></li>
						<li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section id="header-slider" class="owl-carousel">
            <div class="item">
                <div class="container">
                    <div class="header-content">
                        <h1 class="header-title"></h1>
                        <h1 class="header-title"></h1>
                        <p class="header-sub-title"></p>
                    </div> <!-- /.header-content -->
                </div>
            </div>

            <div class="item">
                <div class="container">
                    <div class="header-content">
                        <h1 class="header-title"></h1>
                        <p class="header-sub-title"></p>
                    </div> <!-- /.header-content -->
                </div>
            </div>
        </section>


        <!--== 1. Accueil -->
        <section id="accueil" class="cover-thing">
            <img src="images/icons/Accueil_color.png" class="img-responsive section-icon hidden-sm hidden-xs">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row dis-table">
                        <div class="hidden-xs col-sm-6 section-bg accueil-bg dis-table-cell">
                        </div>
                        <div class="col-xs-12 col-sm-6 dis-table-cell">
                            <div class="section-content">
                                <h2 class="section-content-title">Accueil</h2>
                                <p class="section-content-para">
                                </p>
                                <p class="section-content-para">
                                <p>Deux générations de passionnés..<p>
                                <p>Depuis plus de 40 ans, notre entreprise familiale sélectionne les meilleurs fabricants de meubles de cuisines et rangement de tous styles et les meilleurs électroménagers alliant ainsi durabilité, robustesse et design.<p>
                                <p>Dans notre showroom, notre équipe vous conseillera au mieux et chaque projet fera l’objet d’une prise de mesures afin de modéliser la cuisine de vos rêves.<p>
                                <p>Le montage est réalisé avec minutie et dans le souci du détail par le patron et son équipe.<p>
                                <p>Notre volonté: faire de votre cuisine une source d’inspiration et de plaisir au quotidien! <p>
                                </p>
                            </div> <!-- /.section-content -->
                        </div>
                    </div> <!-- /.row -->
                </div> <!-- /.container-fluid -->
            </div> <!-- /.wrapper -->
        </section> <!-- /#about -->
		<script>
			// function menuDisplay(name) {
			// 	var el = document.getElementsByClassName("menu_text")
			// 	for (var i = 0, ilen = el.length; i < ilen; i++) {
			// 		if(el[i].id == name){
			// 			el[i].style.display = 'inline'
			// 		}else{
			// 			el[i].style.display = 'none'
			// 		}
			// 	}
			// }
		</script>
        <!--==  7. L’ENTREPRISE  ==-->
        <section id="entreprise" class="entreprise  cover-thing">
            <div id="w">
                <div class="entreprise-filter">
                    <div class="entreprise-filter-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="section-header">
                                        <h2 class="entreprise-title">L'entreprise</h2>
                                        <ul id="filter-list" class="clearfix">
                                            <li class="filter" onclick="menuDisplay('cooking')">Cuisine Equipée</li>
                                            <li class="filter" onclick="menuDisplay('bathroom')">Salle de Bain</li>
                                            <li class="filter" onclick="menuDisplay('salon')">Salon et Rangement Divers</li>
                                            <li class="filter" onclick="menuDisplay('dressing')">Dressing & Placard</li>
                                            <li class="filter" onclick="menuDisplay('relooking')">Relooking</li>
                                        </ul><!-- @end #filter-list -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="container">
				<div class="w">
                   <div class="row">  
					<div class="col-md-10 col-md-offset-1" style="padding-top: 15px; padding-bottom:10px;">
                         <div class="menu_text" id="cooking">
							<p>Nos Cuisines Equipées</p>
							<p>Parce que la cuisine est la pièce centrale d’une maison, nous vous proposons un vaste choix de modèles de tous styles et pour tous budgets, du classique au moderne, du sans poignées au cottage. Celles-ci sont personnalisables dans une large palette de coloris, de textures et de finitions en lien avec les dernières tendances de la décoration.</p>
							<p>N’hésitez pas à nous rendre visite et découvrir nos nouveautés et dernières tendances du marché. Dans notre showroom, l’écoute et la convivialité sont de rigueur afin de répondre au mieux à vos attentes</p>
							<ul class="menu-price menu-pricing">
                                <li class="item" style="display: inline-block;">
									<a data-fancybox="gallery" href="images/food5.jpg">
                                        <img src="images/food5.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc text-center">
                                            <span>
                                                Chaleureuses et agréables à vivre, elles restent d’une élégance intemporelle avec un seul mot d’ordre: cuisiner en toute convivialité.
                                            </span>
                                        </div>
                                    </a>
                                        
                                    Moderne
                                </li>

                                <li class="item" style="display: inline-block;">

                                    <a data-fancybox="gallery" href="images/food1.jpg">
                                        <img src="images/food6.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc">
                                            <span>
                                                Sobriété et fluidité des lignes, la priorité est donnée aux surfaces lisses, déclinables en de nombreuses matières et couleurs pour créer un style épuré et contemporain
                                            </span>
                                        </div>
                                    </a>
                                        
                                    <h2 style="color:black;">Sans poignées</h2>
                                </li>
                                <li class="item" style="display: inline-block;">
                                    <a data-fancybox="gallery" href="images/food9.jpg">
                                        <img src="images/food7.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc">
                                            <span>
                                                Inspirée de la douceur de vivre, l’atmosphère romantique et chaleureuse est dominée par le bois et les matières naturelles.
                                            </span>
                                        </div>
                                    </a>
                                        
                                    <h2 style="color:black;">Cottage</h2>
                                </li>
                            </ul>
						</div>
						
						<div class="menu_text" id="bathroom" style="display:none;">
							<ul class="menu-price menu-pricing">
                                <li class="item dinner" style="display: inline-block;">
									<a>
                                        <img src="images/food1.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc text-center">
                                            <span>
                                                <h3>Tomato Curry</h3>
                                                Natalie &amp; Justin Cleaning by Justin Younger
                                            </span>
                                        </div>
                                    </a>
                                        
                                    <h2 class="white">$20</h2>
                                </li>

                                <li class="item breakfast" style="display: inline-block;">

                                    <a>
                                        <img src="images/food2.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Prawn Dish</h3>
                                                Lorem ipsum dolor sit amet
                                            </span>
                                        </div>
                                    </a>
                                        
                                    <h2 class="white">$20</h2>
                                </li>
                                <li class="item desert" style="display: inline-block;">

                                    <a>
                                        <img src="images/food3.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Salad Dish</h3>
                                                Consectetur adipisicing elit, sed do eiusmod
                                            </span>
                                        </div>
                                    </a>
                                        
                                    <h2 class="white">$18</h2>
                                </li>
                                <li class="item breakfast special" style="display: inline-block;">

                                    <a>
                                        <img src="images/food4.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Prawn Dish</h3>
                                                Tempor incididunt ut labore et dolore
                                            </span>
                                        </div>
                                    </a>
                                        
                                    <h2 class="white">$15</h2>
                                </li>
                                <li class="item breakfast" style="display: inline-block;">

                                    <a>
                                        <img src="images/food5.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Vegetable Dish</h3>
                                                Magna aliqua. Ut enim ad minim veniam
                                            </span>
                                        </div>
                                    </a>
                                        
                                    <h2 class="white">$20</h2>
                                </li>
                                <li class="item dinner special" style="display: inline-block;">

                                    <a>
                                        <img src="images/food6.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Chicken Dish</h3>
                                                Quis nostrud exercitation ullamco laboris
                                            </span>
                                        </div>
                                    </a>

                                    <h2 class="white">$22</h2>
                                </li>
                                <li class="item desert" style="display: inline-block;">

                                    <a>
                                        <img src="images/food7.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Vegetable Noodles</h3>
                                                Nisi ut aliquip ex ea commodo
                                            </span>
                                        </div>
                                    </a>

                                    <h2 class="white">$32</h2>
                                </li>
                                <li class="item dinner" style="display: inline-block;">

                                    <a>
                                        <img src="images/food8.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Special Salad</h3>
                                                Duis aute irure dolor in reprehenderit
                                            </span>
                                        </div>
                                    </a>

                                    <h2 class="white">$38</h2>
                                </li>
                                <li class="item desert special" style="display: inline-block;">

                                    <a>
                                        <img src="images/food9.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Ice-cream</h3>
                                                Excepteur sint occaecat cupidatat non
                                            </span>
                                        </div>
                                    </a>
                                    
                                    <h2 class="white">$38</h2>
                                </li>  
                            </ul>
						</div>

						<div class="menu_text" id="salon" style="display:none;">
							<p>Mobiliers de salon et rangements divers</p>
							<p>La cuisine s’ouvre aujourd’hui de plus en plus sur le séjour et s’impose comme une évidence d’ergonomie. Nous vous accompagnons dans tous vos projets de rangements, meubles de salon, bibliothèques… Notre vaste palette de couleurs de caissons et de modèles vous permettra de jouer dans la continuité de votre cuisine pour créer un espace mobilier en parfaite harmonie avec votre intérieur.
							<ul class="menu-price menu-pricing">
                                <li class="item dinner" style="display: inline-block;">
									<a rel="diaporama_group" href="images/food1.jpg">
                                        <img src="images/food1.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc text-center">
                                            <span>
                                                <h3>Tomato Curry</h3>
                                                Natalie &amp; Justin Cleaning by Justin Younger
                                            </span>
                                        </div>
                                    </a>
                                        
                                    <h2 class="white">$20</h2>
                                </li>

                                <li class="item breakfast" style="display: inline-block;">

                                    <a>
                                        <img src="images/food2.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Prawn Dish</h3>
                                                Lorem ipsum dolor sit amet
                                            </span>
                                        </div>
                                    </a>
                                        
                                    <h2 class="white">$20</h2>
                                </li>
                                <li class="item desert" style="display: inline-block;">

                                    <a>
                                        <img src="images/food3.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Salad Dish</h3>
                                                Consectetur adipisicing elit, sed do eiusmod
                                            </span>
                                        </div>
                                    </a>
                                        
                                    <h2 class="white">$18</h2>
                                </li>
                                <li class="item breakfast special" style="display: inline-block;">

                                    <a>
                                        <img src="images/food4.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Prawn Dish</h3>
                                                Tempor incididunt ut labore et dolore
                                            </span>
                                        </div>
                                    </a>
                                        
                                    <h2 class="white">$15</h2>
                                </li>
                                <li class="item breakfast" style="display: inline-block;">

                                    <a>
                                        <img src="images/food5.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Vegetable Dish</h3>
                                                Magna aliqua. Ut enim ad minim veniam
                                            </span>
                                        </div>
                                    </a>
                                        
                                    <h2 class="white">$20</h2>
                                </li>
                                <li class="item dinner special" style="display: inline-block;">

                                    <a>
                                        <img src="images/food6.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Chicken Dish</h3>
                                                Quis nostrud exercitation ullamco laboris
                                            </span>
                                        </div>
                                    </a>

                                    <h2 class="white">$22</h2>
                                </li>
                                <li class="item desert" style="display: inline-block;">

                                    <a>
                                        <img src="images/food7.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Vegetable Noodles</h3>
                                                Nisi ut aliquip ex ea commodo
                                            </span>
                                        </div>
                                    </a>

                                    <h2 class="white">$32</h2>
                                </li>
                                <li class="item dinner" style="display: inline-block;">

                                    <a>
                                        <img src="images/food8.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Special Salad</h3>
                                                Duis aute irure dolor in reprehenderit
                                            </span>
                                        </div>
                                    </a>

                                    <h2 class="white">$38</h2>
                                </li>
                                <li class="item desert special" style="display: inline-block;">

                                    <a>
                                        <img src="images/food9.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Ice-cream</h3>
                                                Excepteur sint occaecat cupidatat non
                                            </span>
                                        </div>
                                    </a>
                                    
                                    <h2 class="white">$38</h2>
                                </li>  
                            </ul>
						</div>

						<div class="menu_text" id="dressing" style="display:none;">
							<p>Dressings, placards, espaces de rangement</p>
							<p>Une gamme de placards et rangements pour toutes les pièces à vivre de votre maison. Quel que soit l’endroit, ils trouveront toujours une place dans votre habitation. Ouverts ou fermés, avec portes ouvrantes ou coulissantes, les placards sur mesure que nous créons pour vous sont étudiés pour rentabiliser au maximum les espaces de votre maison. Avec un vaste choix de coloris de portes et profils, les combinaisons sont infinies: façades en mélaminé, stratifié, avec ou sans miroir, verre laqué mate ou brillant… Nous pourrons satisfaire tous vos désirs!</p>
							<ul class="menu-price menu-pricing">
                                <li class="item dinner" style="display: inline-block;">
									<a>
                                        <img src="images/food1.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc text-center">
                                            <span>
                                                <h3>Tomato Curry</h3>
                                                Natalie &amp; Justin Cleaning by Justin Younger
                                            </span>
                                        </div>
                                    </a>
                                        
                                    <h2 class="white">$20</h2>
                                </li>

                                <li class="item breakfast" style="display: inline-block;">

                                    <a>
                                        <img src="images/food2.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Prawn Dish</h3>
                                                Lorem ipsum dolor sit amet
                                            </span>
                                        </div>
                                    </a>
                                        
                                    <h2 class="white">$20</h2>
                                </li>
                                <li class="item desert" style="display: inline-block;">

                                    <a>
                                        <img src="images/food3.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Salad Dish</h3>
                                                Consectetur adipisicing elit, sed do eiusmod
                                            </span>
                                        </div>
                                    </a>
                                        
                                    <h2 class="white">$18</h2>
                                </li>
                                <li class="item breakfast special" style="display: inline-block;">

                                    <a>
                                        <img src="images/food4.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Prawn Dish</h3>
                                                Tempor incididunt ut labore et dolore
                                            </span>
                                        </div>
                                    </a>
                                        
                                    <h2 class="white">$15</h2>
                                </li>
                                <li class="item breakfast" style="display: inline-block;">

                                    <a>
                                        <img src="images/food5.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Vegetable Dish</h3>
                                                Magna aliqua. Ut enim ad minim veniam
                                            </span>
                                        </div>
                                    </a>
                                        
                                    <h2 class="white">$20</h2>
                                </li>
                                <li class="item dinner special" style="display: inline-block;">

                                    <a>
                                        <img src="images/food6.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Chicken Dish</h3>
                                                Quis nostrud exercitation ullamco laboris
                                            </span>
                                        </div>
                                    </a>

                                    <h2 class="white">$22</h2>
                                </li>
                                <li class="item desert" style="display: inline-block;">

                                    <a>
                                        <img src="images/food7.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Vegetable Noodles</h3>
                                                Nisi ut aliquip ex ea commodo
                                            </span>
                                        </div>
                                    </a>

                                    <h2 class="white">$32</h2>
                                </li>
                                <li class="item dinner" style="display: inline-block;">

                                    <a>
                                        <img src="images/food8.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Special Salad</h3>
                                                Duis aute irure dolor in reprehenderit
                                            </span>
                                        </div>
                                    </a>

                                    <h2 class="white">$38</h2>
                                </li>
                                <li class="item desert special" style="display: inline-block;">

                                    <a>
                                        <img src="images/food9.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Ice-cream</h3>
                                                Excepteur sint occaecat cupidatat non
                                            </span>
                                        </div>
                                    </a>
                                    
                                    <h2 class="white">$38</h2>
                                </li>  
                            </ul>
						</div>
						<div class="menu_text" id="relooking" style="display:none;">
							<p>Votre cuisine fait peau neuve!</p>
							<p>Besoin de redonner un second souffle à votre cuisine? Pensez à la rénovation! Parfois, il suffit de changer quelques meubles ou renouveler quelques électroménagers pour donner une nouvelle vie à votre ancienne cuisine. Un nouveau plan de travail, le remplacement de vos portes et poignées, un nouveau four design ou un ilot central moderne et familial… Tout est personnalisable, c’est pourquoi nous vous proposons de nombreuses solutions répondant à vos envies et votre budget.</p>
							<ul class="menu-price menu-pricing">
                                <li class="item dinner" style="display: inline-block;">
									<a>
                                        <img src="images/food1.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc text-center">
                                            <span>
                                                <h3>Tomato Curry</h3>
                                                Natalie &amp; Justin Cleaning by Justin Younger
                                            </span>
                                        </div>
                                    </a>
                                        
                                    <h2 class="white">$20</h2>
                                </li>

                                <li class="item breakfast" style="display: inline-block;">

                                    <a>
                                        <img src="images/food2.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Prawn Dish</h3>
                                                Lorem ipsum dolor sit amet
                                            </span>
                                        </div>
                                    </a>
                                        
                                    <h2 class="white">$20</h2>
                                </li>
                                <li class="item desert" style="display: inline-block;">

                                    <a>
                                        <img src="images/food3.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Salad Dish</h3>
                                                Consectetur adipisicing elit, sed do eiusmod
                                            </span>
                                        </div>
                                    </a>
                                        
                                    <h2 class="white">$18</h2>
                                </li>
                                <li class="item breakfast special" style="display: inline-block;">

                                    <a>
                                        <img src="images/food4.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Prawn Dish</h3>
                                                Tempor incididunt ut labore et dolore
                                            </span>
                                        </div>
                                    </a>
                                        
                                    <h2 class="white">$15</h2>
                                </li>
                                <li class="item breakfast" style="display: inline-block;">

                                    <a>
                                        <img src="images/food5.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Vegetable Dish</h3>
                                                Magna aliqua. Ut enim ad minim veniam
                                            </span>
                                        </div>
                                    </a>
                                        
                                    <h2 class="white">$20</h2>
                                </li>
                                <li class="item dinner special" style="display: inline-block;">

                                    <a>
                                        <img src="images/food6.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Chicken Dish</h3>
                                                Quis nostrud exercitation ullamco laboris
                                            </span>
                                        </div>
                                    </a>

                                    <h2 class="white">$22</h2>
                                </li>
                                <li class="item desert" style="display: inline-block;">

                                    <a>
                                        <img src="images/food7.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Vegetable Noodles</h3>
                                                Nisi ut aliquip ex ea commodo
                                            </span>
                                        </div>
                                    </a>

                                    <h2 class="white">$32</h2>
                                </li>
                                <li class="item dinner" style="display: inline-block;">

                                    <a>
                                        <img src="images/food8.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Special Salad</h3>
                                                Duis aute irure dolor in reprehenderit
                                            </span>
                                        </div>
                                    </a>

                                    <h2 class="white">$38</h2>
                                </li>
                                <li class="item desert special" style="display: inline-block;">

                                    <a>
                                        <img src="images/food9.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Ice-cream</h3>
                                                Excepteur sint occaecat cupidatat non
                                            </span>
                                        </div>
                                    </a>
                                    
                                    <h2 class="white">$38</h2>
                                </li>  
                            </ul>
						</div>
	                </div>
				  </div>
                      
				</div>
                </div>

            </div> 
        </section>
		
        <!--== 8. REALISATION ==-->
        <section id="realisation" class="great-place-to-enjoy">
            <img class="img-responsive section-icon hidden-sm hidden-xs">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row dis-table">
						<div class="col-xs-6 col-sm-6 dis-table-cell color-bg">
                            <h2 class="section-title">NOS REALISATIONS</h2>
                        </div>
                        <div class="col-xs-6 col-sm-6 dis-table-cell section-bg">
                        </div>
                    </div> <!-- /.dis-table -->
                </div> <!-- /.row -->
            </div> <!-- /.wrapper -->
        </section> <!-- /#great-place-to-enjoy -->
		<section>
            <div class="container-fluid">
                <div class="row dis-table">
                    <div class="hidden-xs col-sm-6 dis-table-cell section-bg">
								<ul class="menu-price menu-pricing">
                                <li class="item dinner" style="display: inline-block;">
									<a>
                                        <img src="images/food1.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc text-center">
                                            <span>
                                                <h3>Tomato Curry</h3>
                                                Natalie &amp; Justin Cleaning by Justin Younger
                                            </span>
                                        </div>
                                    </a>
                                        
                                    <h2 class="white">$20</h2>
                                </li>

                                <li class="item breakfast" style="display: inline-block;">

                                    <a>
                                        <img src="images/food2.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Prawn Dish</h3>
                                                Lorem ipsum dolor sit amet
                                            </span>
                                        </div>
                                    </a>
                                        
                                    <h2 class="white">$20</h2>
                                </li>
                                <li class="item desert" style="display: inline-block;">

                                    <a>
                                        <img src="images/food3.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Salad Dish</h3>
                                                Consectetur adipisicing elit, sed do eiusmod
                                            </span>
                                        </div>
                                    </a>
                                        
                                    <h2 class="white">$18</h2>
                                </li>
                                <li class="item breakfast special" style="display: inline-block;">

                                    <a>
                                        <img src="images/food4.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Prawn Dish</h3>
                                                Tempor incididunt ut labore et dolore
                                            </span>
                                        </div>
                                    </a>
                                        
                                    <h2 class="white">$15</h2>
                                </li>
                                <li class="item breakfast" style="display: inline-block;">

                                    <a>
                                        <img src="images/food5.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Vegetable Dish</h3>
                                                Magna aliqua. Ut enim ad minim veniam
                                            </span>
                                        </div>
                                    </a>
                                        
                                    <h2 class="white">$20</h2>
                                </li>
                                <li class="item dinner special" style="display: inline-block;">

                                    <a>
                                        <img src="images/food6.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Chicken Dish</h3>
                                                Quis nostrud exercitation ullamco laboris
                                            </span>
                                        </div>
                                    </a>

                                    <h2 class="white">$22</h2>
                                </li>
                                <li class="item desert" style="display: inline-block;">

                                    <a>
                                        <img src="images/food7.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Vegetable Noodles</h3>
                                                Nisi ut aliquip ex ea commodo
                                            </span>
                                        </div>
                                    </a>

                                    <h2 class="white">$32</h2>
                                </li>
                                <li class="item dinner" style="display: inline-block;">

                                    <a>
                                        <img src="images/food8.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Special Salad</h3>
                                                Duis aute irure dolor in reprehenderit
                                            </span>
                                        </div>
                                    </a>

                                    <h2 class="white">$38</h2>
                                </li>
                                <li class="item desert special" style="display: inline-block;">

                                    <a>
                                        <img src="images/food9.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Ice-cream</h3>
                                                Excepteur sint occaecat cupidatat non
                                            </span>
                                        </div>
                                    </a>
                                    
                                    <h2 class="white">$38</h2>
                                </li>  
                            </ul>
					
                    </div>
                </div>
            </div>
        </section>

		 <!--== 10. NOS MARQUES PARTENAIRES ==-->
        <section id="marks" class="breakfast">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row dis-table">
                        <div class="col-xs-6 col-sm-6 dis-table-cell section-bg">
                        </div>
						<div class="col-xs-6 col-sm-6 dis-table-cell color-bg">
                            <h2 class="section-title">NOS MARQUES PARTENAIRES</h2>
                        </div>
					</div> <!-- /.dis-table -->
                </div> <!-- /.row -->
            </div> <!-- /.wrapper -->
        </section> <!-- /#breakfast -->
		<section>
            <div class="container-fluid">
                <div class="row dis-table">
                    <div class="hidden-xs col-sm-6 dis-table-cell section-bg">
								<ul class="menu-price menu-pricing">
                                <li class="item dinner" style="display: inline-block;">
									<a>
                                        <img src="images/food1.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc text-center">
                                            <span>
                                                <h3>Tomato Curry</h3>
                                                Natalie &amp; Justin Cleaning by Justin Younger
                                            </span>
                                        </div>
                                    </a>
                                        
                                </li>

                                <li class="item breakfast" style="display: inline-block;">

                                    <a>
                                        <img src="images/food2.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Prawn Dish</h3>
                                                Lorem ipsum dolor sit amet
                                            </span>
                                        </div>
                                    </a>
                                        
                                </li>
                                <li class="item desert" style="display: inline-block;">

                                    <a>
                                        <img src="images/food3.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Salad Dish</h3>
                                                Consectetur adipisicing elit, sed do eiusmod
                                            </span>
                                        </div>
                                    </a>
                                        
                                </li>
                                <li class="item breakfast special" style="display: inline-block;">

                                    <a>
                                        <img src="images/food4.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Prawn Dish</h3>
                                                Tempor incididunt ut labore et dolore
                                            </span>
                                        </div>
                                    </a>
                                        
                                </li>
                                <li class="item breakfast" style="display: inline-block;">

                                    <a>
                                        <img src="images/food5.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Vegetable Dish</h3>
                                                Magna aliqua. Ut enim ad minim veniam
                                            </span>
                                        </div>
                                    </a>
                                        
                                </li>
                                <li class="item dinner special" style="display: inline-block;">

                                    <a>
                                        <img src="images/food6.jpg" class="img-responsive" alt="Food">
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Chicken Dish</h3>
                                                Quis nostrud exercitation ullamco laboris
                                            </span>
                                        </div>
                                    </a>

                                </li>
                            
                            </ul>
					
                    </div>
                </div>
            </div>
        </section>
		
		<section id="promotions" class="promotions">
			<div class="wrapper">
			<div class="container-fluid">
						
			<div class="wrapper">
					<div class="container-fluid">
						<div class="row dis-table">
							<div class="col-xs-6 col-sm-6 dis-table-cell color-bg">
								<h2 class="section-title">NOS PROMOTIONS</h2>
							</div>
							<div class="col-xs-6 col-sm-6 dis-table-cell section-bg">
							</div>
							
						</div> <!-- /.dis-table -->
					</div> <!-- /.row -->
				</div>
			</div> <!-- /.wrapper -->
			</div> <!-- /.wrapper -->
		</section>
		<!--== 10. NOS MARQUES PARTENAIRES ==-->
        <section id="marks" class="breakfast">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row dis-table">
                        <div class="col-xs-6 col-sm-6 dis-table-cell section-bg">
                        </div>
						<div class="col-xs-6 col-sm-6 dis-table-cell color-bg">
                            <h2 class="section-title">CONTACTEZ-NOUS</h2>
                        </div>
					</div> <!-- /.dis-table -->
                </div> <!-- /.row -->
            </div> <!-- /.wrapper -->
        </section> <!-- /#breakfast -->
		<section>
            <div class="container-fluid">
                <div class="row dis-table">
                    <div class="hidden-xs col-sm-6 dis-table-cell section-bg">
								
					
                    </div>
                </div>
            </div>
        </section>
        <section id="contact" class="reservation">
            <img class="img-responsive section-icon hidden-sm hidden-xs" src="images/icons/reserve_color.png">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class=" section-content">
                        <div class="row">
                            <div class="col-md-5 col-sm-6">
                                <form class="reservation-form" method="post" action="reserve.php">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control reserve-form empty iconified" name="name" id="name" required="required" placeholder="  &#xf007;  Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control reserve-form empty iconified" id="email" required="required" placeholder="  &#xf1d8;  e-mail">
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input type="tel" class="form-control reserve-form empty iconified" name="phone" id="phone" required="required" placeholder="  &#xf095;  Phone">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control reserve-form empty iconified" name="datepicker" id="datepicker" required="required" placeholder="&#xf017;  Time">
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-sm-12">
                                            <textarea type="text" name="message" class="form-control reserve-form empty iconified" id="message" rows="3" required="required" placeholder="  &#xf086;  We're listening"></textarea>
                                        </div>

                                        <div class="col-md-12 col-sm-12">
                                            <button type="submit" id="submit" name="submit" class="btn btn-reservation">
                                                <span><i class="fa fa-check-circle-o"></i></span>
                                                Make a reservation
                                            </button>
                                        </div>
                                            
                                    </div>
                                </form>
                            </div>

                            <div class="col-md-2 hidden-sm hidden-xs"></div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="opening-time">
                                    <h3 class="opening-time-title">Heures</h3>
                                    <p>Mardi – Samedi: 10h – 18h</p>
									<p>Fermé le lundi</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
		
        <section class="contact">
            <div class="container-fluid color-bg">
                <div class="row dis-table">
                    <div class="hidden-xs col-sm-6 dis-table-cell">
                        <h2 class="section-title">INFOS PRATIQUES</h2>
                    </div>
                    <div class="col-xs-6 col-sm-6 dis-table-cell">
                        <div class="section-content">
                            <p>Rue F. Nicolay, 176 - 4420 Saint Nicolas (Liège)</p>
                            <p>+3204.253.08.65</p>
                            <p>info@idealcuisine.be</p>
                        	<p>TVA BE0 422 161 519 RPM LIÈGE</p>
						</div>

						<div class="social-media">
							<div class="row">
								<div class="col-md-6 col-md-offset-3">
									<ul class="center-block">
										<li><a href="#" class="fb"></a></li>
									</ul>
								</div>
							</div>
						</div>
                    </div>
                </div>
                
            </div>
        </section>

        <div class="container-fluid">
            <div class="row">
                <div id="map-canvas"></div>
            </div>
        </div>



        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="copyright text-center">
                            <p>
                                &copy; Copyright, 2017 <a href="#">http://www.idealcuisine.be/</a> 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="js/jquery.mixitup.min.js" ></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery.validate.js"></script>
        <script type="text/javascript" src="js/jquery.hoverdir.js"></script>
        <script type="text/javascript" src="js/jQuery.scrollSpeed.js"></script>
        <script src="js/script.js"></script>
        

    </body>
</html>