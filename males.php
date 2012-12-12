<!DOCTYPE html>
<html>
 <?php $tab = 1 ?>
 <?php $xml = simplexml_load_file('data/males.xml'); ?>
 <head>
  <?php include('inc/head.php'); ?>
  <title>Celticelfes Dams | Pedigree Devon Rex kittens for sale in Ireland</title>
  <?php include('inc/cat1.php'); ?>
 </head>
 <body>
  <div id="fb-root"></div>
  <script>
   (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
  </script>
  <div id="main">
   <?php include('inc/header.php'); ?>
   <div id="content">
    <?php include('inc/cat2.php'); ?>
   </div>
   <?php include('inc/footer.php'); ?>
  </div>
 </body>
</html>