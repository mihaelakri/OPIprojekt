<?php session_start();
if(empty($_SESSION['id'])):
header('Location: ../CMS.php');
endif;
?>
<!DOCTYPE html>
<html>
<body>
<div style="width:150px;margin:auto;height:500px;margin-top:300px">
<?php
	include('condatabase.php');
	session_destroy();
	
 echo '<meta http-equiv="refresh" content="2;url=../CMS.php">';
 echo'<div class="spinner-wrapper">
 		<div class="spinner">
	 		<div class="bounce1"></div>
	 		<div class="bounce2"></div>
			 <div class="bounce3"></div>
 		</div>
	</div>';
?>
</div>
</body>
</html>
