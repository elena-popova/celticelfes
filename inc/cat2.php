<?php
 foreach ($xml->xpath('//cat') as $cat) {
  echo "<div id=\"".$cat->tag."\" class=\"cat\">\n";
  echo "\t<div class=\"gallery\">\n";
  echo "\t\t<img id=\"".$cat->tag."_main\" src=\"".$cat->pictures->main."\" />\n";
  echo "\t\t<ul>\n";
  for ($i = 0; $i < 3; $i++) {
   echo "\t\t\t<li><img id=\"".$cat->tag."_thumb".$i."\" src=\"".$cat->pictures->others->other[$i]->small."\" /></li>\n";
  }
  echo "\t\t</ul>\n";
  echo "\t</div>\n";
  echo "\t<div class=\"bio\">\n";
  echo "\t\t<h3>".$cat->name."</h3>\n";
  echo "\t\t<ul>\n";
  if ($cat->sire->url) {
   echo "\t\t\t<li><span class=\"label\">Sire:</span> <a href=\"".$cat->sire->url."\">".$cat->sire->name."</a></li>\n";
  } else {
   echo "\t\t\t<li><span class=\"label\">Sire:</span> ".$cat->sire->name."</li>\n";
  }
  if ($cat->dam->url) {
   echo "\t\t\t<li><span class=\"label\">Dam:</span> <a href=\"".$cat->dam->url."\">".$cat->dam->name."</a></li>\n";
  } else {
   echo "\t\t\t<li><span class=\"label\">Dam:</span> ".$cat->dam->name."</li>\n";
  }
  echo "\t\t\t<li><span class=\"label\">DoB:</span> ".$cat->dob."</li>\n";
  echo "\t\t\t<li><span class=\"label\">Colour:</span> ".$cat->colour."</li>\n";
  echo "\t\t\t<li><span class=\"label\">Blood Type:</span> ".$cat->bloodType."</li>\n";
  echo "\t\t</ul>\n";
  if ($cat->results) {
   echo "\t\t<h4>Show Results</h4>\n";
   echo "\t\t<ul>\n";
   foreach ($cat->results->result as $result) {
    echo "\t\t\t<li>".$result->award." - ".$result->show."</li>\n";
   }
   echo "\t\t</ul>\n";
  }
  echo "\t</div>\n";
  echo "</div>\n";
 }
?>