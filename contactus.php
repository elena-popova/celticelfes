<!DOCTYPE html>
<html>
 <?php $tab = 5 ?>
 <?php $title = 'Celticelfes Contact Us' ?>
 <head>
  <?php include('inc/head.php'); ?>
 </head>
 <body>
  <?php include('inc/fb.php'); ?>
  <div id="main">
   <?php include('inc/header.php'); ?>
   <div id="content">
   	You can contact us by e-mail at <a href="mailto:<?=$emailaddr?>"><?=$emailaddr?></a> or via our Facebook page at <a href="<?=$facebookurl?>"><?=$facebookurl?></a>.
   </div>
   <?php include('inc/footer.php'); ?>
  </div>
 </body>
</html>