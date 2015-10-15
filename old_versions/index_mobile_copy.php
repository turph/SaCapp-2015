<?php  

$collections = json_encode(file_get_contents("https://www.steepandcheap.com/api/collections"));

$json2 = json_decode(file_get_contents("http://api.backcountry.com/mobile/products/search/flannel?outlet=false&site=bcs&offset=0&limit=7&fields=id,title,brand,lowestListPrice,percentOff"));

$product2 = $json2->products;
$count2 = $json2->count;

$json1 = json_decode(file_get_contents("http://api.backcountry.com/mobile/products/search/knife?outlet=false&site=bcs&offset=0&limit=7&fields=id,title,brand,lowestListPrice,percentOff"));

$product1 = $json1->products;
$count1 = $json1->count;

$json3 = json_decode(file_get_contents("http://api.backcountry.com/mobile/products/search/patagonia?outlet=false&site=bcs&offset=0&limit=6&fields=id,title,brand,lowestListPrice,percentOff"));

$product3 = $json3->products;
$count3 = $json3->count;

$json4 = json_decode(file_get_contents("http://api.backcountry.com/mobile/products/search/womens-ski-pants?outlet=false&site=bcs&offset=0&limit=7&fields=id,title,brand,listRank,lowestListPrice,percentOff"));

$product4 = $json4->products;
$count4 = $json4->count;

$json5 = json_decode(file_get_contents("http://api.backcountry.com/mobile/products/search/backpacks?outlet=false&site=bcs&offset=0&limit=7&fields=id,title,brand,listRank,lowestListPrice,percentOff"));

$product5 = $json5->products;
$count5 = $json5->count;

$json6 = json_decode(file_get_contents("http://api.backcountry.com/mobile/products/search/skateboards?outlet=true&site=bcs&offset=0&limit=7&fields=id,title,brand,listRank,lowestListPrice,percentOff"));

$product6 = $json6->products;
$count6 = $json6->count;

$json7 = json_decode(file_get_contents("http://api.backcountry.com/mobile/products/search/burton?outlet=false&site=bcs&offset=0&limit=7&fields=id,title,brand,listRank,lowestListPrice,percentOff"));

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

			<!--
<div class="intro-slider">
				<div><img src="img/hero-promo-2.jpg" class="promo2" style="display:block;" alt="hero-promo" width="100%"></div>
-->
<!--
				<div><img src="img/hero-promo-3.jpg" class="promo2" style="display:block;" alt="hero-promo" width="100%"></div>
				<div><img src="img/hero-promo-4.jpg" class="promo2" style="display:block;" alt="hero-promo" width="100%"></div>

			</div>	
-->				
			
			
			<div class="collection-box" >
				<div class="home-collection-title no-border">
					<h3><a class="linker" title="mobile_plp.php?name=flannel #content-container">Lumberjack Essentials</a></h3>
					<div class="social-bttn share">Share</div>
					<a class="linker" title="mobile_plp.php?name=flannel"><div class="social-bttn">Shop up to 80% off</div></a>
					<div class="remaining-time"><img src="img/clock.png" alt="clock" width="15" height="15" style="display:inline-block;margin-bottom:-2px;"> 2d 9h left</div>
				</div>
				<div class="scroll-y-container">
					<?php
					foreach($product2 as $p) {	
					?>
						<div class="collection-product">
						<a class="linker" title="mobile_pdp.php?name=<?php echo $p->id;?>">
							<img style="display:inline-block;" src="<?php echo $p->thumbnail; ?>" alt="<?php echo $p->brand ->name .$p->title; ?>" title="<?php echo $p->brand->name.$p->title; ?>" width="100%" />
							<div class="product-info">
<!-- 									 <?php echo $p->brand->name; ?><br/> -->
									<?php echo $p->title; ?>
									<div class="product-price">$<?php echo $p->lowestSalePrice; ?></div>
									<span class="discount"><?php echo $p->percentOff; ?>% off</span>
									
								</div>
							</a>						
						</div>
					<?php
						}
					?>
					<div class="advertisement-slide">
						<div class="ad-label" style="font-size:12px;color:#c2c2c2;width:100%;text-align:center;padding:5px 0;"><i>advertisement</i></div>
						<img src="img/ad.png" alt="ad" width="100%" style="margin-top:-120%;display:block;">
					</div>					
					<div class="shop-all-slide">
						<a class="linker" title="mobile_plp.php?name=flannel">
							<div class="hero-bttn">
								Shop All Items
							</div>
						</a>
					</div>
				</div>
