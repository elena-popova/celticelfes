<!DOCTYPE html>
<html>
 <?php $tab = 4 ?>
 <?php $title = 'Celticelfes Gallery' ?>
 <head>
  <?php include('inc/head.php'); ?>
  <script src="galleria/galleria-1.2.8.min.js"></script>
  <script type="text/javascript">
   var data = [
    <?php
     $xml = simplexml_load_file('data/gallery.xml');
     foreach ($xml->xpath('//item') as $item) { ?>
      { image:'<?=$item->image?>'
      <?php if ($item->title) { ?>
       echo ", title:'".$item->title."'";
      <?php }
      if ($item->description) { ?>
       , description:'<?=$item->description?>'
      <?php }
      if ($item->layer) { ?>
       , layer:'<?=$item->layer?>'
      <?php } ?>
      },
     <?php } ?>
   ];
   Galleria.loadTheme('galleria/themes/classic/galleria.classic.min.js');
   Galleria.run('#galleria', { dataSource: data, lightbox: true, showInfo: true });
  </script>
 </head>
 <body>
  <?php include('inc/fb.php'); ?>
  <div id="main">
   <?php include('inc/header.php'); ?>
   <div id="content">
    <div id="galleria"></div>
   </div>
   <?php include('inc/footer.php'); ?>
  </div>
 </body>
</html>