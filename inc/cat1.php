<script type="text/javascript">
 $(function() {
  <?php
   foreach ($xml->xpath('//cat') as $cat) {
    for ($i = 0; $i < 3; $i++) { ?>
     $("img#<?=$cat->tag?>_thumb<?=$i?>")
     	.mouseover(function() { $("img#<?=$cat->tag?>_main").attr("src", "<?=$cat->pictures->others->other[$i]->large?>"); })
     	.mouseout(function() { $("img#<?=$cat->tag?>_main").attr("src", "<?=$cat->pictures->main?>"); });
  <?php } } ?>
 });
</script>