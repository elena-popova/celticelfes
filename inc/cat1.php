<script type="text/javascript">
 $(function() {
  <?php
   foreach ($xml->xpath('//cat') as $cat) {
    for ($i = 0; $i < 3; $i++) {
     echo "$(\"img#".$cat->tag."_thumb".$i."\")\n";
     echo "\t.mouseover(function() { $(\"img#".$cat->tag."_main\").attr(\"src\", \"".$cat->pictures->others->other[$i]->large."\"); })\n";
     echo "\t.mouseout(function() { $(\"img#".$cat->tag."_main\").attr(\"src\", \"".$cat->pictures->main."\"); });\n";
    }
   }
  ?>
 });
</script>