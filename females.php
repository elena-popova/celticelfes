<!DOCTYPE html>
<html>
 <?php $tab = 2 ?>
 <?php $title = 'Celticelfes Dams' ?>
 <?php $xml = simplexml_load_file('data/females.xml'); ?>
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