<?php
include_once("include/connection.php");
include_once("include/functions.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>InStar Group</title>
<link rel="stylesheet" href="css/reset.css" type="text/css" />
<link rel="stylesheet" href="css/news.css" type="text/css" />
<script src="js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
</head>

<?php
if(isset($_GET['id'])){
$id = $_GET['id'];
$sql = "select *  from news where status = 1 and id = ".$id;
//echo $sql."<br/>";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
{
   $title = $row['title'];
   $content = $row['content'];
   $status = $row['status'];
   $createDate = $row['createDate'];
   $type = $row['type'];
}

?>
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
      <div class="is-news-li">
            	<div class="is-newslititle">Results 1-15</div>
                <ul class="news-list">
                    <li><a href="news.html">3 Things Barnes & Noble Must Do to Survive Its Next Chapter</a></li>
                    <li><a href="news.html">These Elite Musicians Are Rockin' in the Business World</a></li>
                    <li><a href="news.html">Meet the New Boss: The 3 Biggest CEO Changes of 2014 So Far</a></li>
                    <li><a href="news.html">3 Things Barnes & Noble Must Do to Survive Its Next Chapter</a></li>
                    <li><a href="news.html">These Elite Musicians Are Rockin' in the Business World</a></li>
                    <li><a href="news.html">Meet the New Boss: The 3 Biggest CEO Changes of 2014 So Far</a></li>
                </ul>
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
        	<h2><a href="javascript:history.back(-1)"><img src="images/back1.png"/> Back</a></h2>
            <div class="news-title"><?php echo $title;?></div>
            <div class="is-model-info-right" id="sucai">
            	<?php echo $content;?>
            <!--
                <p>There are signs of life again at lululemon athletica (LULU). Shares of the retailer of high-end yoga apparel opened sharply higher on Thursday after it posted better-than-expected quarterly results. Offering up a rosier near-term outlook also isn't hurting. The encouraging report comes at a welcome time for roughed-up investors. The stock was closing in on another three-year low ahead of the financial results.</p>
                
                <p>Net sales climbed 13 percent to $390.7 million in Lululemon's fiscal second quarter, comfortably ahead of the mere 9 percent advance that analysts were forecasting. The path down the income statement wasn't as kind. Margins contracted, leading to a dip in operating profits. At the bottom of the income statement we see net income sliding 14 percent to $48.7 million, or $33 cents a share. The good news for investors is that Wall Street was bracing for an even larger drop, targeting earnings of just 29 cents a share for the period.</p>
                <p>Net sales climbed 13 percent to $390.7 million in Lululemon's fiscal second quarter, comfortably ahead of the mere 9 percent advance that analysts were forecasting. The path down the income statement wasn't as kind. Margins contracted, leading to a dip in operating profits. At the bottom of the income statement we see net income sliding 14 percent to $48.7 million, or $33 cents a share. The good news for investors is that Wall Street was bracing for an even larger drop, targeting earnings of just 29 cents a share for the period.</p>
             --> 
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
<?php
}else {
  echo  $err[] = "The parameter is wrong or the database is temperarily unavailable. <a href='index.html'>Go back</a>";
} // end of get

?>

</html>
<script type="text/javascript">
$(".is-mobile-nav").click(function(){
								   $(".is-nav").slideToggle();
								   })
$(".all-newslink").click(function(){
								   var attrcss=$(".is-news-li").css("display");
								   //alert(attrcss);
								   if(attrcss=="none")
								   {
									   $(".is-news-li").css("display","block");
								   	$(".is-news-right").css("display","none");							  
								   }
								   else if(attrcss=="block")
								   {
									   $(".is-news-li").css("display","none");
									   $(".is-news-right").css("display","block");
									
									}
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
