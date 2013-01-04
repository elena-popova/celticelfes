<!DOCTYPE html>
<html>
 <?php $tab = 3 ?>
 <?php $title = 'Celticelfes Kittens' ?>
 <head>
  <?php include('inc/head.php'); ?>
  <script src="galleria/galleria-1.2.8.min.js"></script>
  <script type="text/javascript">
   Galleria.loadTheme('galleria/themes/classic/galleria.classic.min.js');
  </script>
 </head>
 <body>
  <?php include('inc/fb.php'); ?>
  <div id="main">
   <?php include('inc/header.php'); ?>
   <div id="content">
<h1>New Arrivals</h1>
<p>
	<a href="males.html#panek">PL* Agumbamka Domalien (Panek)</a> and 
	<a href="females.html#lola">Rogus Maggie-May (Lola)</a> had kittens on December 22, 2012. 
	There are four kittens available for sale and collection at 12 weeks.
</p>
<img src="kittens/g/litter.jpg" style="padding-left:240px" />
<p>
    Contact us by 
	e-mail at <a href="mailto:info@celticelfes.com?Subject=Devon%20Rex%20-%20Litter%20G">info@celticelfes.com</a> or via
    <a href="http://www.facebook.com/#!/lastauskiene?fref=ts" target="_parent">Facebook</a>.
</p>
<div class="new">
	<div id="new1">
		<p class="name">
			Red Tabby Bicolor<br/>
		 	Female
		</p>
		<p class="status">Available</p>
		<img src="kittens/g/1as.jpg" />
		<img src="kittens/g/1bs.jpg" />
	</div>
	<div id="new2">
		<p class="name">
			Red Tabby Bicolor<br/>
		 	Male
		</p>
		<p class="status">Available</p>
		<img src="kittens/g/2as.jpg" />
		<img src="kittens/g/2bs.jpg" />
	</div>
	<div id="new3">
		<p class="name">
			Red Tabby<br/>
		 	Male
		</p>
		<p class="status">Available</p>
		<img src="kittens/g/3as.jpg" />
		<img src="kittens/g/3bs.jpg" />
	</div>
	<div id="new4">
		<p class="name">
			Cream Point<br/>
		 	Female
		</p>
		<p class="status">Reserved</p>
		<img src="kittens/g/4as.jpg" />
		<img src="kittens/g/4bs.jpg" />
	</div>
</div>
    <?php
     $xml = simplexml_load_file('data/litters.xml');
     foreach ($xml->xpath('//litter') as $litter) {
     ?>
		<div class="litter">
		<h1><?=$litter->name?></h1>
		<p><?=$litter->description?></p>	
		<div class="gallery">
		<?php if ($litter->pictures->picture[0]->url) { ?>
		<div class="col">
			<img src="<?=$litter->pictures->picture[0]->url?>"/>
			<div class="caption"><?=$litter->pictures->picture[0]->caption?></div>
		</div>
		<?php } ?>
		<?php if ($litter->pictures->picture[1]->url) { ?>
		<div class="col">
			<img src="<?=$litter->pictures->picture[1]->url?>"/>
			<div class="caption"><?=$litter->pictures->picture[1]->caption?></div>
		</div>
		<?php } ?>
		<?php if ($litter->pictures->picture[2]->url) { ?>
		<div class="col">
			<img src="<?=$litter->pictures->picture[2]->url?>"/>
			<div class="caption"><?=$litter->pictures->picture[2]->caption?></div>
		</div>
		<?php } ?>
	</div>
	<?php } ?>
   </div>
   <?php include('inc/footer.php'); ?>
  </div>
 </body>
</html>