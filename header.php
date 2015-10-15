

<div class="global-text">
				Combined Shipping free on orders over $6,000!
			</div>

<div class="header-container">
			
			<form class="search" id="theform">
				<input type="submit" value="Search">
				<input type="text" id="searchterm" placeholder="What can we help you find?">
			</form>
			
			<div class="clear"></div>
		
		<!--
	<div class="shop-mode">
				<div class="mode-collections mode-select active-mode">
					COLLECTIONS <img src="img/chevron_down_black.png" alt="chevron_down" width="12" height="12" style="display:inline-block;margin-bottom:-2px;"/>
				</div>
				<div class="mode-steal mode-select">
					Current Deal (<span id="countdown">03:01</span>)
				</div>
			</div>
-->
</div>

			<div class="shop-cats">
				<a href="index_mobile.php"><div class="category">
					See All
				</div></a>
				<div class="category">
					Women's
				</div>
				<div class="category">
					Men's
				</div>
				<div class="category" >
					Bike
				</div>
				<div class="category">
					Ski
				</div>
				<div class="category">
					Snowboard
				</div>
				<div class="category">
					Climb
				</div>
				<div class="category">
					Skate
				</div>
				
				<div class="category">
					Women's
				</div>
				<div class="category">
					Men's
				</div>
				<div class="category" >
					Bike
				</div>
				<div class="category">
					Ski
				</div>
				<div class="category">
					Snowboard
				</div>
				<div class="category">
					Climb
				</div>
				<div class="category">
					Skate
				</div>
			</div>
			
			<!--
<div class="tabs-nav">
				<div class="browse-tab active-tab shop-tab">
					<img src="img/home.png" alt="chevron_down" width="25"  style="display:inline-block;margin-bottom:5px;"/>
					<br/>
					Browse
				</div>
				<div class="steal-tab shop-tab">
					<img src="img/clock.png" alt="chevron_down" width="25"  style="display:inline-block;margin-bottom:5px;"/>
					<br/>
					Steals 
				</div>
				<div class="cart-tab shop-tab">
					<img src="img/icon-cart.png" alt="chevron_down" width="25"  style="display:inline-block;margin-bottom:5px;"/>
					<br/>
					Cart
				</div>
				<div class="user-tab shop-tab user">
					<img src="img/icon-user.png" alt="chevron_down" width="25"  style="display:inline-block;margin-bottom:5px;"/>
					<br/>
					Log In
				</div>
			</div>
-->
		
<div class="modal">
	<div class="share-content modal-content">
		<div class="modal-header">
			Share "<span class="collection-string">Collection</span>"
		</div>
		<div class="modal-bttn">
			Send Email
		</div>
		<div class="modal-bttn">
			Send Text
		</div>
		<div class="modal-close">
			Close
		</div>
	</div>
	<div class="brand-filter modal-content">
		<div class="modal-header">
			Filter by:
		</div>
		<div class="modal-scroll">
			<div class="modal-bttn">
				Patagonia
			</div>
			<div class="modal-bttn">
				The North Face
			</div>
			<div class="modal-bttn">
				Salomon
			</div>
			<div class="modal-bttn">
				Pendelton
			</div>
			<div class="modal-bttn">
				Woolrich
			</div>
		</div>
		<div class="modal-close">
			Close
		</div>
	</div>
	
	<div class="gender-filter modal-content">
		<div class="modal-header">
			Filter by:
		</div>
		<div class="modal-bttn">
			Female
		</div>
		<div class="modal-bttn">
			Male
		</div>
		<div class="modal-close">
			Close
		</div>
	</div>
	
	<div class="size-filter modal-content">
		<div class="modal-header">
			Filter by:
		</div>
		<div class="modal-scroll">
			<div class="modal-bttn">
				XXS
			</div>
			<div class="modal-bttn">
				XS
			</div>
			<div class="modal-bttn">
				S
			</div>
			<div class="modal-bttn">
				M
			</div>
			<div class="modal-bttn">
				L
			</div>
			<div class="modal-bttn">
				XL
			</div>
			<div class="modal-bttn">
				XXL
			</div>
		</div>
		<div class="modal-close">
			Close
		</div>
	</div>
	
	<div class="size-content modal-content">
		<div class="modal-header">
			Choose A Size/Color
		</div>
		<div class="modal-scroll">
		<?php
								foreach($sku->skus as $v) {	
							?>
			<div class="modal-bttn">
								<div class="variant-image">
									<img src="<?php echo $sku->defaultImage->url->tiny; ?>" alt="steal-product" height="100%">
								</div>
								<div class="variant-info">
									<?php echo $v->size; ?>/<?php echo $v->color; ?><br/>
									<span class="sub-style"><?php echo $v->availability->stockLevel; ?> remaining</span>
								</div>
								<div class="variant-price">
									$<?php echo $sku->price; ?><br/>
									<span class="sub-style">%<?php echo $sku->discount; ?> Off</span>
								</div>
			</div>
		<?php
			}
		?>
		</div>
		<div class="modal-close">
			Close
		</div>
	</div>
	<div class="login-content modal-content">
		<div class="modal-header">
			Log in to your account
		</div>
		<div class="modal-error">
			Invalid Email/Password
		</div>
		<form class="modal-form">
			<input type="text" placeholder="Email">
			<input type="password" placeholder="Password">
		</form>
		<div class="modal-bttn">
			Login
		</div>
		<div class="modal-close">
			Cancel
		</div>
	</div>

	<div class="modal-overlay">
	</div>
</div>
		
<div class="clear"></div>