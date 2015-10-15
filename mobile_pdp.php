<?php  

$sku = json_decode(file_get_contents("http://flashwebint01.bcinfra.net:3010/api/collections/".$_GET["id"]."/products/".$_GET["sku"]));

$images = [];
foreach($sku->images as $key => $value) {
	 $images[] = $value->mainImage->url->medium;
}

$varaints = [];
foreach($sku->availability as $key => $value) {
	 $variants[] = $value->qtyRemaining;
}	
	
?>

		<div class="back-nav">
		<a class="linker" title="index_mobile.php"><div class="bttn"><img src="img/chevron_left_white.png" alt="chevron_down" width="15" height="15" style="display:inline-block;" /></div></a> 
		<!-- <a class="share"><div class="mini-bttn"><img src="img/plane_black.png" alt="chevron_down" width="25" height="25" style="display:inline-block;" /></div></a> --> 
		<!-- <a href="index_mobile.php" class="home-link"><div class="mini-bttn">Home <img src="img/home_icon.png" alt="chevron_down" width="10" height="10" style="display:inline-block;" /></div></a> -->
	</div>

	
		<?php
			include("header.php");
		?>
			<div class="pdp-container">
			
					<div class="buy-box">
						<div class="product-feature">
							<?php
								foreach($images as $image) {	
							?>
							<div class="product-detail">
								<img src="<?php echo $image ?>" alt="steal-product" width="100%">
							</div>
							<?php }?>
						</div>
						<div class="steal-desc">
							<h2 class="pdp-title"><?php echo $sku->brand->name; ?> <?php echo $sku->name; ?></h2>
							<!-- <h3 class="pdp-price">$<?php echo $sku->lowestListPrice; ?> <span class="discount"><?php echo $sku->percentOff; ?>70% off</span></h3> -->
							<span class="sub-style">Choose Size/Color</span>
							<div class="variant-selector">
								<div class="variant-image">
									<img src="<?php echo $images[0]; ?>" alt="steal-product" height="100%">
								</div>
								<div class="variant-info">
									<?php echo $sku->skus[0]->size; ?>/<?php echo $sku->skus[0]->color; ?><br/>
									<span class="sub-style"><?php echo $varaints[0]; ?> remaining</span>
								</div>
								<div class="variant-price">
									$<?php echo $sku->price; ?><br/>
									<span class="sub-style">%<?php echo $sku->discount; ?> Off</span>
								</div>
								<div class="variant-icon">
									<img src="img/chevron_down_black.png" alt="chevron_down_black" width="15" height="15">
								</div>
							</div>
							<div class="input-bttn">QTY</div>
							<div class="bttn">Add to Cart</div>
						</div>
					</div>
					
					<div class="clear"></div>
					
					<div class="product-details">
						<div class="prod-tabs">
							<div class="description-tab prod-tab active-tab">
								<img src="img/clipboard.png" alt="flag_black" width="20" />
								Description
							</div>
							<div class="description-tab prod-tab">
								<img src="img/gear-a.png" alt="home_black" width="20" />
								Tech Specs
							</div>
							<div class="description-tab prod-tab">
								<img src="img/edit.png" alt="icon-user" width="20" />
								Reviews
							</div>
						</div>
						<div class="description">
							<h4>Description</h4>
							<?php echo $sku->descriptionHtml; ?>
						</div>
						<!--
<div class="tech-specs">
							<h4>Tech Specs</h4>
							<p>
							this is the description of the skis above. the description is usually long format copy that no one reads. this text will probably never be read by a user, ever. Enjoy these pointless words. 
							</p>
						</div>
						<div class="reviews">
							<h4>Reviews</h4>
							<p>
							this is the description of the skis above. the description is usually long format copy that no one reads. this text will probably never be read by a user, ever. Enjoy these pointless words. 
							</p>
						</div>
-->
					</div>			


