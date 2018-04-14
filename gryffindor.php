<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>MARCO - One Page Bootstrap 3 Theme</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link href="userhover_pack.css" rel="stylesheet">


    <link href="userbootstrap.css" rel="stylesheet">


    <link href="usermain.css" rel="stylesheet">
    <link href="usercolor.css" rel="stylesheet">    
    <link href="useranimations.css" rel="stylesheet">
    <link href="userfontawesome.min.css" rel="stylesheet">

    <script type="text/javascript" src="http://alvarez.is/demo/marco/assets/js/twitterFetcher_v10_min.js"></script>

      <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>
    <script type="text/javascript">
        
        google.maps.event.addDomListener(window, 'load', init);
    
        function init() {
       
            var mapOptions = {
                
                zoom: 11,
                
                scrollwheel: false,

                            center: new google.maps.LatLng(40.6700, -73.9400), // New York

             
                styles: [	{		featureType:'water',		stylers:[{color:'#74c9be'},{visibility:'on'}]	},{		featureType:'landscape',		stylers:[{color:'#f2f2f2'}]	},{		featureType:'road',		stylers:[{saturation:-100},{lightness:45}]	},{		featureType:'road.highway',		stylers:[{visibility:'simplified'}]	},{		featureType:'road.arterial',		elementType:'labels.icon',		stylers:[{visibility:'off'}]	},{		featureType:'administrative',		elementType:'labels.text.fill',		stylers:[{color:'#444444'}]	},{		featureType:'transit',		stylers:[{visibility:'off'}]	},{		featureType:'poi',		stylers:[{visibility:'off'}]	}]
            };

            
            var mapElement = document.getElementById('map');

         
            var map = new google.maps.Map(mapElement, mapOptions);
        }
    </script>
    <?php
    @SESSION_start();
    $conn=mysqli_connect("localhost","root","","Project1") or die(mysql_error());
    $name=$_SESSION['username'];
    $password=$_SESSION['password'];
   
   
   ?>
    
    

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/hover_pack.js"></script>

    <style>
    body{
    	background-image:url("images/gryback2.jpg");
    }
    </style>
    
  </head>

  <body background="images/gryback.jpg">


    <div id="headerwrap">
    	<div class="container">
			<div class="row centered">
				<div class="col-lg-8 col-lg-offset-2 mt">
					<h1 class="animation slideDown">GRYFFINDOR</h1>
					<h2 class="animation slideDown"><?php
						echo $name;
						?></h2>
				</div>
				
			</div>
    	</div>
    </div> 

	    
	<div class="container">	

		<div class="row mt centered ">
			<div class="col-lg-4 col-lg-offset-4">
				<h3>Subjects:</h3>
				<hr>
			</div>
		</div>

		<div class="row mt">
			<div class="col-lg-4 col-md-4 col-xs-12 desc">
				<a class="b-link-fade b-animate-go" href="#"><img width="350" height="239" src="images/transfiguration.jpg" alt="" />
					<div class="b-wrapper">
					  	<h4 class="b-from-left b-animate b-delay03">Take</h4>
					  	<p class="b-from-right b-animate b-delay03">Test</p>
					</div>
				</a>
				<p>Transfiguration</p>
				<p class="lead">Transfiguration is a core class and subject taught at Hogwarts School of Witchcraft and Wizardry. It teaches the art of changing the form and appearance of an object. This type of magic is commonly referred to as "Transfiguration".

