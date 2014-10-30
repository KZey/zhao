<?php

include_once("include/connection.php");
include_once("include/functions.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>Instar Group :: News</title>
<link rel="stylesheet" href="css/reset.css" type="text/css" />
<link rel="stylesheet" href="css/news.css" type="text/css" />
<script src="js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="js/jcarousellite_index.js"></script>
</head>

<body>
<div class="is-main is-mobile">
	<header id="is-header">
        <div class="is-mobiles-menus">
        <a class="is-mobile-nav">
            <img src="images/menu.png" />
        </a>
        
        <h1 class="is-logo"><a href="index.html"><img src="images/logo.png" /></a></h1>
        <div class="clrsmo"></div>
        <div class="is-nav"><a href="index.html"><i>HOME</i></a><a href="news.php" class="is-nav-crt"><i>NEWS</i></a><a href="aboutus.html"><i>ABOUT US</i></a><a href="our_service.html"><i>OUR SERVICE</i></a><a href="contact.html" class="lastnemu"><i>CONTACT US</i></a><div class="clr"></div></div>
        </div>
    </header>
    
  <div class="is-news-main">
    <div class="is-news-banner"><img src="images/newsbanner.jpg" /></div>
        <div class="all-news">
        	<a href="javascript:void(0)" class="all-newslink">
            	ALL NEWS
                <img src="images/list.png" />
            </a>
           
      </div>
       
        <div class="is-news-left">
        	<ul>
            	<li class="is-news-cur"><a href="./news.php">ALL NEWS</a></li>
                <li><a href="./news.php?type=1">MODEL NEWS</a></li>
                <li><a href="./news.php?type=2">PR NEWS</a></li>
                <li><a href="./news.php?type=3">EVENT NEWS</a></li>
          </ul>
    </div>
    <div class="is-news-right">
        	
            <div class="news-title1"> News List</div>
            <div class="news-list" id="sucai">
            	<ul>

<?php

$sql = "select * from news ";
if(isset($_GET['type'])){
    $sql = $sql . " where type = ".$_GET['type'];
}
$sql = $sql. " order by id desc";


    $dataset=mysql_query($sql);
    while ($result = mysql_fetch_array($dataset))
{
?>
                	<li><a href="news_detail.php?id=<?php echo $result['id'];?>"><?php echo $result['title'];?></a></li>
<?php
}
?>  
              </ul>
            </div>
    </div>
        <div class="clr"></div>
  </div>
    <footer id="footer">
    	<div class="is-footer">
        	© COPYRIGHT INSTAR GROUP 2014.ALL RIGHTS RESERVED
        	<div class="is-footer-img">
            	<a href="javascript:void(0)" class="is-footer-t t"><img src="images/is0005.png" /></a>
                <a href="javascript:void(0)" class="is-footer-t w"><img src="images/is0006.png" /></a>
                <a href="javascript:void(0)" class="is-footer-t f"><img src="images/is0007.png" /></a>
                <a href="javascript:void(0)" class="is-footer-t i"><img src="images/is0008.png" /></a>
                <a href="javascript:void(0)" class="is-footer-t l"><img src="images/is0009.png" /></a>
                
            </div>
        </div>
  		
    </footer>
</div>
</body>
</html>
<script type="text/javascript" src="js/jquery.nicescroll.js"></script>
<script type="text/javascript">
$("#sucai").niceScroll({  
	cursorcolor:"#29a1d4",  
	cursoropacitymax:1,  
	touchbehavior:false,  
	cursorwidth:"4px",  
	cursorborder:"0",  
	cursorborderradius:"5px"  
}); 
</script>

<script type="text/javascript">
$(".is-mobile-nav").click(function(){
								   $(".is-nav").slideToggle();
								   })


</script>


<script type="text/javascript" src="js/jquery.nicescroll.js"></script>
<script type="text/javascript">
$("#sucai").niceScroll({  
	cursorcolor:"#29a1d4",  
	cursoropacitymax:1,  
	touchbehavior:false,  
	cursorwidth:"4px",  
	cursorborder:"0",  
	cursorborderradius:"5px"  
}); 
</script>
