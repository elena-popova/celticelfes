<!DOCTYPE html>
<html>
 <?php $tab = 3 ?>
 <?php $title = 'Celticelfes Kittens' ?>
 <head>
  <?php include('inc/head.php'); ?>
  <link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen" />
  <script type="text/javascript" src="js/jquery.lightbox-0.5.min.js"></script>	
  <script type="text/javascript">
   $(function() { 
  	$('a.lightbox').lightBox();
   }); 
  </script>
 </head>
 <body>
  <?php include('inc/fb.php'); ?>
  <div id="main">
   <?php include('inc/header.php'); ?>
   <div id="content">
    <h1><img src="images/new.png" alt="New Arrivals"/></h1>
    <p>
  	 <a href="male.php#panek">PL* Agumbamka Domalien (Panek)</a> and 
	 <a href="females.php#lola">Rogus Maggie-May (Lola)</a> had kittens on December 22, 2012. 
     There are four kittens available for sale and collection at 12 weeks.
    </p>
    <img src="kittens/g/litter.jpg" style="padding-left:240px" />
    <p>
     Contact us by 
     e-mail at <a href="mailto:<?=$emailaddr?>?Subject=Devon%20Rex%20-%20Litter%20G"><?=$emailaddr?></a> or via
     <a href="<?=$facebookurl?>" target="_parent">Facebook</a>.
    </p>
    <div class="new">
	 <div id="new1">
	  <p class="name">
       Red Tabby Bicolor<br/>
       Female
      </p>
      <p class="status">Available</p>
      <a href="kittens/g/1al.jpg" class="lightbox"><img src="kittens/g/1as.jpg"/></a>
      <a href="kittens/g/1bl.jpg" class="lightbox"><img src="kittens/g/1bs.jpg"/></a>
     </div>
     <div id="new2">
      <p class="name">
       Red Tabby Bicolor<br/>
       Male
      </p>
      <p class="status">Available</p>
      <a href="kittens/g/2al.jpg" class="lightbox"><img src="kittens/g/2as.jpg"/></a>
      <a href="kittens/g/2bl.jpg" class="lightbox"><img src="kittens/g/2bs.jpg"/></a>
	 </div>
	 <div id="new3">
	  <p class="name">
	   Red Tabby<br/>
	   Male
	  </p>
	  <p class="status">Available</p>
	  <a href="kittens/g/3al.jpg" class="lightbox"><img src="kittens/g/3as.jpg"/></a>
	  <a href="kittens/g/3bl.jpg" class="lightbox"><img src="kittens/g/3bs.jpg"/></a>
	 </div>
	 <div id="new4">
	  <p class="name">
	   Cream Point<br/>
       Female
      </p>
      <p class="status">Reserved</p>
      <a href="kittens/g/4al.jpg" class="lightbox"><img src="kittens/g/4as.jpg"/></a>
      <a href="kittens/g/4bl.jpg" class="lightbox"><img src="kittens/g/4bs.jpg"/></a>
     </div>
    </div>
    <?php
     $xml = simplexml_load_file('data/litters.xml');
     foreach ($xml->xpath('//litter') as $litter) {
     ?>
		<div class="litter">
		<?php if (file_exists("images/litter_" . $litter->tag . ".png")) { ?>
		<img src="images/litter_<?=$litter->tag?>.png" alt="<?=$litter->name?>" />
		<?php } else { ?>
		<h1><?=$litter->name?></h1>
		<?php } ?>
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
	</div>
	<?php } ?>
  </div>
   <?php include('inc/footer.php'); ?>
  </div>
 </body>
</html>