<!DOCTYPE html> 

<html> 

<head> 
	<title>Listing</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
</head> 

<body> 	
	
	<div data-role="page" data-add-back-btn="true">
	
		<div data-role="header" data-theme="b">
			<h1><?php echo $name. ' ('.$precinto.'-'.$unidad.')';?></h1>
		</div><!-- /header -->

		<div data-role="content">	
			<ul data-role="listview" data-filter="true">
			
			<?php foreach ($detail as $row):?>
				<li>
					<h3><?php echo $row->nombre,$row->paterno,$row->materno;?></h3>
					<ul data-role="listview">
							<li>
								<a href="tel:<?php echo $row->celular;?>">
									<?php if (strlen($row->celular) > 0) 
											$row->celular =  str_repeat("X", (strlen($row->celular) - 4)).substr($row->celular,-4,4);
										  echo 'Celular : '.$row->celular;?>
								</a>
							</li>	
							<li>
								<a href="tel:<?php echo $row->trabajo;?>">
									<?php 	if (strlen($row->trabajo) > 0)
												$row->trabajo =  str_repeat("X", (strlen($row->trabajo) - 4)).substr($row->trabajo,-4,4);
											echo 'Trabajo : '.$row->trabajo;?>
								</a>
							</li>	
					</ul>
				</li>
			<?php endforeach;?>
			
			</ul>
		</div><!-- /content -->
		
		<div data-role="footer" >
			<h1><?php echo $name. ' ('.$precinto.'-'.$unidad.')';?></h1>
		</div><!-- /footer -->

	</div>	
</body>

</html>
