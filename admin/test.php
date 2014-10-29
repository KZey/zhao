<html>
<body>

<form action="test.php" method="post" enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="modelCard" id="modelCard" /> 
<br />
<input type="submit" name="submit" value="Submit" />
</form>

</body>
</html>


<?php
if ($_FILES["modelCard"]["error"] > 0)
  {
  echo "Error: " . $_FILES["file"]["error"] . "<br />";
  }
else
  {
  echo "Upload: " . $_FILES["modelCard"]["name"] . "<br />";
  echo "Type: " . $_FILES["modelCard"]["type"] . "<br />";
  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
  echo "Stored in: " . $_FILES["file"]["tmp_name"];


 move_uploaded_file($_FILES["file"]["tmp_name"], "./upload/i23423423.jpg");

  }
?>
