<html> 

<head> 
	<title>Listing</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
</head> 

<body> 	
	
	<div data-role="page">
	
		<div data-role="header" data-theme="b">
			<h1>Progreso</h1>
		</div><!-- /header -->

		<div data-role="content">		
		
			<?php echo validation_errors(); ?>
			
			<?php echo form_open($uri_string,array('data-ajax'=>'false')); ?>	
				<label for="email">Email:</label>
				<input type="email" name="email" value="user@test.com"  />
				<label for="password">Password:</label>
				<input type="password" name="password" value="password" />
				<input type="submit" value="Login" data-role="button" data-inline="true" data-theme="b" />
			<?php echo form_close(); ?>
			
		</div><!-- /content -->
		
		<div data-role="footer" >
			<h1></h1>
		</div><!-- /footer -->
		
	</div>
</body>

</html>
