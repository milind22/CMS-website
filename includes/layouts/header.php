<?php 
	if (!isset($layout_context)) {
		$layout_context = "public";
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Widget Corp <?php if ($layout_context == "admin") { echo "Admin"; } ?></title>
		<link href="stylesheets/public.css" media="all" rel="stylesheet" type="text/css" />
	</head>
	<body>
    <div id="header">
    	<?php if ($layout_context == "admin"){?>
    		<h1><a href="admin.php"style="text-decoration: none">WIDGET CORP ADMIN</a></h1>
    	<?php } else { ?>
    		<h1><a href="index.php"style="text-decoration: none">WIDGET CORP</a></h1>
    	<?php } ?>
      
    </div>
