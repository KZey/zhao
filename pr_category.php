<?php
include_once("include/connection.php");
include_once("include/functions.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>Instar Group ::  Retainer CLient</title>
<link rel="stylesheet" href="css/reset.css" />
<link rel="stylesheet" href="css/frontpage.css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
</head>

<body>
<div class="is-women is-mobile">
    <div class="is-mobiles-menus">
        <a class="is-mobile-nav">
            <img src="images/menu.png">
        </a>
        
        <h1 class="is-logo"><a href="index.html"><img src="images/logo.png"></a></h1>
        <div class="clrsmo"></div>
        <div class="is-nav is-women-menu ">
		<a class="is-nav-crt" href="pr.php"><i>PR & COMMUNICATION</i></a>
		<a class="lastnemu" href="pr_category.php"><i>CASES</i></a><div class="clr"></div></div>
        
        <div class="clr"></div>
        </div>
        <div class="is-women-title">OUR <span>& PR RETAINER CLIENT</span></div>
        <div class="is-women-box w1118">
        


<?php
    $dataset=mysql_query("select * from public_relation where status = 1 order by id desc");
    while ($result = mysql_fetch_array($dataset))
    {
?>

           <div class="is-frontpage-list is-margin w274 is-margin-bottom">
                <a class="is-frontpage-a" href="./pr_detail.php?id=<?php echo $result['id'];?>">
                    <img class="is-category-img" src="./admin/<?php echo $result['thumbNail'];?>" width='274' height='274' />
                    <div class="is-frontpage-text">
                    
                        <span class="is-frontpage-textop is-women-text"><?php echo $result['title'];?></span>
                    </div>
                </a>
            </div>
           
<?php
     }
?>
            
     

            <div class="clr"></div>
            <div class="topandbottom"><a href="javascript:void(0)"><img src="images/top.png" /></a><a href="javascript:void(0)"><img src="images/down.png" /></a></div>
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
<script type="text/javascript">
$(".is-mobile-nav").click(function(){
								   $(".is-nav").slideToggle();
								   })
$(".is-frontpage-list").hover(function(){
									   $(this).find(".is-frontpage-textop").animate({opacity:"0"},800).css({flter:"Alpha(Opacity=0)"});
									    $(this).find(".is-frontpage-text").animate({opacity:"0"},800).css({flter:"Alpha(Opacity=0)"});
									   },
									   function(){
										 $(this).find(".is-frontpage-textop").animate({opacity:"1"},800).css({flter:"Alpha(Opacity=100)"});
										$(this).find(".is-frontpage-text").animate({opacity:"1"},800).css({flter:"Alpha(Opacity=100)"});
									   }
									   
									   )
</script>

<script type="text/javascript">
$(function(){
	
	// 页面浮动面板
	$(".topandbottom a").eq(0).click(function(){
		$("html,body").animate({scrollTop :0}, 800);
		return false;
	});
	$(".topandbottom a").eq(1).click(function(){
		$("html,body").animate({scrollTop : $(document).height()}, 800);
		return false;
	});

});
</script>
