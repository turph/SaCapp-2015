



<div class="content-tray">
	<div class="content-tray-header">
		<div class="content-tray-close bttn">Close</div>
		<div class="clear"></div>
		<h3 class="content-tray-title"></h3>
	</div>
	<div class="content-tray-body">
		<div class="content-tray-cart">
			<div class="cart-header">
				<h5>The Wilds</h5>
				<div class="cart-total">
					2 Items
				</div>
			</div>
			<div class="cart-body">
			
				<?php
					foreach($next as $cart) {	
				?>
					<div class="cart-line-item">
					<img class="trash-icon" src="img/trash-b.png" alt="trash-b" width="20" />
						<div class="item-img">
							<img src="<?php echo $cart->images[0]->imageUrl->small; ?>" title="" width="100%" />
						</div>
						<div class="item-title">
							<?php echo $cart->brand; ?> <?php echo $cart->title; ?><br/>
							<span class="item-details">Men's, 165, Red (1 left)</span>
						</div>
						<div class="item-specifics">
							<div class="cart-qty">
								<font color="#999">Qty</font><br/>
								1
							</div>
							<div class="specifics">
								<span class="cart-price">$<?php echo $cart->price; ?> <font color="#999" size="1px" style="normal">each</font></span>
							</div>
						</div>
						<div class="clear"></div>
					</div>
					
				<?php
					}
				
					
				?>
				
				
					
				<!--
<div class="cart-line-item">
						<div class="cart-qty">
							2
						</div>
						<div class="item-img">
							<img src="http://www.backcountry.com/images/items/large/BKC/BKC0003/ONECOL.jpg" title="" width="100%" />
						</div>
						<div class="item-title">
							Black Crows - Corvus Skis<br/>
							<span class="item-details">Men's, 165, Red (1 left)</span><br/>
							<span class="price">$179.99</span>
						</div>
				</div>
				<div class="cart-line-item">
						<div class="cart-qty">
							2
						</div>
						<div class="item-img">
							<img src="http://www.backcountry.com/images/items/large/BKC/BKC0003/ONECOL.jpg" title="" width="100%" />
						</div>
						<div class="item-title">
							Black Crows - Corvus Skis<br/>
							<span class="item-details">Men's, 165, Red (1 left)</span><br/>
							<span class="price">$179.99</span>
						</div>
				</div>
				<div class="cart-line-item">
						<div class="cart-qty">
							2
						</div>
						<div class="item-img">
							<img src="http://www.backcountry.com/images/items/large/BKC/BKC0003/ONECOL.jpg" title="" width="100%" />
						</div>
						<div class="item-title">
							Black Crows - Corvus Skis<br/>
							<span class="item-details">Men's, 165, Red (1 left)</span><br/>
							<span class="price">$179.99</span>
						</div>
				</div>
				<div class="cart-line-item">
						<div class="cart-qty">
							2
						</div>
						<div class="item-img">
							<img src="http://www.backcountry.com/images/items/large/BKC/BKC0003/ONECOL.jpg" title="" width="100%" />
						</div>
						<div class="item-title">
							Black Crows - Corvus Skis<br/>
							<span class="item-details">Men's, 165, Red (1 left)</span><br/>
							<span class="price">$179.99</span>
						</div>
				</div>
-->
			</div>
			<div class="cart-footer">
				<div class="cart-proceed">Proceed To Checkout</div>
				<div class="cart-total">
					$75.73
				</div>
			</div>
		</div>
	</div>
</div>