
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AdjiP_Site</title>
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
			<a href=""><h2>AdjiP</h2></a>
			<p>Lier la diaspora djiboutienne</p>
		</div>
		<ul>
			<li><a href="#pres">Accueil</a></li>
			<li><a href="#membres">Membres</a></li>
			<li><a href="#galeries">Galeries</a></li>
			<li><a href="#contact">Contact</a></li>
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

	    <!--Presentation de l'Assoc-->
		<section class="pres" id="pres">
			<h2>Bienvenue sur notre association AdjiP</h2>
				<img src="imgs/med.jpg" alt="photo du president Adjip">
		
			<div class="mot_bienvenue">
				<p>Je voudrais vous souhaiter la bienvenue sur le site web de l’association des Djiboutiens de Provence (ADjiP), j’espère que vous aurez autant de plaisir à découvrir ce site que nous en avons eu à le construire et que vos contributions nous permettrons de mieux nous connaître.</p>

				<p>Notre association a été fondée le 3 mai 1948 et s’appelait à l’époque l’« Amicale des Originaires de Djibouti » constituée essentiellement de navigateurs venus s’installer dans leur port d’attache: Marseille!. Ces navigateurs ont souhaité créer cette association afin de faciliter l’accueil et l’intégration des familles djiboutiennes venues s’installer à Marseille, capitale européenne de la culture en 2013.</p>

				<p>Je tiens à leur rendre hommage pour avoir pris cette initiative et su préservé les intérêts de notre association depuis. Je suis particulièrement reconnaissant aux fondateurs M. Ali GHALEB, Elmi ABDI, Farah OBSIEH, Hassan ROBLEH, Abdou HACHIMI, Mohamed GAAS et M. Ali Mead, tenancier d’un bar/café à la Joliette où les membres de l’association, à l’origine tous navigants, se retrouvaient pour leurs moments d’échange et partage.</p>
			</div>
		</section>

	    <!--End Presentation de L'ASSOC-->

	    <!--Start Section Membres-->
		<section class="membres" id="membres">
			<h2>Organisation des membres AdjiP</h2>
			<div class="chef">
				<img src="imgs/med.jpg" alt="president Adjip">
				<p>Président AdjiP</p>
			</div>

			<div class="sous-chef" ">

				<article>
					<img src="imgs/team1.jpg" alt="" width="200" height="200">
					<p>Comptable AjiP</p>
				</article>
				
				<article>
					<img src="imgs/team2.jpg" alt="" width="200" height="200">
					<p>Chargé de Communication</p>
				</article>
					
				<article>
					<img src="imgs/team3.jpg" alt="" width="200" height="200">
					<p>Informaticien chez AdjiP</p>
				</article>

				<article>
					<img src="imgs/team4.jpg" alt="" width="200" height="200">
					<p>Directrice Adjointe AdjiP</p>
				</article>

			</div>
		</section>
	    <!--End Section Membres-->

	    <!--Start Galeries-->
		<section class="galeries" id="galeries">
			<h2>Galeries des photos</h2>
			<img class="myImg" src="imgs/img1.jpeg" alt="Snow" width="300" height="200">
			<img class="myImg" src="imgs/img2.jpeg" alt="Snow" width="300" height="200">
			<img class="myImg" src="imgs/img3.jpeg" alt="Snow"width="300" height="200">

			<img class="myImg" src="imgs/img4.jpeg" alt="Snow"width="300" height="200">
			<img class="myImg" src="imgs/img5.jpeg" alt="Snow"width="300" height="200">
			<img class="myImg" src="imgs/img6.jpeg" alt="Snow"width="300" height="200">

			<img class="myImg" src="imgs/img7.jpeg" alt="Snow"width="300" height="200">
			<img class="myImg" src="imgs/img8.jpeg" alt="Snow"width="300" height="200">
			
			           

						<!-- The Modal -->
			<div id="myModal" class="modal">
			  <span class="close">&times;</span>
			  <img class="modal-content" id="img01">
			  <div id="caption"></div>
			</div>
		</section>
	
	    <!--End Galeries-->
	    <!--Start Adresses -->
		<section class="adresse">
	    	<h2>Les Adresses utiles</h2>
			<button class="accordion">Préfecture de Marseille</button>
		<div class="panel">
		  <ul>
		  	<li><a href="http://13.accueil-etrangers.gouv.fr/">Accueil des Etrangers</a></li>
		  	<li><a href="http://www.bouches-du-rhone.gouv.fr/Demarches-administratives">Démarches Administratives</a></li>
		  </ul>
		</div>

		<button class="accordion">Ambassade de Djibouti</button>
		<div class="panel">
		  <ul>
		  	<li><a href="">Ambassade de Djibouti</a></li>
		  	<li><a href="">Consulat de l'Amb.de Djibouti(services de Visas)</a></li>
		  </ul>
		</div>

		<button class="accordion">Démarches Etudiantes</button>
		<div class="panel">
		  <ul>
		  	<li><a href="">Aix-Marseille Université</a></li>
		  	<li><a href="">Crouse,Aix-Marseille</a></li>
		  	<li><a href="">Résidence Etudiants(Odalys-Campus)</a></li>
		  </ul>
		</div>
		<button class="accordion">Liens divers</button>
		<div class="panel">
		 <ul>
		 	<li><a href="">Pompe funebre(Nour-El-Islam)</a></li>
		 </ul>
		</div>

	    </section>
	    <!--End Adresses-->

	    <!--Partenaires-->
		<section class="partenaire">
			<h2>Nos Partenaires</h2>
			<div class="part-logo">
				<article>
					<img src="imgs/port.jpg" alt="photo de port" width="200" height="200">
				</article>
	            <article>
					<img src="imgs/telecom.jpg" alt="djibouti telecom" width="200" height="200">
				</article>

				<article>
					<img src="imgs/armeng.jpg" alt="armeng logo" width="200" height="200">
				</article>

				<article>
					<img src="imgs/dahab.jpg" alt="dahab logo" width="200" height="200">
				</article>
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
	    	<h2>Contactez-Nous</h2>
	    	
		
	    	<form method="post" id="formContact">
	    		<input type="text" name="name" id="name" placeholder="Votre nom">

	    		<span id="nameError" style="color: red;margin-top: 5px; margin-left: 8px;margin-bottom: 5px;float: left;"></span>
	    		
	    		<input type="email" name="email" placeholder="Votre Email" id="email">

	    			<span id="emailError" style="color: red;margin-top: 5px; margin-left: 8px;margin-bottom: 5px;float: left;"></span>

	    		<input type="text" id="subject" name="subject" placeholder="Votre sujet">
	    		<span id="subjectError" style="color: red;margin-top: 5px; margin-left: 8px;margin-bottom: 5px;float: left;"></span>

	    		<input type="text" name="message" id="message" placeholder="Votre message">

	    		<span id="messageError" style="color: red;margin-top: 5px; margin-left: 8px;margin-bottom: 5px;float: left;"></span>
	    		
                <input type="submit" name="submit" value="Envoyer">
	    	</form>
	    </section>

	    
	    
	</main>
	
	<!--Start Footer-->
	<footer>
		<article>
			<h3>A propos AdjiP</h3>
			<p>Notre association a été fondée le 3 mai 1948 et s’appelait à l’époque l’« Amicale des Originaires de Djibouti » constituée essentiellement de navigateurs venus s’installer dans leur port d’attache: Marseille!. Ces navigateurs ont souhaité créer cette association afin de faciliter l’accueil et l’intégration des familles djiboutiennes venues s’installer à Marseille, capitale européenne de la culture en 2013.</p>
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

       
  			
  		});
  	</script>
    
  
</body>
</html>