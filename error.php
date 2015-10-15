<?php  

$json2 = json_decode(file_get_contents("http://api.backcountry.com/mobile/products/search/flannel?outlet=false&site=bcs&offset=0&limit=9&fields=id,title,brand,listRank,lowestListPrice,percentOff"));

$product2 = $json2->products;
$count2 = $json2->count;

$json1 = json_decode(file_get_contents("http://api.backcountry.com/mobile/products/search/knife?outlet=false&site=bcs&offset=0&limit=9&fields=id,title,brand,listRank,lowestListPrice,percentOff"));

$product1 = $json1->products;
$count1 = $json1->count;

$json3 = json_decode(file_get_contents("http://api.backcountry.com/mobile/products/search/patagonia?outlet=false&site=bcs&offset=0&limit=8&fields=id,title,brand,listRank,lowestListPrice,percentOff"));

$product3 = $json3->products;
$count3 = $json3->count;

$json4 = json_decode(file_get_contents("http://api.backcountry.com/mobile/products/search/womens-ski-pants?outlet=false&site=bcs&offset=0&limit=9&fields=id,title,brand,listRank,lowestListPrice,percentOff"));

$product4 = $json4->products;
$count4 = $json4->count;

$json5 = json_decode(file_get_contents("http://api.backcountry.com/mobile/products/search/backpacks?outlet=false&site=bcs&offset=0&limit=9&fields=id,title,brand,listRank,lowestListPrice,percentOff"));

$product5 = $json5->products;
$count5 = $json5->count;

$json6 = json_decode(file_get_contents("http://api.backcountry.com/mobile/products/search/skateboards?outlet=true&site=bcs&offset=0&limit=9&fields=id,title,brand,listRank,lowestListPrice,percentOff"));

$product6 = $json6->products;
$count6 = $json6->count;

$json7 = json_decode(file_get_contents("http://api.backcountry.com/mobile/products/search/burton?outlet=false&site=bcs&offset=0&limit=8&fields=id,title,brand,listRank,lowestListPrice,percentOff"));

$product7 = $json7->products;
$count7 = $json7->count;


				$upcoming1 = json_decode(file_get_contents("http://api.backcountry.com/mobile/products/HAG0022"));		
					$images1 = $upcoming1->images[0];
				
				$upcoming2 = json_decode(file_get_contents("http://api.backcountry.com/mobile/products/SHP001E"));				
					$images2 = $upcoming2->images[0];
				
				$upcoming3 = json_decode(file_get_contents("http://api.backcountry.com/mobile/products/MIZ000B"));
					$images3 = $upcoming3->images[0];	



?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0" />
<link rel="apple-touch-icon" sizes="57×57" class="linker" title="http://localhost:8888/bc-design-app/img/favicons/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon" sizes="114×114" class="linker" title="http://localhost:8888/bc-design-app/img/favicons/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon" sizes="72×72" class="linker" title="http://localhost:8888/bc-design-app/img/favicons/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon" sizes="144×144" class="linker" title="http://localhost:8888/bc-design-app/img/favicons/apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon" sizes="60×60" class="linker" title="http://localhost:8888/bc-design-app/img/favicons/apple-touch-icon-60x60.png" />
<link rel="apple-touch-icon" sizes="120×120" class="linker" title="http://localhost:8888/bc-design-app/img/favicons/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon" sizes="76×76" class="linker" title="http://localhost:8888/bc-design-app/img/favicons/apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon" sizes="152×152" class="linker" title="http://localhost:8888/bc-design-app/img/favicons/apple-touch-icon-152x152.png" />
<link rel="apple-touch-icon" sizes="180x180" class="linker" title="http://localhost:8888/bc-design-app/img/favicons/apple-touch-icon-180x180.png" />
<title>The Wilds</title>
	    <!-- Bootstrap -->
<!-- 	    <link rel="stylesheet" class="linker" title="css/bootstrap.min.css" type="text/css"> -->
		<link rel="stylesheet" type="text/css" class="linker" title="slick/slick.css"/>
	    <link rel="stylesheet" href="css/mobile_prototype.css" type="text/css">
	    <script href="js/prototype.js" type="text/javascript" charset="utf-8"></script>
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,600' rel='stylesheet' type='text/css'>
<body>
	<div class="mobile-frame">

	
		<?php
			include("header.php");
		?>
		<div class="loader">
			<div class="error-container">
				<div class="error-icon">
					<img src="img/refresh_gray.png" alt="refresh_gray" width="25" height="25">
				</div>
				<div class="error-msg">
					Couldn't Load Collections
				</div>
				<div class="error-sub">
					Pull to Refresh and Try Again
				</div>
			</div>
		</div>		
	</div>

		<?php
			include("current_steal.php");
		?>
		<?php
			include("upcoming_steal.php");
		?>
		</div>
		
		<div class="clear">
		</div>
		<?php
			include("content_tray.php");
			?>		
					
		<div class="footer">
		
		</div>
		

	</div>
	
		
		<script src="js/jquery-1.7.2.min.js"></script>
		<script src="js/jquery.transit.min.js"></script>    
	    <script src="js/prototype.js" type="text/javascript" charset="utf-8"></script>
	    <script src="../src/jquery.smooth-scroll.js"></script>
	    <script src="js/jquery.lazyload.min.js" type="text/javascript"></script>
	    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript" src="slick/slick.min.js"></script>
		<script type='application/javascript' src="js/fastclick.js"></script>
</body>
</html>