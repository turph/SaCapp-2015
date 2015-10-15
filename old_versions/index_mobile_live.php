<?php  

$collections = json_decode(file_get_contents("https://www.steepandcheap.com/api/collections"));


				$upcoming1 = json_decode(file_get_contents("http://api.backcountry.com/mobile/products/HAG0022"));		
					$images1 = $upcoming1->images[0];
				
				$upcoming2 = json_decode(file_get_contents("http://api.backcountry.com/mobile/products/SHP001E"));				
					$images2 = $upcoming2->images[0];
				
				$upcoming3 = json_decode(file_get_contents("http://api.backcountry.com/mobile/products/MIZ000B"));
					$images3 = $upcoming3->images[0];	


$nextJson = utf8_decode(file_get_contents("http://www.steepandcheap.com/steepcheap/sac/next_items"));
	$next = json_decode($nextJson);	

?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="translucent">
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
			<div class="collections-container">

				<div class="brand-header">
					<div class="logo">
						<img src="img/header-logo.png" alt="header-logo" width="60" height="60">					
					</div>
					<div class="brand-name">
					</div>
				</div>			
			
			
			<?php
					foreach($collections as $collection) {	
			?>
			
			<div class="collection-box" >
				<div class="home-collection-title no-border">
					<h3><a class="linker" title="mobile_plp.php?id=<?php echo $collection->id; ?>"><?php echo $collection->name ?></a></h3>
					<div class="social-bttn share">Share</div>
					<a class="linker" title="mobile_plp.php?id=<?php echo $collection->id; ?>"><div class="social-bttn">Shop Collection</div></a>
					<div class="remaining-time"><img src="img/clock.png" alt="clock" width="15" height="15" style="display:inline-block;margin-bottom:-2px;"> 2d 9h left</div>
				</div>
				<div class="scroll-y-container">
					<?php
						foreach($collection->products as $product) {	
					?>
					<div class="collection-product">
						<a class="linker" title="mobile_pdp.php?name=<?php echo $p->id;?>">
							<img style="display:inline-block;" src="<?php echo $product->defaultImage->url->medium; ?>" width="100%" />
							<div class="product-info">
									<?php echo $product->name; ?>
									<div class="product-price">$<?php echo $product->price; ?></div>
									<span class="discount"><?php echo $product->discount; ?>% off</span>
									
							</div>
							</a>						
					</div>
					<?php
						}
					?>				
					<div class="shop-all-slide">
						<a class="linker" title="mobile_plp.php?id=<?php echo $collection->id; ?>">
							<div class="hero-bttn">
								Shop All Items
							</div>
						</a>
					</div>
				</div>
			</div>
			
			<?php
				}
			?>
			
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