<?php  

$collections = json_decode(file_get_contents("https://origin-www.steepandcheap.com/api/collections"));			

	$nextJson = utf8_decode(file_get_contents("http://www.steepandcheap.com/steepcheap/sac/next_items"));
	$next = json_decode($nextJson);	

	
	
?>

<!--

style="background-image:url('<?php echo $collection->image->url->small; ?>');background-position:center center;background-size: 100% auto;"
-->

<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black">
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
					<!--
<div class="logo">
						<img src="img/header-logo.png" alt="header-logo" width="50" height="50">					
					
					</div>
-->
					<div class="logo-type">steep<font color="#77ac25">&</font>cheap</div>
					<div class="cart-tab">
					<img src="img/icon-cart.png" alt="chevron_down" width="20"  style="margin-bottom:5px;"/>
				</div>
					
				</div>	
				
				<div class="intro-slider" style="border-top:1px solid #c2c2c2;">
					<img src="img/hero-promo4.jpg" alt="hero-promo" width="100%">
				</div>		
			
			
			<?php
					foreach($collections as $collection) {	
			?>
			
			<div class="collection-box" >
				<div class="remaining-time"><img src="img/clock.png" alt="clock" width="15" height="15" style="display:inline-block;margin-bottom:-2px;"> 2d 9h left</div>

				<a class="linker" title="mobile_plp.php?id=<?php echo $collection->id; ?>">
					<div class="home-collection-title" style="background-image:url('<?php echo $collection->image->url->small; ?>');background-position:center center;background-size: 100% auto;">
						<div class="underlay">
						</div>
						<div class="collection-title-overlay">
							<div class="title"><a class="linker" title="mobile_plp.php?id=<?php echo $collection->id; ?>"><?php echo $collection->name ?></a></div>
	<!--
							<div class="social-bttn share">Share</div>
							<a class="linker" title="mobile_plp.php?id=<?php echo $collection->id; ?>"><div class="social-bttn">Shop Collection</div></a>
	-->
						</div>
						<a class="linker" title="mobile_plp.php?id=<?php echo $collection->id; ?>">
						<div class="shop-all-anchor">
							<img src="img/chevron-right_white.png" alt="chevron-right" width="20" style="margin:11px 40%">
						</div>
					</a>
					</div>
				</a>
				<div class="scroll-y-container">
					
					<?php
					foreach($collection->products as $product) {	
					?>
					<div class="collection-product">
						<a class="linker" title="mobile_pdp.php?id=<?php echo $collection->id; ?>&sku=<?php echo $product->collectionSkuClass;?>">
							<img style="display:inline-block;" src="<?php echo $product->defaultImage->url->medium; ?>" width="100%" />
							<div class="product-info">
									<div class="name"><?php echo $product->brand->name; ?> <?php echo $product->name; ?></span><br/>
									<span class="discount"><?php echo $product->discount; ?>% off</div>
									<!-- <span class="retail">$<?php echo $product->retailPrice; ?></span> -->
									<div class="product-price">$<?php echo $product->price; ?></div>
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

				<!--
<a class="linker" title="mobile_plp.php?id=<?php echo $collection->id; ?>">
						<div class="shop-all-anchor">
							Shop Entire Collection
						</div>
					</a>
-->
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