<!--
				<div class="home-collection-title">
					<div class="social-bttn share">Share</div>
					<div class="social-bttn">Shop Collection</div>
					
					<div class="clear"></div>
-->
			</div>
			
			
			<div class="collection-box">
			<div class="home-collection-title no-border">
					<h3><a class="linker" title="mobile_plp.php?name=knife">Sharp as a Whip</a></h3>
					<div class="social-bttn share">Share</div>
					<div class="social-bttn">Shop Collection</div>
					<div class="remaining-time"><img src="img/clock.png" alt="clock" width="15" height="15" style="display:inline-block;margin-bottom:-2px;"> 2d 9h left</div>
				
			</div>

				<div class="scroll-y-container">
					<?php
						foreach($product1 as $p) {	
					?>
					<div class="collection-product">
						<a class="linker" title="mobile_pdp.php?name=<?php echo $p->id;?>">
							<img src="<?php echo $p->thumbnail; ?>" alt="<?php echo $p->brand ->name .$p->title; ?>" title="<?php echo $p->brand->name.$p->title; ?>" width="100%" />
							<div class="product-info">
<!-- 									 <?php echo $p->brand->name; ?><br/> -->
									<?php echo $p->title; ?>
									<div class="product-price">$<?php echo $p->lowestSalePrice; ?></div>
									<span class="discount"><?php echo $p->percentOff; ?>% off</span>
									
								</div>
							
						</a>
					</div>
					<?php
						}
			?>
				<div class="shop-all-slide">
						<a class="linker" title="mobile_plp.php?name=knife">
							<div class="hero-bttn">
								View 225 Items
							</div>
						</a>
					</div>
				</div>
				
				
<!--
				<div class="home-collection-title">
					<a class="linker" title="mobile_plp.php?name=knife"><div class="bttn hero-bttn">Shop Jackets +</div></a>
					<div class="remaining-time"><img src="img/clock.png" alt="clock" width="15" height="15" style="display:inline-block;margin-bottom:-2px;"> 2d 9h left</div>
				</div>
				</div>
-->
							
			</div>
			
			<div class="collection-box" >
			<div class="home-collection-title no-border">
					<h3><a class="linker" title="mobile_plp.php?name=womens-ski-pants">Women's Ski Pants: Medium</a></h3>
					<div class="social-bttn share">Share</div>
					<div class="social-bttn">Shop Collection</div>
					<div class="remaining-time"><img src="img/clock.png" alt="clock" width="15" height="15" style="display:inline-block;margin-bottom:-2px;"> 2d 9h left</div>
				
			</div>
				<div class="scroll-y-container">
					<?php
						foreach($product4 as $p) {	
					?>
					<div class="collection-product">
					<a class="linker" title="mobile_pdp.php?name=<?php echo $p->id;?>">
						<img src="<?php echo $p->thumbnail; ?>" alt="<?php echo $p->brand ->name .$p->title; ?>" title="<?php echo $p->brand->name.$p->title; ?>" width="100%" />
							<div class="product-info">
<!-- 									 <?php echo $p->brand->name; ?><br/> -->
									<?php echo $p->title; ?>
									<div class="product-price">$<?php echo $p->lowestSalePrice; ?></div>
									<span class="discount"><?php echo $p->percentOff; ?>% off</span>
									
								</div>
						</a>
					</div>
					<?php
								}
					?>
					<div class="shop-all-slide">
						<a class="linker" title="mobile_plp.php?name=womens-ski-pants">
							<div class="hero-bttn">
								View 89 Items
							</div>
						</a>
					</div>
				</div>
				<!--
<div class="home-collection-title">
					<a class="linker" title="mobile_plp.php?name=womens-ski-pants"><div class="bttn hero-bttn">Shop Ski Gear +</div></a>
					<div class="remaining-time"><img src="img/clock.png" alt="clock" width="15" height="15" style="display:inline-block;margin-bottom:-2px;"> 2d 9h left</div>
				</div>
				</div>
-->
			
			</div>
			
			<!--
<div class="collection-box" style="border:none;padding-top:none;margin-top:-20px;">
				<img src="img/hero-promo-pink.jpg" class="promo2" style="display:block;" alt="hero-promo" width="100%">			
			</div>
