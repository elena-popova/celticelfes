<?php foreach ($xml->xpath('//cat') as $cat) { ?>
 <div id="<?=$cat->tag?>" class="cat">
  <div class="gallery">
   <img id="<?=$cat->tag?>_main" src="<?=$cat->pictures->main?>" />
   <ul>
    <?php for ($i = 0; $i < 3; $i++) { ?>
     <li><img id="<?=$cat->tag?>_thumb<?=$i?>" src="<?=$cat->pictures->others->other[$i]->small?>" /></li>
    <?php } ?>
   </ul>
  </div>
  <div class="bio">
   <h3><?=$cat->name?></h3>
   <ul>
    <?php if ($cat->sire->url) { ?>
     <li><span class=\"label\">Sire:</span> <a href="<?=$cat->sire->url?>"><?=$cat->sire->name?></a></li>
    <?php } else { ?>
     <li><span class="label">Sire:</span> <?=$cat->sire->name?></li>
    <?php } ?>
    <?php if ($cat->dam->url) { ?>
     <li><span class="label">Dam:</span> <a href="<?=$cat->dam->url?>"><?=$cat->dam->name?></a></li>
    <?php } else { ?>
     <li><span class="label">Dam:</span> <?=$cat->dam->name?></li>
    <?php } ?>
    <li><span class="label">Born:</span> <?=$cat->dob?></li>
    <li><span class="label">Colour:</span> <?=$cat->colour?></li>
    <li><span class="label">Blood Type:</span> <?=$cat->bloodType?></li>
   </ul>
   <?php if ($cat->results) { ?>
    <h4>Show Results</h4>
    <ul>
    <?php foreach ($cat->results->result as $result) { ?>
     <li><?=$result->award?> - <?=$result->show?></li>
    <?php } ?>
   </ul>
  <?php } ?>
  </div>
 </div>
<?php } ?>