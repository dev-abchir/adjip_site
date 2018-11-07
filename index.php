
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Educ App: l'Education à la porté d'un click</title>
	<!--Font Awesome-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
	<!--Google Fonts-->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<!--BxSlider-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
	<!--Normalize CSS-->
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/slick-logos-slider.css">
</head>
<body>

	<!--Start Header -->
	<header>
		<ul class="contact_top">
			<li><i class="fas fa-phone-volume"></i> 07 67 82 10 05</li>
			<li><i class="fas fa-envelope"></i> hassanliamsi@gmail.com</li>
			<li><i class="fas fa-map-marker-alt"></i> 35 Boulevard Schloesing</li>

		</ul>

		<ul class="sm_top">
			<li><a href=""><i class="fab fa-facebook"></i></a></li>
			<li><a href=""><i class="fab fa-twitter"></i></a></li>
			<li><a href="dddd"><i class="fab fa-youtube"></i></a></li>
		</ul>
	</header>

	
	<!--Start Navigation-->
	<nav>
		<div class="logo">
			<a href="#" class="brand">Educ-App</a>
			<p>Vos titoriales entre vos mains</p>
		</div>
		<ul class="nav">
			<li class="nav-item"><a href="#pres">Accueil</a></li>
			<li class="nav-item"><a href="#services">services</a></li>
			<li class="nav-item"><a href="#galeries">Galeries</a></li>
			<li class="nav-item"><a href="#contact">Contact</a></li>
		</ul>
	</nav>


	<!--Start Main-->
	<main>
		<!--Start Slider-->
		<section class="slider">
			<img src="imgs/slide1.jpg" alt="Slider num 1">
			<img src="imgs/slide2.jpg" alt="Slider num 2">
	    </section>
	    <!--End Slider-->

	  <!--Start Section Membres-->
		<section class="services" id="services">
			<h2>Nos services</h2>
			<ul class="box">
				<li>
					<img src="imgs/service_1.jpeg" alt="service_1">
					<label>Disponible de 24h/24 à 7j/7</label>
					<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit ipsa quae possimus, dolores sint odio delectus.</p>
				</li>
				<li>
					<img src="imgs/service_2.jpg" alt="service_2">
					<label>Epoler par des expert</label>
					<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis, ad doloribus impedit ipsam est laborum eveniet amet?</p>
				</li>
				<li>
					<img src="imgs/service_3.jpeg" alt="service_3">
					<label>Satisfait ou Rembourser</label>
					<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum mollitia dolore eveniet eaque aliquam eius cumque dolor ab fuga maxime.</p>
				</li>
				<li>
					<img src="imgs/service_4.jpeg" alt="service_4">
					<label>Q&A et Forum de discussion</label>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem ab cum optio, aperiam totam sit facilis.</p>
				</li>
			</ul>
		</section>
	  <!--End Section Membres-->
		<!--Partenaires-->		
		<section class=" slider-slick">
			<h2>Nos partenaires</h2>
			<div id="customer-logos">
				<div class="slide"><img src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg"></div>
				<div class="slide"><img src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg"></div>
				<div class="slide"><img src="https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg"></div>
				<div class="slide"><img src="https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg"></div>
				<div class="slide"><img src="https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg"></div>
				<div class="slide"><img src="https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg"></div>
				<div class="slide"><img src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg"></div>
				<div class="slide"><img src="https://image.freepik.com/free-vector/retro-label-on-rustic-background_82147503374.jpg"></div>
			</div>
   </section>

	    <!--End Partenaires-->

	    <!--Start Newsletter-->
	    <section class="newsletter">
	    	<h2>S'abonner à notre newsletter</h2>
	    	<form method="post" action="#">
	    		<input type="email" name="email" placeholder="tape votre adresse e-mail" required="required">
	    		<button>S'abonner</button>
	    	</form>
	    </section>

	    <!--Start Contact -->

	    <section class="contact" id="contact">
	    	<h2>Nous faire un p'tit coucou!</h2>
	    	<form method="post" id="formContact">
	    		<input type="text" name="name" id="name" placeholder="Votre nom">

	    		<span id="nameError" style="color: red;margin-top: 5px; margin-left: 8px;margin-bottom: 5px;float: left;"></span>
	    		
	    		<input type="email" name="email" placeholder="Votre Email" id="email">

	    			<span id="emailError" style="color: red;margin-top: 5px; margin-left: 8px;margin-bottom: 5px;float: left;"></span>

	    		<input type="text" id="subject" name="subject" placeholder="Votre sujet">
	    		<span id="subjectError" style="color: red;margin-top: 5px; margin-left: 8px;margin-bottom: 5px;float: left;"></span>
					<textarea name="message" id="message" cols="30" rows="10" placeholder="Votre message"></textarea>
	    		<span id="messageError" style="color: red;margin-top: 5px; margin-left: 8px;margin-bottom: 5px;float: left;"></span>
	    		
                <input type="submit" name="submit" value="Envoyer">
	    	</form>
	    </section>

	    
	    
	</main>
	
	<!--Start Footer-->
	<footer>
		<article>
			<h3>A propos Educ-App</h3>
			<p>Illo quod ratione corrupti dolore maiores nulla itaque, dicta veritatis magni dolores cum corporis asperiores vitae quasi ad ab placeat tempore. Eos ullam optio praesentium aliquam sapiente blanditiis, quaerat hic! Facere non tempore ullam fugit, excepturi tenetur aliquid earum placeat dicta, hic praesentium!</p>
			<ul class="rs">
				<li><a href=""><i class="fab fa-facebook"></i></a></li>
				<li><a href=""><i class="fab fa-youtube"></i></a></li>
				<li><a href=""><i class="fab fa-twitter"></i></a></li>
				
			</ul>
		</article>

		<article>
			<h3>Navigations</h3>
			<ul>
				<li><a href="#">Adhésion Rapide</a></li>
				<li><a href="#">Nos Status</a></li>
				<li><a href="#">Nous Contacter</a></li>
			</ul>
		</article>

		<article>
			<h3>Nos coordonnées</h3>
			<ul>
				<li><i class="fas fa-phone-volume"></i> 07 67 82 10 05</li>
				<li><i class="fas fa-envelope"></i> hassanliamsi@gmail.com</li>
				<li><i class="fas fa-map-marker-alt"></i> 35 Boulevard Schloesing</li>
			</ul>
		</article>
		
	</footer>
	<div class="footer-bas">
		<p><?php echo date('Y'); ?> &copy;Copyright.Tous droits réservés à Ismail Hassan</p>
	</div>


	<!--End FOOTER-->
	<div id="scroll-top">
		<i class="fas fa-arrow-up"></i>
	</div>




	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
  	<script src="js/main.js"></script>
  	<script src="js/accordion.js"></script>

  	<script>
  		$(document).ready(function(){


  			var result = true;

  			$('#formContact').submit(function(){
               
  				 result = true;
  				//Name Error
  				if ($('#name').val() == "") {

  					$('#nameError').fadeIn(500).text("Veuillez entrer votre nom");
  					$('#name').css('border-color', 'red');

  				       result = false;
  				}


  				//Message Error

  				if ($('#email').val() == "") {

  					$('#emailError').fadeIn(500).text("Veuillez entrer une adresse mail valide");
  					$('#email').css('border-color', 'red');

  				       result = false;
  				}


  				//Subject Error

               if ($('#subject').val() == "") {

  					$('#subjectError').fadeIn(500).text("Veuillez entrer un sujet");
  					$('#subject').css('border-color', 'red');

  				       result = false;
  				}




  				//Message error

  				if ($('#message').val() == "") {

  					$('#messageError').fadeIn(500).text("Veuillez entrer votre message");
  					$('#message').css('border-color', 'red');

  				       result = false;
  				}


  				return result;

  			});
             

             //Name error
  			$('#name').keyup(function(){

  				if ($('#name').val() == "") {

  					$('#nameError').fadeIn(500).text("Veuillez entrer votre nom");
  					$('#name').css('border-color', 'red');
  				}
  				else
  				{
  					$('#nameError').fadeOut(500).text('Veuillez entrer votre nom');
  					$('#name').css('border-color', '#2ecc71');
  				}



  			});

  			//Email Error

  			$('#email').keyup(function(){

  				if ($('#email').val() == "") {

  					$('#emailError').fadeIn(500).text("Veuillez entrer votre adresse email");
  					$('#email').css('border-color', 'red');
  				}
  				else
  				{
  					$('#emailError').fadeOut(500).text('Veuillez entrer votre adresse email');
  					$('#email').css('border-color', '#2ecc71');
  				}

  			});


  			//Suject Error

  			$('#subject').keyup(function(){

  				if ($('#subject').val() == "") {

  					$('#subjectError').fadeIn(500).text("Veuillez entrer votre adresse email");
  					$('#subject').css('border-color', 'red');
  				}
  				else
  				{
  					$('#subjectError').fadeOut(500).text('Veuillez entrer votre adresse email');
  					$('#subject').css('border-color', '#2ecc71');
  				}

  			});


  			//Message Error 
  			$('#message').keyup(function(){

  				if ($('#message').val() == "") {

  					$('#messageError').fadeIn(500).text("Veuillez entrer votre adresse email");
  					$('#message').css('border-color', 'red');
  				}
  			
  			   else if ($('#message').val().length > 5) {

  			   		result = false;
  			   	   $('#messageError').fadeOut(500).text('Veuillez entrer votre message');
  					$('#message').css('border-color', '#2ecc71');
  			   }

  			});

       $('#customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
  			
  		});
  	</script>
    
  
</body>
</html>