<!DOCTYPE html> 

<html> 

<head> 
	<title><?php echo $title;?></title> 
	<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
</head> <style>	table { width:100%; }
	table td,th { text-align:right; padding:1px;} 
</style>	<body> 	
	
	<div data-role="page" >			<div data-role="header" data-theme="b">
			<a href="<?php echo site_url('/');?>" data-ajax="false" data-theme="b" >Home</a>			<h1>Progreso</h1>			<a href="<?php echo site_url($link);?>" data-role="button" class="ui-btn-right"><?php echo $report;?></a>		</div><!-- /header -->		<div data-role="content">				<table summary="Progreso reclutamiento funcionarios">			  <caption><?php echo $title;?></caption>			  <thead>				<tr>				  <th scope="col">Precinto</th>  				  <th scope="col">Meta</th>  				  <th scope="col">Total</th>  				  <th scope="col">Faltan</th>  				  <th scope="col">Neto</th>  				  <th scope="col">%&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>  				</tr>			  </thead>			  			  <tbody>			  <?php foreach ($summary as $row):?>			  <tr>				<th scope="row"><?php if ($row->precinto == null) {echo 'Total:';} else {echo $row->precinto;}?></th>				<td><?php echo $row->meta;?></td>				<td><?php echo $row->total;?></td>				<td><?php echo $row->faltan;?></td>				<td><?php echo $row->neto;?></td>				<td><?php echo $row->porciento.'%';?></td>			  </tr>			  <?php endforeach;?>			  			  </tbody>			</table>		</div><!-- /content -->				<div data-role="footer" >			<h1></h1>		</div><!-- /footer -->			</div>
</body>

</html>