-->
			
			<div class="collection-box">
			<div class="home-collection-title no-border">
					<h3><a class="linker" title="mobile_plp.php?name=patagonia-jackets">Brand Exclusive</a></h3>
					<div class="social-bttn share">Share</div>
					<div class="social-bttn">Shop Collection</div>
					<div class="remaining-time"><img src="img/clock.png" alt="clock" width="15" height="15" style="display:inline-block;margin-bottom:-2px;"> 2d 9h left</div>
				
			</div>
				<div class="scroll-y-container">
					<!--
<div class="collection-product">
						<img src="http://www.patagonia.com/images/structure/common/top_nav/patagonia-logo.png" title="patagonia" width="100%" style="margin-top:-75%;" />			
					</div>
-->
					<?php
						foreach($product3 as $p) {	
					?>
				
					<div class="collection-product">
						<a class="linker" title="mobile_pdp.php?name=<?php echo $p->id;?>">
						<img src="<?php echo $p->thumbnail; ?>" alt="<?php echo $p->brand ->name .$p->title; ?>" title="<?php echo $p->brand->name.$p->title; ?>" width="100%" />
							<div class="product-info">
<!-- 									 <?php echo $p->brand->name; ?><br/> -->
									<?php echo $p->title; ?>
									<div class="product-price">$<?php echo $p->lowestSalePrice; ?></div>
									<span class="discount"><?php echo $p->percentOff; ?>% off</span>
									
								</div>
						
						</a>
					</div>
				
					<?php
								}
					?>
					<div class="shop-all-slide">
						<a class="linker" title="mobile_plp.php?name=patagonia-jackets">
							<div class="hero-bttn">
								View 459 Items
							</div>
						</a>
					</div>
				</div>
				<!--
<div class="home-collection-title">
					<a class="linker" title="mobile_plp.php?name=patagonia jackets"><div class="bttn hero-bttn">Shop Patagonia +</div></a>
					
					<div class="remaining-time"><img src="img/clock.png" alt="clock" width="15" height="15" style="display:inline-block;margin-bottom:-2px;"> 2d 9h left</div>
				</div>
				</div>
-->
			
			</div>
			<div class="collection-box">
			<div class="home-collection-title no-border">
					<h3><a class="linker" title="mobile_plp.php?name=backpacks">Backpacks for All</a></h3>
					<div class="social-bttn share">Share</div>
					<div class="social-bttn">Shop Collection</div>
					<div class="remaining-time"><img src="img/clock.png" alt="clock" width="15" height="15" style="display:inline-block;margin-bottom:-2px;"> 2d 9h left</div>
				
			</div>
				<div class="scroll-y-container">
					<?php
						foreach($product5 as $p) {	
					?>
				
					
					<div class="collection-product">
					<a class="linker" title="mobile_pdp.php?name=<?php echo $p->id;?>">
						<img src="<?php echo $p->thumbnail; ?>" alt="<?php echo $p->brand ->name .$p->title; ?>" title="<?php echo $p->brand->name.$p->title; ?>" width="100%" />
							<div class="product-info">
<!-- 									 <?php echo $p->brand->name; ?><br/> -->
									<?php echo $p->title; ?>
									<div class="product-price">$<?php echo $p->lowestSalePrice; ?></div>
									<span class="discount"><?php echo $p->percentOff; ?>% off</span>
									
								</div>
						
						</a>
					</div>
				
					<?php
								}
					?>
					<div class="shop-all-slide">
						<a class="linker" title="mobile_plp.php?name=backpacks">
							<div class="hero-bttn">
								View 1,327 Items
							</div>
						</a>
					</div>
				</div>
				<!--
<div class="home-collection-title">
					<a class="linker" title="mobile_plp.php?name=backpacks"><div class="bttn hero-bttn">Shop Packs +</div></a>
					<div class="remaining-time"><img src="img/clock.png" alt="clock" width="15" height="15" style="display:inline-block;margin-bottom:-2px;"> 2d 9h left</div>
				</div>
				</div>
-->
			
			</div>
			
<!--
			<div class="collection-box">
				<img src="img/hero-promo-round.jpg" class="promo2" style="display:block;" alt="hero-promo" width="100%">
				<div class="promo-border">
				</div>
			
			</div>
-->
			
			<!--
<div class="collection-box">
				<div class="home-collection-title no-border">
					<h3>Curated Collection</h3>
				</div>
				<img src="img/hero-promo2.jpg" class="promo2" style="display:block;" alt="hero-promo" width="100%">
				<div class="home-collection-title">
					<div class="remaining-time"><img src="img/clock.png" alt="clock" width="15" height="15" style="display:inline-block;margin-bottom:-2px;"> 2d 9h left</div>
				</div>
				</div>
			
			</div>
