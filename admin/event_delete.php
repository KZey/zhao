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

<!-- BEGIN HEAD -->
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
     <!-- PAGE LEVEL STYLES -->
     <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/login.css" />
    <link rel="stylesheet" href="assets/plugins/magic/magic.css" />

<?php
if(isset($_GET['id'])){
$id = $_GET['id'];

$sql = "select thumbNail from event where id = ".$id;
$dataset=mysql_query($sql);
while ($result = mysql_fetch_array($dataset))
{
    $thumbNail = $result['thumbNail'];
}


$sql = "delete from event where id = ".$id;
//echo $sql."<br/>";
$result = mysql_query($sql); 
    if ( $result ) { 
           unlink($thumbNail);
           header("Location: event.php");
	} else {
        echo  $err[] = "Operation failed, please check what you input or contact system admini. <a href='event.php'>Go back</a>";
	}

} else {
  echo  $err[] = "Wrong parameter, <a href='event.php'>Go back</a>";
}
