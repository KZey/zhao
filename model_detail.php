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
<link rel="stylesheet" href="css/model-detail.css" />

    
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" charset="utf-8">

	<script src="js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/slider.js" type="text/javascript" charset="utf-8"></script>
    
	<link rel="stylesheet" type="text/css" href="fancybox/fancybox/jquery.fancybox-1.2.6.css" media="screen" />
	
</head>

<?php
if(isset($_GET['id'])){
$id = $_GET['id'];
$sql = "select *  from model where id = ".$id;
//echo $sql."<br/>";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
{
   $gender = $row['gender'];
   $name = $row['name'];
   $name_cn = $row['name_cn'];
   $height = $row['height'];
   $shoes = $row['shoes'];
   $bust = $row['bust'];
   $hair = $row['hair'];
   $waist = $row['waist'];
   $eyes = $row['eyes'];
   $hips = $row['hips'];
   $modelCard = $row['modelCard'];
   $status = $row['status'];
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
        <div class="is-nav is-women-menu "><a class="is-nav-crt" href="model.html"><i>ABOUT MANAGMENT</i></a><a href="model_women.html"><i>WOMEN</i></a><a href="model_men.html"><i>MEN</i></a><a href="news_list.html"><i>NEWS</i></a><a  href="become_a_model.html" class="lastnemu"><i>BECOME A MODEL</i></a><div class="clr"></div></div>
        
        <div class="clr"></div>
        </div>
        
        <div class="back"><a href="javascript:history.back(-1)"><img src="images/back.png" /> BACK</a></div>
        
        <div class="is-model-main">
        	<div class="is-model-left">
            	<ul>
                	<li class="is-model-enname"><?php echo $name;?><!--WANG <span>YIWEN</span>--></li>
                    <li class="is-model-cnname"><?php echo $name_cn;?></li>
                </ul>
            </div>
            <div class="is-model-center">
            	<ul>
                    <li>HEIGHT:<span><?php echo $height;?></span></li>
                    <li>SHOES<span><?php echo $shoes;?></span></li>
                    <li>BUST:<span><?php echo $bust;?></span></li>
                    <li>HAIR:<span><?php echo $hair;?></span></li>
                    <li>WAIST:<span><?php echo $waist;?></span></li>
                    <li>EYES:<span><?php echo $eyes;?></span></li>
                    <li>HIPS:<span><?php echo $hips;?></span></li>
                </ul>
                <div class="clr"></div>
            </div>
            <div class="is-model-right">
            	<a href="./admin/<?php echo $modelCard;?>" class="downloadmodel">DOWNLOAD MODEL CARD</a>
                <a href="javascript:window.print()" class="printpage" onClick="window.print();">PRINT PAGE</a>
            </div>
            <div class="clr"></div>
            <div class="is-model-table">
            	<a href="javascript:void(0)" class="is-model-cur tab1">PROTFOLIO</a><span></span>
                <a href="javascript:void(0)" class="tab2">POLAROIDS</a><span></span>
                <a href="javascript:void(0)" class="tab3">PRESS</a>
            </div>
            


<!----  Protfolio starts-------------------------------------------------------->
           <div class="is-model-pro">
            	<div id="slider">    

<?php
    $id = $_GET['id'];
    $dataset=mysql_query("select * from model_image where typeId = 1 and modelId = ".$id." order by id desc");
    $result = mysql_fetch_array($dataset);
    $num = count($result);
?>
		  <?php if ($num > 3) {?><img class="scrollButtons left" src="images/left.jpg" alt="" /><?php }?>
	
			<div style="overflow: hidden;" class="scroll">	
		
				<div class="scrollContainer">	
				
<?php
    while ($result = mysql_fetch_array($dataset))
    {
?>

					<div class="panel" id="panel_1">
				
						<div class="inside">
					
							<img src="<?php echo $result['picture'];?>" alt="" />
                   

						</div>
				
					</div>

<?php
    }
?>
				
				</div>

			
			</div>
		
		 <?php if ($num > 3) {?> <img class="scrollButtons right" src="images/right.png" alt="right" /><?php }?>            
	  </div>
           </div>
<!----  Protfolio ends-------------------------------------------------------->







<!----  Polaroids starts-------------------------------------------------------->
       <div class="is-model-pol" style="display:none;">

            	<div id="slider">    

<?php
    $id = $_GET['id'];
    $dataset=mysql_query("select * from model_image where typeId = 2 and modelId = ".$id." order by id desc");
    $result = mysql_fetch_array($dataset);
    $num = count($result);
?>
		  <?php if ($num > 3) {?><img class="scrollButtons left" src="images/left.jpg" alt="" /><?php }?>
	
			<div style="overflow: hidden;" class="scroll">	
		
				<div class="scrollContainer">	
				
<?php
    while ($result = mysql_fetch_array($dataset))
    {
?>

					<div class="panel" id="panel_1">
				
						<div class="inside">
					
							<img src="<?php echo $result['picture'];?>" alt="" />
                   

						</div>
				
					</div>

<?php
    }
?>
				
				</div>

			
			</div>
		
		 <?php if ($num > 3) {?> <img class="scrollButtons right" src="images/right.png" alt="right" /><?php }?>            
	  </div>
           </div>
<!----  Polaroids ends-------------------------------------------------------->



<!----  Press starts-------------------------------------------------------->
          <div class="is-model-press" style="display:none;">
            	<div id="slider">    

<?php
    $id = $_GET['id'];
    $dataset=mysql_query("select * from model_image where typeId = 3 and modelId = ".$id." order by id desc");
    $result = mysql_fetch_array($dataset);
    $num = count($result);
?>
		  <?php if ($num > 3) {?><img class="scrollButtons left" src="images/left.jpg" alt="" /><?php }?>
	
			<div style="overflow: hidden;" class="scroll">	
		
				<div class="scrollContainer">	
				
<?php
    while ($result = mysql_fetch_array($dataset))
    {
?>

					<div class="panel" id="panel_1">
				
						<div class="inside">
					
							<img src="<?php echo $result['picture'];?>" alt="" />
                   

						</div>
				
					</div>

<?php
    }
?>
				
				</div>

			
			</div>
		
		 <?php if ($num > 3) {?> <img class="scrollButtons right" src="images/right.png" alt="right" /><?php }?>            
	  </div>
           </div>
<!----  Press ends-------------------------------------------------------->

		
      
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
<!--<script type="text/javascript">
$(".is-mobile-nav").click(function(){
								   $(".is-nav").slideToggle();
								   })
</script>-->

<script type="text/javascript">
$(".is-mobile-nav").click(function(){
								   $(".is-nav").slideToggle();
								   })
$(function(){
		   var screenwidth=window.screen.width;
		   scrollwidth=$("#slider").width();
		   //alert();
		   if(screenwidth<=1000)
		   {
			  
			  $(".scroll").css("width",scrollwidth+234+"px");
			  $(".scroll").css("margin-left","-234px");
		   }
		   
		   })

</script>