-->
			<div class="collection-box">
				<div class="home-collection-title no-border">
					<h3><a class="linker" title="mobile_plp.php?name=skateboards">Skate Apparel.</a></h3>
					<div class="social-bttn share">Share</div>
					<div class="social-bttn">Shop Collection</div>
					<div class="remaining-time"><img src="img/clock.png" alt="clock" width="15" height="15" style="display:inline-block;margin-bottom:-2px;"> 2d 9h left</div>
				</div>
				<div class="scroll-y-container">
					<?php
						foreach($product6 as $p) {
					?>					
					<div class="collection-product">
					<a class="linker" title="mobile_pdp.php?name=<?php echo $p->id;?>">
						<img src="<?php echo $p->thumbnail; ?>" alt="<?php echo $p->brand ->name .$p->title; ?>" title="<?php echo $p->brand->name.$p->title; ?>" width="100%" />
							<div class="product-info">
<!-- 									 <?php echo $p->brand->name; ?><br/> -->
									<?php echo $p->title; ?>
									<div class="product-price">$<?php echo $p->lowestSalePrice; ?></div>
									<span class="discount"><?php echo $p->percentOff; ?>% off</span>
									
								</div>
						
						</a>
					</div>
				
					<?php
						}
					?>
					<div class="shop-all-slide">
						<a class="linker" title="mobile_plp.php?name=skateboards">
							<div class="hero-bttn">
								View 98 Items
							</div>
						</a>
					</div>
				</div>
				<!--
<div class="home-collection-title">
					<a class="linker" title="mobile_plp.php?name=skateboards"><div class="bttn hero-bttn">Shop Skate up to 80% off +</div></a>
					<div class="remaining-time"><img src="img/clock.png" alt="clock" width="15" height="15" style="display:inline-block;margin-bottom:-2px;"> 2d 9h left</div>
				</div>
				</div>
-->
			
			</div>
			
			<div class="ad">
				<div class="ad-box">
						<div class="product-price" style="width:100%;text-align:center;padding:10px 0;"><i>advertisement</i></div>
						<img src="img/ad.png" alt="ad" width="60%" style="margin-left:20%;">
				</div>
			</div>
			
			<div class="collection-box">
				<div class="home-collection-title no-border">
					<h3><a class="linker" title="mobile_plp.php?name=burton">Brand Exclusive</a></h3>
					<div class="social-bttn share">Share</div>
					<div class="social-bttn">Shop Collection</div>
					<div class="remaining-time"><img src="img/clock.png" alt="clock" width="15" height="15" style="display:inline-block;margin-bottom:-2px;"> 2d 9h left</div>
				</div>
				<div class="scroll-y-container">
					<!--
<div class="collection-product intro-slide" style="overflow:hidden">
						<img src="http://akamai-ssl.burton.com/2015/images/team/landing-cover.jpg" title="patagonia" height="100%" style="margin-top:-125%;"  />				
					</div>
-->
					<?php
						foreach($product7 as $p) {	
					?>
				
					
					<div class="collection-product">
					<a class="linker" title="mobile_pdp.php?name=<?php echo $p->id;?>">
						<img src="<?php echo $p->thumbnail; ?>" alt="<?php echo $p->brand ->name .$p->title; ?>" title="<?php echo $p->brand->name.$p->title; ?>" width="100%" />
							<div class="product-info">
<!-- 									 <?php echo $p->brand->name; ?><br/> -->
									<?php echo $p->title; ?>
									<div class="product-price">$<?php echo $p->lowestSalePrice; ?></div>
									<span class="discount"><?php echo $p->percentOff; ?>% off</span>
									
								</div>
						</a>
					</div>
				
					<?php
								}
					?>
					<div class="shop-all-slide">
						<a class="linker" title="mobile_plp.php?name=burton">
							<div class="hero-bttn">
								View 176 Items
							</div>
						</a>
					</div>
				</div>
				<!--
<div class="home-collection-title">
					<a class="linker" title="mobile_plp.php?name=burton"><div class="bttn hero-bttn">Shop Burton +</div></a>
					<div class="remaining-time"><img src="img/clock.png" alt="clock" width="15" height="15" style="display:inline-block;margin-bottom:-2px;"> 2d 9h left</div>
				</div>
				</div>
-->
			
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