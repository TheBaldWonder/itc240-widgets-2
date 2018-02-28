        <?php include 'includes/config.php';?>
 <?php       
//daily logic goes here:

if(isset($_GET['day']))
{
$day = $_GET['day'];
}else{//use current date
$day = date('l');
}

?>

<?php get_header()?>
<h2>Daily page </h2>
              <p> Today is <?=$day?></p>
<p><a href="daily.php?day=Monday">Monday</a></p>
<p><a href="daily.php?day=Tuesday">Tuesday</a></p>
<p><a href="daily.php?day=Wednesday">Wednesday</a></p>
<p><a href="daily.php?day=Thursday">Thursday</a></p>
<p><a href="daily.php?day=Friday">Friday</a></p>
<p><a href="daily.php?day=Saturday">Saturday</a></p>
<p><a href="daily.php?day=Sunday">Sunday</a></p>

<?php


switch($day)
{
    case 'Monday':
    $myCoffee = "Pumpkin Spice Latte";
    $myPic = "images/pumpkin-spice-latte.jpg";
    $myAlt = "Pumpkin Spice Latte";
    $myColor = "#FF7518" ;   
    break;
 
    case 'Tuesday':
    $myCoffee = "Drip";
    $myPic = "images/drip.jpeg";
    $myAlt = "Drip";
    $myColor = "#663300";     
    break;
    
    case 'Wednesday':
    $myCoffee = "Berry Tea";
    $myPic = "images/berry.jpeg";
    $myAlt = "Berry Tea";
    $myColor = "#ff0066";     
    break; 
    
    case 'Thursday':
    $myCoffee = "Cappuchino";
    $myPic = "images/cappuchino.jpeg";
    $myAlt = "Cappuchino";
    $myColor = "#ff66cc";   
    break; 
    
    case 'Friday':
    $myCoffee = "Frappuchino";
    $myPic = "images/frap.jpeg";
    $myAlt = "Frappuchino";
    $myColor = "";  
    break; 
    
    case 'Saturday':
    $myCoffee = "Mocha";
    $myPic = "images/mocha.jpeg";
    $myAlt = "Mocha";
    $myColor = "#3399ff";     
    break; 
    
    case 'Sunday':
    $myCoffee = "Carmel Macchiato";
    $myPic = "images/carmel";
    $myAlt = "Carmel Macchiato";
    $myColor = "#ffff99" ;    
    break;


}



