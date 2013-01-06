<div id="header-wrap">
	<div id="header-container">
		<table id="banner" border="0">
			<tr>
				<th id="logo"><img src="images/banner.jpg"/></th>
				<th id="picture"><img src="images/kittens_green.jpg" alt="CelticElfes"/></th>
			</tr>
		</table>
		<table id="menu" border="1">
			<tr>
				<th <?php if ($tab == 0) echo "class=\"selected\""?> ><a href="index.php">
					<?php if ($tab == 0) {?>
						<img src="images/home_y.png" alt="HOME"/>	
					<?php } else { ?>
						<img src="images/home_g.png" alt="HOME"/>
					<?php } ?>
				</a> </th>
				<th <?php if ($tab == 1) echo "class=\"selected\""?> ><a href="males.php"> 
					<?php if ($tab == 1) {?>
						<img src="images/males_y.png" alt="MALES"/>	
					<?php } else { ?>
						<img src="images/males_g.png" alt="MALES"/>
					<?php } ?>
				</a></th>
				<th <?php if ($tab == 2) echo "class=\"selected\""?> ><a href="females.php">
					<?php if ($tab == 2) {?>
						<img src="images/females_y.png" alt="FEMALES"/>	
					<?php } else { ?>
						<img src="images/females_g.png" alt="FEMALES"/>
					<?php } ?>
				</a></th>
				<th <?php if ($tab == 3) echo "class=\"selected\""?> ><a href="kittens.php">
									<?php if ($tab == 3) {?>
						<img src="images/kittens_y.png" alt="KITTENS"/>	
					<?php } else { ?>
						<img src="images/kittens_g.png" alt="KITTENS"/>
					<?php } ?>
				</a></th>
				<th <?php if ($tab == 4) echo "class=\"selected\""?> ><a href="gallery.php ">		
					<?php if ($tab == 4) {?>
						<img src="images/gallery_y.png" alt="GALLERY"/>	
					<?php } else { ?>
						<img src="images/gallery_g.png" alt="GALLERY"/>
					<?php } ?>
				</a> </th>
				<th <?php if ($tab == 5) echo "class=\"selected\""?> ><a href="contactus.php">
					<?php if ($tab == 5) {?>
					<img src="images/contact_y.png" alt="CONTACT US"/>
					<?php } else { ?>
					<img src="images/contact_g.png" alt="CONTACT US"/>
					<?php } ?>
				</a></th>
			</tr>
		</table>
	</div>
</div>
