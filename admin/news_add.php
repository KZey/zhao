<?php
session_start();
if (!(isset($_SESSION['iflogin']) )) {
   header ("Location: login.php");
}

include_once("include/connection.php");
include_once("include/functions.php");
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD-->
<head>
   
     <meta charset="UTF-8" />
    <title>Instar Group: Admin Dashboard</title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/theme.css" />
    <link rel="stylesheet" href="assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="assets/plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <!-- END PAGE LEVEL  STYLES -->
       <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
    <!-- END  HEAD-->
    <!-- BEGIN BODY-->


<?php 
if($_POST['action']=='create'){ 
$title = trim($_POST['title']); 
$content = trim($_POST['description']);
$createDate = date('Y-m-d');
$updateDate = date('Y-m-d');
$type = $_POST['type'];
$status = $_POST['status'];
 
$sql = "insert into news values('', '".$title."', '".$content."', '".$createDate."', '".$updateDate."',".$status.", ".$type.") "; 
//echo $sql."<br/>"; 
$result = mysql_query($sql);  
    if ( $result ) {  
           session_start(); 
           session_regenerate_id (true);  
           $_SESSION['iflogin']= 1;   
           header("Location: news.php"); 
        } else { 
          echo  $err[] = "Operation failed, please check what you input or contact system admin, <a href='index.php'>Go back</a> "; 
        } 
 
} else { 
 
?>

<body class="padTop53 " >

     <!-- MAIN WRAPPER -->
    <div id="wrap">


         <!-- HEADER SECTION -->
        <div id="top">

            <nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
                <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                    <i class="icon-align-justify"></i>
                </a>
                <!-- LOGO SECTION -->
                <header class="navbar-header">

                    <a href="index.php" class="navbar-brand">
                    <img src="assets/img/logo.png" alt="" /></a><br/>
                </header>
                <!-- END LOGO SECTION -->
                <ul class="nav navbar-top-links navbar-right">

  


                    <!--ADMIN SETTINGS SECTIONS -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-user "></i>&nbsp; <i class="icon-chevron-down "></i>
                        </a>

                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="icon-user"></i> User Profile </a>
                            </li>
                            <li><a href="logout.php"><i class="icon-signout"></i> Logout </a>
                            </li>
                        </ul>

                    </li>
                    <!--END ADMIN SETTINGS -->
                </ul>

            </nav>

        </div>
        <!-- END HEADER SECTION -->



        <!-- MENU SECTION -->
       <div id="left">
            <div class="media user-media well-small">
                <div class="media-body">
                    <h5 class="media-heading">Admin</h5>
                    <ul class="list-unstyled user-info">
                        
                        <li>
                             <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online
                           
                        </li>
                       
                    </ul>
                </div>
                <br />
            </div>

            <ul id="menu" class="collapse">

                
                <li class="panel">
                    <a href="index.php" >
                        <i class="icon-table"></i> Dashboard          
                    </a>                   
                </li>

                <li><a href="news.php"><i class="icon-film"></i> News Management </a></li>
                <li><a href="pr.php"><i class="icon-table"></i> PR Management </a></li>
                <li><a href="event.php"><i class="icon-map-marker"></i> Events Management </a></li>
                <li><a href="model"><i class="icon-columns"></i> Model Management </a></li>
            </ul>

        </div>
        <!--END MENU SECTION -->


        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner" style="min-height:500px;">
                <div class="row">
                    <div class="col-lg-12">


                        <h2>News</h2>



                    </div>
                </div>

                <hr />


<div class="row">
<div class="col-lg-12">
    <div class="box dark">

        <header>

            <div class="icons"><i class="icon-edit"></i></div>

            <h5>Create news</h5>

        </header>

        <div id="div-1" class="accordion-body collapse in body">

            <form class="form-horizontal" action='news_add.php' method='post' >

                <div class="form-group">

                    <label for="text1" class="control-label col-lg-4">Title</label>



                    <div class="col-lg-8">

                        <input type="text" id="title" name='title' placeholder="title" class="form-control" maxlength='50' />

                    </div>

                </div>


                <div class="form-group">

                    <label for="text1" class="control-label col-lg-4">Type</label>



                    <div class="col-lg-8">

                      <select name="type" class="validate[required] form-control">

                           <option value="1" selected = 'true' > Model News</option>

                           <option value="2" >PR News</option>

                           <option value="3" >Event News</option>

                      </select>

                    </div>

                </div>


                <div class="form-group">

                    <label for="text4" class="control-label col-lg-4">Description</label>



                    <div class="col-lg-8">

                        <textarea id="description" name='description' class="form-control"></textarea>

                    </div>

                </div>

                <div class="form-group">

                    <label for="text1" class="control-label col-lg-4">Status</label>



                    <div class="col-lg-8">

                      <select name="status" class="validate[required] form-control">

                           <option value="1" >Enabled</option>

                           <option value="0" >Disabled</option>

                      </select>

                    </div>

                </div>



              <input type='hidden' name='action' value='create' />
              <input class="btn btn-primary" type="submit" value='Create' />

            </form>

        </div>

    </div>

</div>

   

    </div>


       <!--END PAGE CONTENT -->


    </div>

     <!--END MAIN WRAPPER -->
   <!-- FOOTER -->
    <div id="footer">
        <p>&copy;  Instar Group &nbsp;2014 &nbsp;</p>
    </div>
    <!--END FOOTER -->
     <!-- GLOBAL SCRIPTS -->
    <script src="assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->
</body>
<?php
}
?>
    <!-- END BODY-->
    
</html>