?><body>
	<header>
	    <img src="images/largebucks-logo.jpg" alt="You drink our coffee, we make large bucks!" class="flexible" id="logo" />
		<h1 class="masthead">LARGEBUCK$ COFFEE</h1>
	
	</header>
    <main>
		 <header><h3 class="slogan">You drink our coffee, we make large bucks!</h3></header>
        <p>
    		 <img src="<?=$myPic?>" alt="<?=$myAlt?>" id="coffee" />
            <strong class="feature"><?=$day?> Coffee Special:</strong> <?=$day?>'s daily coffee special is <strong class="feature"><?=$myCoffee?></strong>, which makes us wish it was always Fall, as this is one of our top sellers!</p>
        <p><span class="feature"><?=$myCoffee?> is </span> Gluten-free selfies normcore chillwave. Listicle 90's chambray, seitan cold-pressed try-hard Etsy authentic flexitarian vinyl. Meditation bespoke freegan, single-origin coffee cred seitan 90's gentrify brunch Williamsburg squid cold-pressed. Brooklyn readymade Tumblr wayfarers ethical.</p>
        <p><span class="feature">Enjoy <?=$myCoffee?> with our </span> Polaroid iPhone plaid, Pitchfork Shoreditch paleo. Hashtag keytar chia scenester Pinterest, semiotics tousled food truck. YOLO scenester deep v, taxidermy paleo quinoa McSweeney's Carles VHS mustache Williamsburg gluten-free readymade cold-pressed. Truffaut Thundercats Schlitz, listicle organic Brooklyn paleo squid asymmetrical readymade migas gluten-free Austin.</p>
		 <p>
		 <b>At LargeBuck$ we aspire to: </b>Aesthetic gentrify YOLO McSweeney's typewriter single-origin coffee. Slow-carb hella listicle lomo, Helvetica single-origin coffee butcher stumptown. Chambray try-hard church-key mumblecore, tote bag PBR cardigan. Retro Austin Brooklyn, blog Intelligentsia gentrify jean shorts sartorial bicycle rights gastropub. Aesthetic wayfarers Pitchfork, tattooed Carles quinoa meh leggings distillery pork belly banjo. Umami cred lumbersexual skateboard, pork belly Tumblr vegan letterpress. Fixie bicycle rights butcher chillwave, gluten-free health goth Echo Park locavore whatever.

		 </p>
		<p>
		Gluten-free selfies normcore chillwave. Listicle 90's chambray, seitan cold-pressed try-hard Etsy authentic flexitarian vinyl. Meditation bespoke freegan, single-origin coffee cred seitan 90's gentrify brunch Williamsburg squid cold-pressed. Brooklyn readymade Tumblr wayfarers ethical. Biodiesel VHS Godard High Life, tousled Banksy craft beer. Mlkshk direct trade locavore, mumblecore keytar artisan hashtag fap. Cred cronut Brooklyn, locavore art party small batch PBR semiotics ennui kitsch taxidermy mlkshk stumptown.
		</p>
		<p>
		Polaroid iPhone plaid, Pitchfork Shoreditch paleo. Hashtag keytar chia scenester Pinterest, semiotics tousled food truck. YOLO scenester deep v, taxidermy paleo quinoa McSweeney's Carles VHS mustache Williamsburg gluten-free readymade cold-pressed. Truffaut Thundercats Schlitz, listicle organic Brooklyn paleo squid asymmetrical readymade migas gluten-free Austin. Etsy Wes Anderson 8-bit retro, polaroid synth paleo banh mi before they sold out Vice. Bushwick fap Intelligentsia, whatever Etsy High Life Kickstarter migas retro Banksy YOLO Carles yr raw denim. Gluten-free fixie taxidermy pop-up, actually Kickstarter flannel put a bird on it master cleanse.
		</p>
		<p>
		Text provided by <a href="http://hipsum.co/" target="_blank">Hipster Ipsum</a>
		</p>
     </main>
    <footer>
      <small>&copy; 2014-2015, All Rights Reserved ~
      <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~
      <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a>
      </small>
    </footer>
    <!-- END Footer -->
	<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
	<script type="text/javascript">
	$("document").ready(function(){
		$('.seasons a').click(function(e){//find all a tags inside class of seasons
            e.preventDefault();//stop default submission
			var season = $(this).attr("href");//contents of href attribute of this element
			var stylesheet = $('#mainStylesheet');
			season = season.toLowerCase();
			switch(season)
			{
				case 'spring':
				$('#logo').attr("src","images/spring.gif");
				$('#wear').attr("src","images/spring-wear.jpg");
				$('main header h3').html("Get a jump on Spring wear!");
				break;
				
				case 'summer':
				$('#logo').attr("src","images/summer.gif");
				$('#wear').attr("src","images/summer-wear.jpg");
				$('main header h3').html("Make Summer a hummer!");
				break;
				
				case 'fall':
				$('#logo').attr("src","images/fall.gif");
				$('#wear').attr("src","images/fall-wear.jpg");
				$('main header h3').html("Fall into Fall!");
				break;
				
				case 'winter':
				$('#logo').attr("src","images/winter.gif");
				$('#wear').attr("src","images/winter-wear.jpg");
				$('main header h3').html("Keep warm this Winter!");
				break;
				
				default:
				$('#logo').attr("src","images/four-seasons.gif");
				$('#wear').attr("src","images/300x400.png");
				$('main header h3').html("Outfitter for all seasons!");
				
			}
			
			var season = "css/" + season + ".css";
			$(stylesheet).attr("href",season);
			//alert(season);
		});
	});
    </script>
	
</body>
              
        <?php get_footer()?>