<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><! <html class="no-js" lang="en">--> <!--<![endif]-->
	<link rel='stylesheet' href='css/style.css'>
	
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
		
    <script src='js/jquery-1.5.2.js'></script>
    <script src='js/jquery.color-RGBa-patch.js'></script>
    <script src='js/example.js'></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <script type="text/javascript" src="js/jquery.infinitecarousel.js"></script>
	<!--PrettyP-->
	<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
	<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>    


<script type="text/javascript">
$(function(){
	$('#carousel').infiniteCarousel({
		displayTime: 2500,
		textholderHeight : .25,
		transitionSpeed: 1100		
	});
});
</script>

<script type="text/javascript" charset="utf-8">
  $(document).ready(function(){
//    $("a[rel^='prettyPhoto']").prettyPhoto({theme: 'dark_rounded', social_tools: false, opacity: 0.65, deeplinking: false });
//	$('#popupHome').click();
  });
</script>

</head>

<body>
<!-- header -->




<!-- FACEBOOK -->

      
        
    <ul class="group" id="example-two">
          <li class="current_page_item_two"><a rel="#FFF" href="#"></a></li>
  
      </ul>

<!-- header -->

<div id="contenedor"> 
     <div id="header">
         <div class="wrap" style="padding-left:10px;padding-top:10px;">
               <div id="carousel">
                    <ul>
                        
                        <li><img alt="" src="images/img_home2.jpg" width="930" height="480" /></li>
                        <li><img alt="" src="images/img_home3.jpg" width="930" height="480" /></li>
                    </ul>
               </div>
         </div>
     </div>
  <!--/header-->
</div>


<!-- footer -->
<div id="contenedor">
  <br><br><br><br><br>
<a style="display:none" id="popupHome" href="images/popup-home.png" rel="prettyPhoto"><img src="images/popup-home.png" width="500" height="500" /></a></div><!--/footer-->


<div id="fb-root"></div>
<script>    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=1505347526430547";
        fjs.parentNode.insertBefore(js, fjs);
    } (document, 'script', 'facebook-jssdk'));</script>

</body>

</html>


