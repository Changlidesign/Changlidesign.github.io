<? 
include("db_connect.php");
include('header.php'); 

include('navigation.php');
?>
     	

		<div id="logo" class="col-sm-3 col-md-2 col-lg-2">
			<div class="row">
			<svg width="205px" height="74px" viewBox="0 0 205 74" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    		<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        	<g id="POCKY" transform="translate(-615.000000, -53.000000)">
            <g id="LOGO" transform="translate(617.000000, 55.000000)">
                <circle id="Oval" stroke="#FFFFFF" stroke-width="4" cx="35" cy="35" r="35"></circle>
                <path d="M25.5909091,14.8808825 C28.9656193,13.0021151 32.8521372,11.9318182 36.9886364,11.9318182 C49.3732846,11.9318182 59.5171029,21.5259516 60.3931596,33.6872867 C59.9465313,30.3858491 57.1170578,27.8409091 53.6931818,27.8409091 C49.9589838,27.8409091 46.9318182,30.8680747 46.9318182,34.6022727 C46.9318182,38.3364708 49.9589838,41.3636364 53.6931818,41.3636364 C57.3343629,41.3636364 60.3032966,38.4854026 60.4489464,34.8799715 C60.4526727,35.0521066 60.4545455,35.2246982 60.4545455,35.3977273 C60.4545455,48.357591 49.9485001,58.8636364 36.9886364,58.8636364 C32.8521372,58.8636364 28.9656193,57.7933394 25.5909091,55.914572 L25.5909091,14.8808825 Z" id="Combined-Shape" fill="#FFFFFF"></path>
                <text id="OMI." font-family="ITCAvantGardeStd-Demi, ITC Avant Garde Gothic Std" font-size="48" font-weight="500" fill="#FFFFFF">
                <tspan x="93.264" y="58">OMI.</tspan>
                </text>
            </g>
        	</g>
    		</g>
			</svg>
			</div>
		</div>

		<?
			$query_string = "SELECT * FROM `products` ORDER BY `productName`";
			$result = $conn->query($query_string);

			if($conn->errno) die($conn->error);

			while($row = $result->fetch_object()) {




		?>

		<div class="head-content">
		<h1>NINJA</h1>
		<h6>Super-portable wireless speaker with Bluetooth® and Wi-fi connectivity with Amazon Alexa. BLAST delivers bold, immersive 360° sound and voice control on Wifi for great music anywhere.</h6>
		</div>	
	</header>

<div id="navbar">
	 <div class="col-lg-3 col-md-3 col-sm-12"></div>
	 <a class="col-lg-2 col-md-2 col-sm-12" href="#features">Features</a>
	 <a class="col-lg-2 col-md-2 col-sm-12" href="#specification">Specification</a>
	 <a class="col-lg-2 col-md-2 col-sm-12" href="#buy">Buy</a>
	 <div id="buy_now" class="col-lg-2 col-md-2 col-sm-12" href="shop.html"><a>BUY NOW</a></div>
</div>
	

<div class="main-page">
	<div id="features">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img id="feature-bg"src="img/ninja1.jpg">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12" id="feature-content">
					<h2><?= $row->title; ?></h2>
					<p><?= $row->product_description; ?></p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img id="feature-bg"src="img/ninja2.jpg">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12" id="feature-content">
					<h2>VOICE CONTROL</h2>
					<p>Comes with Amazon Alexa built-in and connects directly to the cloud with Wi-Fi. Jump on Wi-Fi or any mobile hotspot to enjoy voice-controlled music and the full range of Alexa’s skills, all from just about anywhere.</p>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img id="feature-bg"src="img/ninja3.jpg">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12" id="feature-content">
					<h2>WATERPROOF</h2>
					<p>NINJA is drop proof, seriously waterproof, and ready-to- rock any adventure. From the shower to the all-night beach party, the summer festivals to the winter slopes — your music will always be on point no matter how wild things get.</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img id="feature-bg"src="img/ninja4.jpg">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12" id="feature-content">
					<h2>12 HOURS PARTY POWER</h2>
					<p>NINJA is one mean endurance machine. It’s rugged, portable, and thanks to an unreal 12-hour battery life, will keep on going as long as you do. Blast tunes from the sunset beach party to the sunrise after party, all on a single charge.</p>
				</div>
			</div>
		</div>

	</div>
</div>
<br>
		<div id="specification" class="container">
			<div class="row">
				<div id="title" class="col-lg-12 col-sm-12 col-md-12">Specification</div>
				<div class="col-sm-6 col-md-6 col-lg-3">						
					<div class="mini-container">
						<h3>WATERPROOF</h3>
						<p>Waterproof – IPX7 rated: POCKY can be immersed in liquid up to 1 m for up to 30 minutes.</p>
					</div>
				</div>
			

				<div class="col-sm-6 col-md-6 col-lg-3">						
					<div class="mini-container">
						<h3>360° SOUND</h3>
						<p>Maximum sound level: 86 dBC • Frequency range: 80 Hz – 20 kHz • Drivers: two 40 mm active drivers and two 46.1 mm x 65.2 mm passive radiators</p>
					</div>
				</div>

				<div class="col-sm-6 col-md-6 col-lg-3">						
					<div class="mini-container">
						<h3>POWER</h3>
						<p>Rechargeable lithium-ion battery for up to 10 hours of battery life between micro-USB charges. Charge time: 2.8 hrs</p>
					</div>
				</div>

				<div class="col-sm-6 col-md-6 col-lg-3">						
					<div class="mini-container">			
						<h3>DIMENSIONS</h3>
						<p>Height (102 mm), diameter (93.5 mm), weight (425 g) (speaker only)</p>
					</div>
				</div>

				<div class="col-sm-6 col-md-6 col-lg-3">						
					<div class="mini-container">
						<h3>COMPATIBILITY</h3>
						<p>For audio playback: smartphones, tablets and other devices that support Bluetooth® and Bluetooth® Smart wireless audio profile [Advanced Audio Distribution Profile (A2DP)].</p>
					</div>
				</div>

				<div class="col-sm-6 col-md-6 col-lg-3">						
					<div class="mini-container">
						<h3>WIRELESS CAPABILITIES</h3>
						<p>Pair up to 8 Bluetooth® enabled source devices. Connect up to two source devices at the same time.  Wirelessly play (stream) to 2 POCKY from one source.</p>
					</div>
				</div>

				<div class="col-sm-6 col-md-6 col-lg-3">						
					<div class="mini-container">
						<h3>WIRELESS RANGE</h3>
						<p>Mobile range for music playback is up to 33 m (100ft)</p>
					</div>
				</div>

				<div class="col-sm-6 col-md-6 col-lg-3">						
					<div class="mini-container">
						<h3>WARRANTY</h3>
						<p>2-YEAR Limited Hardware Warranty</p>
					</div>
				</div>
			</div>
		</div>
		
		<? } ?>
				
	<div class="view-window" style="background-image:url(img/leaves.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-sm-12" id="newbie-title">TRY OUR NEW POWER-UP</div>
				<div class="col-sm-2 col-md-2 col-lg-2"></div>
				<div class="col-sm-10 col-md-10 col-lg-10"><img src="img/try.png" width="60%"></div>
				<div class="col-sm-2 col-md-2 col-lg-2"></div>
			</div>

			<div class="content-box"><a href="shop.html">BUY NOW</a></div>

			<div class="social-media">
				<p>follow us</p>
				<div class="icons">
					<img src="img/facebook.png">
					<img src="img/instagram.png">
					<img src="img/twitter.png">
					<img src="img/youtube.png">
				</div>
			</div>
		</div>
	</div>

	

</div>
<?  
include('footer.php');
?>