<?php  

$json2 = json_decode(file_get_contents("http://api.backcountry.com/mobile/products/search/mtb frames?outlet=false&site=bcs&offset=0&limit=10&fields=id,title,brand,listRank,lowestListPrice,percentOff"));

$product2 = $json2->products;
$count2 = $json2->count;

$json1 = json_decode(file_get_contents("http://api.backcountry.com/mobile/products/search/mens-snowboard-jackets?outlet=false&site=bcs&offset=0&limit=10&fields=id,title,brand,listRank,lowestListPrice,percentOff"));

$product1 = $json1->products;
$count1 = $json1->count;

$json3 = json_decode(file_get_contents("http://api.backcountry.com/mobile/products/search/patagonia jackets?outlet=false&site=bcs&offset=0&limit=10&fields=id,title,brand,listRank,lowestListPrice,percentOff"));

$product3 = $json3->products;
$count3 = $json3->count;

$json4 = json_decode(file_get_contents("http://api.backcountry.com/mobile/products/search/womens-ski-pants?outlet=false&site=bcs&offset=0&limit=10&fields=id,title,brand,listRank,lowestListPrice,percentOff"));

$product4 = $json4->products;
$count4 = $json4->count;

$json5 = json_decode(file_get_contents("http://api.backcountry.com/mobile/products/search/backpacks?outlet=false&site=bcs&offset=0&limit=10&fields=id,title,brand,listRank,lowestListPrice,percentOff"));

$product5 = $json5->products;
$count5 = $json5->count;

$json6 = json_decode(file_get_contents("http://api.backcountry.com/mobile/products/search/skate accessories?outlet=true&site=bcs&offset=0&limit=10&fields=id,title,brand,listRank,lowestListPrice,percentOff"));

$product6 = $json6->products;
$count6 = $json6->count;

$json7 = json_decode(file_get_contents("http://api.backcountry.com/mobile/products/search/burton?outlet=false&site=bcs&offset=0&limit=10&fields=id,title,brand,listRank,lowestListPrice,percentOff"));

$product7 = $json7->products;
$count7 = $json7->count;
	
	
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0" />
<title>The Wilds</title>
	    <!-- Bootstrap -->
<!-- 	    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"> -->
	    <link rel="stylesheet" href="css/mobile_prototype.css" type="text/css">
	    <link rel="stylesheet" href="css/iteration_v2.css" type="text/css">
	    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	    <script href="js/prototype.js" type="text/javascript" charset="utf-8"></script>
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,600' rel='stylesheet' type='text/css'>
<body>
<div class="mobile-frame">
	
		<?php
			include("header.php");
		?>
		
		<div class="collections-container">
			<img src="img/hero-promo-4.jpg" class="promo" alt="hero-promo" width="100%">
			
			
			<div class="collection-box">
				<div class="scroll-y-container">
				<?php
				foreach($product1 as $p) {	
				?>
					<div class="collection-product" href="mobile_pdp.php?name=<?php echo $p->id;?>">
						<!-- <div class="collection-product"> -->
							<img style="display:inline-block;" src="<?php echo $p->thumbnail; ?>" alt="<?php echo $p->brand ->name .$p->title; ?>" title="<?php echo $p->brand->name.$p->title; ?>" width="100%" />
							<div class="product-info">
									<!-- <?php echo $p->brand->name; ?><br/> -->
									<?php echo $p->title; ?>
									<div class="product-price">$<?php echo $p->lowestSalePrice; ?></div>
							</div>							
						<!-- </div> -->
					</div>
				
				<?php
				}
				?>
				</div>
				<div class="home-collection-title">
					<h3>Downhill Daredevil.</h3>
<!--
					<p>
						Wrap you wrist with these watches and wrist-top devices for the stylish.
					</p>
-->
	
					<a href="mobile_plp.php?name=filson"><div class="bttn hero-bttn">Shop Bike +</div></a>
					<div class="remaining-time"><img src="img/clock.png" alt="clock" width="15" height="15" style="display:inline-block;margin-bottom:-2px;"> 2d 9h left</div>
					<div class="clear"></div>
				</div>
			</div>	
			
			<div class="collection-box">
				<div class="scroll-y-container">
				<?php
				foreach($product1 as $p) {	
				?>
					<div class="collection-product" href="mobile_pdp.php?name=<?php echo $p->id;?>">
						<!-- <div class="collection-product"> -->
							<img style="display:inline-block;" src="<?php echo $p->thumbnail; ?>" alt="<?php echo $p->brand ->name .$p->title; ?>" title="<?php echo $p->brand->name.$p->title; ?>" width="100%" />
							<div class="product-info">
									<!-- <?php echo $p->brand->name; ?><br/> -->
									<?php echo $p->title; ?>
									<div class="product-price">$<?php echo $p->lowestSalePrice; ?></div>
							</div>							
						<!-- </div> -->
					</div>
				
				<?php
				}
				?>
				</div>
				<div class="home-collection-title">
					<h3>Downhill Daredevil.</h3>
<!--
					<p>
						Wrap you wrist with these watches and wrist-top devices for the stylish.
					</p>
-->
	
					<a href="mobile_plp.php?name=road-bikes"><div class="bttn hero-bttn">Shop Bike +</div></a>
					<div class="remaining-time"><img src="img/clock.png" alt="clock" width="15" height="15" style="display:inline-block;margin-bottom:-2px;"> 2d 9h left</div>
					<div class="clear"></div>
				</div>
			</div>	
		</div>	
		
		<?php
			include("current_steal.php");
		?>
		
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
</body>
</html>