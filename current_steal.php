

		
		<div class="steals-container">
		<div class="steals-header">
<!--
					<div class="logo">
						<img src="img/header-logo.png" alt="header-logo" width="60" height="60">					
					</div>
-->
					Current Steal
					<div class="steal-time">
						3:22
					</div>
				</div>	

			<div class="buy-box">
				
								
					<div class="product-feature">
						<div class="product-detail">
							<img src="http://www.backcountry.com/images/items/large/NRA/NRA000E/CARBL.jpg" alt="steal-product" width="100%">
						</div>
						<div class="product-detail">
							<img src="http://www.backcountry.com/images/items/large/NRA/NRA000E/CARBL_D1.jpg" alt="steal-product" width="100%">
						</div>
						<div class="product-detail">
							<img src="http://www.backcountry.com/images/items/large/NRA/NRA000E/CARBL_D2.jpg" alt="steal-product" width="100%">
						</div>
						<div class="product-detail">
							<img src="http://www.backcountry.com/images/items/large/NRA/NRA000E/CARBL_D3.jpg" alt="steal-product" width="100%">
						</div>
					</div>
					<div class="steal-desc">
						<h3 class="pdp-price">$550.95</h3>
						<h2 class="pdp-title">Norrøna Lofoten Gore-Tex Insulated Jacket - Women's</h2>
						<span class="discount">Choose Size/Color</span>
							<div class="variant-selector">
								<div class="variant-image">
									<img src="<?php echo $variant->image->url; ?>" alt="steal-product" height="100%">
								</div>
								<div class="variant-info">
									<?php echo $variant->title; ?><br/>
									<span class="discount"><?php echo $variant->availability->stockLevel; ?> remaining</span>
								</div>
								<div class="variant-price">
									$<?php echo $variant->listPrice; ?><br/>
									<span class="discount">%<?php echo $variant->discountPercent; ?> Off</span>
								</div>
								<div class="variant-icon">
									<img src="img/chevron_down_black.png" alt="chevron_down_black" width="15" height="15">
								</div>
							</div>
							<div class="bttn steal-bttn inactive">QTY</div>
							<div class="bttn steal-bttn inactive">Add to Cart</div>
					</div>
			</div>

				<div class="clear"></div>
				
				<div class="product-info">
					<div class="description">
						<h4>Description</h4>
						<p>
						this is the description of the skis above. the description is usually long format copy that no one reads. this text will probably never be read by a user, ever. Enjoy these pointless words. 
						</p>
					</div>
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
					
					<h3 class="cross-sell-h3">Upcoming Deals</h3>
				<div class="scroll-y-container">
					<?php
				foreach($product7 as $p) {	
			?>	
					<a href="mobile_pdp.php?name=<?php echo $p->id;?>">
						<div class="collection-product">
							<img src="<?php echo $p->thumbnail; ?>" alt="<?php echo $p->brand ->name .$p->title; ?>" title="<?php echo $p->brand->name.$p->title; ?>" width="100%" />
<!--
							<div class="cross-sell-info">
								<h4><?php echo $p->brand->name; ?> - <?php echo $p->title; ?></h4>
								<div class="price">$<?php echo $p->lowestSalePrice; ?></div>
								
							</div>
-->
						</div>
					</a>
					<?php
						}
			?>
				</div>
				</div>
		
		</div>
		
		