</p>
				
			</div>
			
			<div class="col-lg-4 col-md-4 col-xs-12 desc">
				<a class="b-link-fade b-animate-go" href="#"><img width="350" height="239" src="images/dada.jpg" alt="" />
					<div class="b-wrapper">
					  	<h4 class="b-from-left b-animate b-delay03">Take</h4>
					  	<p class="b-from-right b-animate b-delay03">Test</p>
					</div>
				</a>
				<p>Defence Against Dark Arts</p>
				<p class="lead">Defence Against the Dark Arts (sometimes written as DADA) is a subject taught at Hogwarts School of Witchcraft and Wizardry and Ilvermorny School of Witchcraft and Wizardry[1]. In this class students learn how to magically defend themselves against Dark Creatures, the Dark Arts, and other dark charms.
 </p>
				<hr-d>
				<!--<p class="time"><i class="fa fa-comment-o"></i> 1 | <i class="fa fa-calendar"></i> 13 Oct.</p>-->
			</div>
			
			<div class="col-lg-4 col-md-4 col-xs-12 desc">
				<a class="b-link-fade b-animate-go" href="#"><img width="350" height="239" src="images/potions.jpg" alt="" />
					<div class="b-wrapper">
					  	<h4 class="b-from-left b-animate b-delay03">Take</h4>
					  	<p class="b-from-right b-animate b-delay03">Test</p>
					</div>
				</a>
				<p>Potions</p>
				<p class="lead">Potions are magical mixtures commonly brewed in cauldrons and used to create a number of effects on the drinker. Potions range in effects and nature and in difficulty as well. An example of a beginners potion is the Cure for Boils, which is the first potion learned at Hogwarts School of Witchcraft and Wizardry. </p>
				<hr-d>
				<!--<p class="time"><i class="fa fa-comment-o"></i> 1 | <i class="fa fa-calendar"></i> 13 Oct.</p>-->
			</div>
			
		</div>
	</div>
	
	<div class="container">	


		<div class="row mt">
			<div class="col-lg-4 col-md-4 col-xs-12 desc">
				<a class="b-link-fade b-animate-go" href="#"><img width="350" height="239" src="images/charms.jpg" alt="" />
					<div class="b-wrapper">
					  	<h4 class="b-from-left b-animate b-delay03">Take</h4>
					  	<p class="b-from-right b-animate b-delay03">Test</p>
					</div>
				</a>
				<p>Charms</p>
				<p class="lead">Charms is a core class and subject taught at Hogwarts School of Witchcraft and Wizardry. Unsurprisingly, it specialises in the teaching of charms. Even though mastering the science of charmwork is clearly essential to performing the greater part of magic, charmwork is seen as a "softer option". </p>
				<hr-d>
				<!--<p class="time"><i class="fa fa-comment-o"></i> 3 | <i class="fa fa-calendar"></i> 14 Nov.</p>-->
			</div>
			
			<div class="col-lg-4 col-md-4 col-xs-12 desc">
				<a class="b-link-fade b-animate-go" href="#"><img width="350" height="239" src="images/divination.jpg" alt="" />
					<div class="b-wrapper">
					  	<h4 class="b-from-left b-animate b-delay03">Take</h4>
					  	<p class="b-from-right b-animate b-delay03">Test</p>
					</div>
				</a>
				<p>Divination</p>
				<p class="lead">Divination is a branch of magic[1] that involves attempting to foresee the future, or gather insights into future events, through various rituals and tools.


</p>
				<hr-d>
				<!--<p class="time"><i class="fa fa-comment-o"></i> 1 | <i class="fa fa-calendar"></i> 13 Oct.</p>-->
			</div>
			
			<div class="col-lg-4 col-md-4 col-xs-12 desc">
				<a class="b-link-fade b-animate-go" href="#"><img width="350" height="239" src="images/comc.jpg" alt="" />
					<div class="b-wrapper">
					  	<h4 class="b-from-left b-animate b-delay03">Take</h4>
					  	<p class="b-from-right b-animate b-delay03">Test</p>
					</div>
				</a>
				<p>Care Of Magical Creatures</p>
				<p class="lead">Care of Magical Creatures is an elective course at Hogwarts School of Witchcraft and Wizardry that can be chosen by students in their third year. In the class, students learn about a wide range of magical creatures, from flobberworms to fire crabs, and even unicorns and thestrals. Students are taught about feeding, maintaining, breeding, and proper treatment of these various creatures.

</p>
				<hr-d>
				<!--<p class="time"><i class="fa fa-comment-o"></i> 1 | <i class="fa fa-calendar"></i> 13 Oct.</p>-->
			</div>
			
		</div>
	</div>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/retina.js"></script>


  	<script>
		$(window).scroll(function() {
			$('.si').each(function(){
			var imagePos = $(this).offset().top;
	
			var topOfWindow = $(window).scrollTop();
				if (imagePos < topOfWindow+400) {
					$(this).addClass("slideUp");
				}
			});
		});
	</script>    



  
  </body>
</html>
