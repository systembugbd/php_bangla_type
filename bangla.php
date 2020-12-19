<?php 
require_once('bangla.class.php');
/*
Plugin Name: Bangla Phonetic Plugins
Plugin URI: http://www.athena.com.bd
Description: This plugins for Type bangla with varity of Phonetic
Author: Md. Shaheb Ali
Author URI: http://www.w3tasks.zzl.org
Version: 1.1
*/
?>


<!DOCTYPE html>
<html>
<head>
	<title>Your Online Bangla Typing Solution</title>
 	<?php echo $bangla->addJs();?>

 	<?php echo $bangla->addCss();?>

 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid	">

<div class="panel panel-primary">
  <div class="panel-heading"><div class="">Bangla Type</div><div class="float-right" id="keyBoardMsg" style="color:#0f0; float: right; margin-top: -22px;"></div></div>
  <div class="panel-body">
  	<div class="col-sm-6">
  		<?php //echo $bangla->init();?>
 		<?php echo $bangla->addForm();?>
	 </div>
	 <div class="col-sm-6" id="showKeyboardLayout">

	 </div>

  </div>
</div>
</div>


</body>
</html>
