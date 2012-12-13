<!DOCTYPE html>
<html>
 <?php $tab = 3 ?>
 <head>
  <?php include('inc/head.php'); ?>
  <title>Celticelfes Kittens | Pedigree Devon Rex kittens for sale in Ireland</title>
 </head>
 <body>
  <?php include('inc/fb.php'); ?>
  <div id="main">
   <?php include('inc/header.php'); ?>
   <div id="content">
<img src="kittens/top.jpg" style="padding-left:320px"/>
<p style="text-align: center">
<a href="mailto:info@celticelfes.com?Subject=Devon%20Rex">Mail to us about availible kittens</a>
</p>
<p>
	<a href="males.html#panek">PL* Agumbamka Domalien (Panek)</a> and 
	<a href="females.html#lola">Rogus Maggie-May (Lola)</a> are expecting babies
	in 1 week and they will be available for sale and collection after 12 weeks.
	Keep up to date by following us on <a href="http://www.facebook.com/#!/lastauskiene?fref=ts" target="_parent">Facebook</a> 
</p>
    <?php
     $xml = simplexml_load_file('data/litters.xml');
     foreach ($xml->xpath('//litter') as $litter) {
     ?>
		<div class="litter">
		<h1><?=$litter->name?></h1>
		<p><?=$litter->description?></p>	
		<div class="gallery">
		<?php if ($litter->pictures->picture[0]->url) { ?>
		<div class="col1">
			<img src="<?=$litter->pictures->picture[0]->url?>"/>
			<div class="caption"><?=$litter->pictures->picture[0]->caption?></div>
		</div>
		<?php } ?>
		<?php if ($litter->pictures->picture[2]->url) { ?>
		<div class="col3">
			<img src="<?=$litter->pictures->picture[2]->url?>"/>
			<div class="caption"><?=$litter->pictures->picture[2]->caption?></div>
		</div>
		<?php } ?>
		<?php if ($litter->pictures->picture[1]->url) { ?>
		<div class="col2">
			<img src="<?=$litter->pictures->picture[1]->url?>"/>
			<div class="caption"><?=$litter->pictures->picture[1]->caption?></div>
		</div>
		<?php } ?>
	</div>
	<?php } ?>
   </div>
   <?php include('inc/footer.php'); ?>
  </div>
 </body>
</html>