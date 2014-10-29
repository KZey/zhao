<?php
include_once("include/connection.php");
include_once("include/functions.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>InStar Group</title>
<link rel="stylesheet" href="css/reset.css" />
<link rel="stylesheet" href="css/eventdetail.css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
</head>

<?php
if(isset($_GET['id'])){
$id = $_GET['id'];
$sql = "select *  from public_relation where id = ".$id;
//echo $sql."<br/>";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
{
   $title = $row['title'];
   $description = $row['description'];
   $status = $row['status'];
   $city = $row['city'];
   $createDate = $row['createDate'];
   $address = $row['address'];
}

?>

<body>
<div class="is-women is-mobile">
    <div class="is-mobiles-menus">
        <a class="is-mobile-nav">
            <img src="images/menu.png">
        </a>
        
        <h1 class="is-logo"><a href="index.html"><img src="images/logo.png"></a></h1>
        <div class="clrsmo"></div>
        
        <div class="is-nav is-women-menu ">

	<a href="pr_category.html"><i>PR & COMMUNICATION</i></a>
	<a  class="is-nav-crt lastnemu" href="pr_category.html"><i>CASES</i></a>

        <div class="clr"></div></div>
        
        <div class="clr"></div>
        </div>
        <div class="back"><a href="javascript:history.back(-1)"><img src="images/back.png"> BACK</a></div>
        <div class="is-event-detail">
        	<div class="event-left">
            	<h2><?php echo $title;?></h2>
                <?php echo $description;?><br/>
                <?php echo $city;?><br/>
                <p><?php echo $address;?></p>
                </div>
            <div class="event-right">

<?php
$sql = "select *  from public_relation_image where publicRelationId = ".$id;
//echo $sql."<br/>";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
{
   //$picture[] = $row['picture'];
   echo "<img src ='".$row['picture']."'>";
}

?>

<!--
            	<img src="./images/PR/Chloe/ch1.jpg"/>
                <img src="./images/PR/Chloe/ch2.jpg"/>
                <img src="./images/PR/Chloe/ch3.jpg"/>
                <img src="./images/PR/Chloe/ch4.jpg"/>
                <img src="./images/PR/Chloe/ch5.jpg"/>
                <img src="./images/PR/Chloe/ch6.jpg"/>
-->


                <div class="topandbottom"><a href="javascript:void(0)"><img src="images/top.png"></a><a href="javascript:void(0)"><img src="images/down.png"></a></div>
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
