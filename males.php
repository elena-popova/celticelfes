<!DOCTYPE html>
<html>
 <?php $tab = 1 ?>
 <?php $title = 'Celticelfes Sires' ?>
 <?php $xml = simplexml_load_file('data/males.xml'); ?>
 <head>
  <?php include('inc/head.php'); ?>
  <?php include('inc/cat1.php'); ?>
 </head>
 <body>
  <?php include('inc/fb.php'); ?>
  <div id="main">
   <?php include('inc/header.php'); ?>
   <div id="content">
    <?php include('inc/cat2.php'); ?>
   </div>
   <?php include('inc/footer.php'); ?>
  </div>
 </body>
</html>