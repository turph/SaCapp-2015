<?php  

$listing = json_decode(file_get_contents("http://flashwebint01.bcinfra.net:3010/api/collections/" . $_GET["id"]));

$prods = $listing->products;

	
?>


		<div class="back-nav">
		<div class="plp-title">
			<?php echo $listing->name; ?>
		</div>
		<a class="linker" title="index_mobile.php" ><div class="bttn"><img src="img/chevron_left_white.png" alt="chevron_down" width="15" height="15" style="display:inline-block;" /></div></a> 
		<!-- <a href="index_mobile.php" class="home-link"><div class="mini-bttn">Home <img src="img/home_icon.png" alt="chevron_down" width="10" height="10" style="display:inline-block;" /></div></a> -->
	</div>
		<div class="listing-container">
			<div class="plp-utilities">
<!-- 				<div class="collection-title"><h3><?php echo $_GET["name"] ?></h3></div> -->
				<div class="filter-link gender"><!-- filter <img src="img/refine_icon.png" alt="chevron_down" width="15" height="15" style="display:inline-block;margin-bottom:-4px;" /> --> Filter: Gender<img src="img/chevron_down_black.png" alt="chevron_down" width="20" height="20"></div>
				<div class="filter-link size">Filter: Size<img src="img/chevron_down_black.png" alt="chevron_down" width="20" height="20"></div>
				<div class="filter-link brand">filter: Brand<img src="img/chevron_down_black.png" alt="chevron_down" width="20" height="20"></div>
				<!-- <a class="linker" title="index_mobile.php"><div class="bttn"><img src="img/chevron_left.png" alt="chevron_down" width="10" height="10" style="display:inline-block;margin-bottom:-1.5px;" /> back</div></a> -->
			</div>
			
			<?php
				$i = 0;
				$maxiterations = 10;
					foreach($prods as $p) {	
						if ($i < $maxiterations) {
						$i++;
			?>
			
			<a class="product-listing linker" title="mobile_pdp.php?id=<?php echo $listing->id;?>&sku=<?php echo $p->collectionSkuClass;?>">
				<div class="listing-image">
					<img src="<?php echo $p->defaultImage->url->medium; ?>" width="100%" />
				</div>
				<br/>
				<h4><?php echo $p->brand->name; ?> - <?php echo $p->name; ?></h4>
				<div class="retail">$<?php echo $p->retailPrice; ?></div>
				<div class="discount"><?php echo $p->discount; ?>% off</div>
				<div class="price">$<?php echo $p->price; ?></div>
			</a>
			
			<?php
				}
				else {
					break;
				}
				}
			?>
			<div style="clear:left"></div>
				
		</div>



