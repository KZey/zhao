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

    <link rel="stylesheet" href="assets/css/bootstrap-fileupload.min.css" />

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
$gender = $_POST['gender']; 
$name = trim($_POST['name']);
$name_cn = trim($_POST['name_cn']);
$height = $_POST['height'];
$height = $_POST['height'];
$shoes = $_POST['shoes'];
$bust = $_POST['bust'];
$hair = $_POST['hair'];
$waist = $_POST['waist'];
$eyes = $_POST['eyes'];
$hips = $_POST['hips'];
$status = $_POST['status'];

$filepath = $_FILES["modelCard"]["tmp_name"];
$filepath1 = $_FILES["thumbNail"]["tmp_name"];



  if (empty($filepath1))
    {
      $thumbNail = '';
    }
  else
  {
      $newfile = "./upload/model-tn-".date('ymdhis').".png";
      move_uploaded_file($filepath,$newfile);
      $thumbNail = $newfile;
  }

  if (empty($filepath))
    {
      $modelCard = '';
    }
  else
  {
      $newfile = "./upload/model-mc-".date('ymdhis').".png";
      move_uploaded_file($filepath,$newfile);
      $modelCard = $newfile;
  }


 
      $sql = "insert into model values('', '".$gender."', '".$name."', '".$name_cn."', '".$thumbNail."','".$height."','".$shoes."','".$bust."','".$hair."','".$waist."','".$eyes."','".$hips."','".$modelCard."', ".$status.") "; 
      //echo $sql."<br/>"; 
      $result = mysql_query($sql);  
      if ( $result ) {  
           session_start(); 
           session_regenerate_id (true);  
           $_SESSION['iflogin']= 1;   
           header("Location: model.php"); 
      } else { 
         echo  $err[] = "Operation failed, please check what you input or contact system admin, <a href='model.php'>Go back</a> "; 
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


                        <h2>Model Management</h2>



                    </div>
                </div>

                <hr />


<div class="row">
<div class="col-lg-12">
    <div class="box dark">

        <header>

            <div class="icons"><i class="icon-edit"></i></div>

            <h5>Create Model entry</h5>

        </header>

        <div id="div-1" class="accordion-body collapse in body">

            <form class="form-horizontal" action='model_add.php' method='post'  enctype="multipart/form-data">

                <div class="form-group">

                    <label for="text1" class="control-label col-lg-4">Gender</label>



                    <div class="col-lg-8">


                      <select name="gender" class="validate[required] form-control">

                           <option value="1" >Woman</option>

                           <option value="0" >Man</option>

                      </select>


                    </div>

                </div>


                <div class="form-group">

                    <label for="text4" class="control-label col-lg-4">Name</label>



                    <div class="col-lg-8">

                    <input type="text" id="name" name='name' placeholder="Name" class="form-control" maxlength='50' />

                    </div>

                </div>

                <div class="form-group">

                    <label for="text4" class="control-label col-lg-4">Chinese Name</label>



                    <div class="col-lg-8">

                    <input type="text" id="name_cn" name='Chinese Name' placeholder="Chinese Name" class="form-control" maxlength='50' />

                    </div>

                </div>


                 <div class="form-group">
                        <label for="text4" class="control-label col-lg-4">Thumbnail</label>

                        <div class="col-lg-8">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="assets/img/demoUpload.jpg" alt="" /></div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                    <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file"  name = 'thumbNail' /></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                        </div>

                 </div>


                <div class="form-group">

                    <label for="text1" class="control-label col-lg-4">Height</label>

                    <div class="col-lg-8">

                        <input type="text" id="height" name='height' placeholder="Height" class="form-control" maxlength='20' />

                    </div>

                </div>


                <div class="form-group">

                    <label for="text1" class="control-label col-lg-4">Shoes</label>

                    <div class="col-lg-8">

                        <input type="text" id="shoes" name='shoes' placeholder="Shoes" class="form-control" maxlength='20' />

                    </div>

                </div>

                <div class="form-group">

                    <label for="text1" class="control-label col-lg-4">Bust</label>

                    <div class="col-lg-8">

                        <input type="text" id="bust" name='bust' placeholder="Bust" class="form-control" maxlength='20' />

                    </div>

                </div>



                <div class="form-group">

                    <label for="text1" class="control-label col-lg-4">Hair</label>



                    <div class="col-lg-8">

                        <input type="text" id="hair" name='hair' placeholder="Hair" class="form-control" maxlength='20' />

                    </div>

                </div>


                <div class="form-group">

                    <label for="text1" class="control-label col-lg-4">Waist</label>

                

                    <div class="col-lg-8">

                        <input type="text" id="waist" name='waist' placeholder="Waist" class="form-control" maxlength='20' />

                    </div>

                </div>



                <div class="form-group">

                    <label for="text1" class="control-label col-lg-4">Eyes</label>



                    <div class="col-lg-8">

                        <input type="text" id="eyes" name='eyes' placeholder="Eyes" class="form-control" maxlength='20' />

                    </div>

                </div>





                <div class="form-group">

                    <label for="text1" class="control-label col-lg-4">Hips</label>



                    <div class="col-lg-8">

                        <input type="text" id="hips" name='hips' placeholder="Hips" class="form-control" maxlength='20' />

                    </div>

                </div>




                 <div class="form-group">
                        <label for="text4" class="control-label col-lg-4">Model Card</label>

                        <div class="col-lg-8">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="assets/img/demoUpload.jpg" alt="" /></div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                    <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file"  name = 'modelCard' /></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
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
    <script src="assets/plugins/jasny/js/bootstrap-fileupload.js"></script>

</body>
<?php
}
?>
    <!-- END BODY-->
    
</html>
