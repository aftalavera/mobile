<!DOCTYPE html> 

<html> 

<head> 
	<title><?php echo $title;?></title> 
	<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
</head> 

<style>
	table { width:100%; }
	table td,th { text-align:right; padding:1px;} 
</style>
	
<body> 	
	
	<div data-role="page">
	
		<div data-role="header" data-theme="b">
			<h1>Detalle unidad</h1>
		</div><!-- /header -->

		<div data-role="content">	
			
			<ul data-role="listview" data-filter="true">
			<?php foreach ($summary as $row):?>
				<li><a><?php if ($row->precinto == 000) {echo 'Total:';} else {echo 'Precinto :'.$row->precinto.'-'.$row->unidad;}?><span class="ui-li-count"><?php echo $row->total;?></span></a></li>
			<?php endforeach;?>	
			</div>
			
		</div><!-- /content -->
		
		<div data-role="footer" >
			<h1></h1>
		</div><!-- /footer -->
		
	</div>
</body>

</html>