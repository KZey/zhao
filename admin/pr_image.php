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



    <!-- PAGE LEVEL STYLES-->
    <link href="assets/plugins/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.css" rel="stylesheet" />
      <style>
        .panel-body a img {
            margin-bottom:5px !important;
        }
          .panel-body a{
              <!--color:transparent!important; -->
          }
    </style>
    <!-- END PAGE LEVEL STYLES-->




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


$createDate = date('Y-m-d');
$publicRelationId = $_POST['publicRelationId'];
$status = 1;

  $filename = $_FILES["file"]["name"];
  $filetype = $_FILES["file"]["type"];
  $filesize = $_FILES["file"]["size"]/1024;
  $filepath = $_FILES["file"]["tmp_name"];




if ((($filetype == "image/gif") || ($filetype == "image/jpeg") || ($filetype == "image/png")) && ($filesize < 20000))
{
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Error: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {

      $newfile = "./upload/".$publicRelationId.date('ymdhis').".png";
      move_uploaded_file($filepath,$newfile);
      $picture = $newfile;
      //$picture =  "./upload/".$publicRelationId.date('ymdhis').".png";


    $sql = "insert into public_relation_image values('', ".$publicRelationId.", '".$picture."', ".$status.") ";
    echo $sql."<br/>";
    $result = mysql_query($sql);
    if ( $result ) {
           session_start();
           session_regenerate_id (true);
           $_SESSION['iflogin']= 1;
           header("Location: pr_image.php?id=".$publicRelationId);
        } else {
          echo  $err[] = "Operation failed, please check what you input or contact system admin, <a href='pr_image.php?id=".$publicRelationId.">Go back</a> ";
        }


     }// end of upload file eror
}
else
{
   echo "The file size or format is invalid";
}



} 


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


                        <h2>PR Management :: Image</h2>



                    </div>
                </div>

                <hr />







                <div class="row">

                <div class="col-lg-12">

                    <div class="panel panel-default">



<!--BEGIN Image UPLOADER-->
<div style='margin:5px;'>
<a href='pr_edit.php?id=<?php echo $_GET['id']; ?>'>Back</a>
                <form class="form-horizontal" action='pr_image.php' method='post' enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="col-lg-8">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="assets/img/demoUpload.jpg" alt="" /></div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                    <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" name = 'file' id = 'file' /></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a> 

<input name="publicRelationId" type="hidden" value='<?php echo $_GET['id'];?>' />
<input name="action" type="hidden" value='create' />
<input class="btn btn-primary" type="submit" value='upload' />
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
</div>
<!--END IMAGE UPLOADER-->


                        <div class="panel-body">

                            <div class="table-responsive">




                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">

                                    <thead>

                                        <tr>

                                            <th>#</th>

                                            <th>Image</th>

                                            <th>PR ID</th>

                                            <th>Status</th>

                                            <th>Operation</th>
                                        </tr>

                                    </thead>

                                    <tbody>

<?php 
    $id = $_GET['id'];
    $dataset=mysql_query("select * from public_relation_image where publicRelationId = ".$id." order by id desc");
    while ($result = mysql_fetch_array($dataset)) 
{
?>
                                        <tr class="odd gradeX">

                                            <td><?php echo $result['id']; ?></td>

                                            <td><a  id="example1" href="<?php echo $result['picture']; ?>"  title=""><img src = '<?php echo $result['picture']; ?>' height = '30' width = '60' /></a></td>

                                            <td>
                                                <?php echo $result['publicRelationId']; ?>
					    </td>


                                            <td>

<?php
if($result['status']==1) {
   echo 'Enabled';
} else if($result['status']==0) {
   echo 'Disabled';
}
?>

					    </td>

                                            <td class="center"><a href='pr_image_delete.php?id=<?php echo $result['id'];?>&pr_id=<?php echo $id;?>'>Delete</a></td>

                                        </tr>
<?php
}
?>

                                    </tbody>

                                </table>

                            </div>

                           

                        </div>

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

         <!-- PAGE LEVEL SCRIPTS -->

    <script src="assets/plugins/jasny/js/bootstrap-fileupload.js"></script>

         <!-- END PAGE LEVEL SCRIPTS -->


    <!-- PAGE LEVEL SCRIPTS -->

    <script src="assets/plugins/jquery.fancybox-1.3.4/jquery-1.4.3.min.js"></script> <!--important for gallery-->

     <script src="assets/plugins/jquery.fancybox-1.3.4/fancybox/jquery.mousewheel-3.0.4.pack.js"></script> 

    <script src="assets/plugins/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.js"></script>

     <script src="assets/js/image_gallery.js"></script>
 
     <!--END PAGE LEVEL SCRIPTS -->


</body>
    <!-- END BODY-->
    
</html>
