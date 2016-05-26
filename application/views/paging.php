<html>


<head>

<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

</head>

<body>
 <div id="container">
  <h1>Registro de Afiliados (<?php echo $total_rows;?>)</h1>
  <div id="body">

	<table>
	<?php
		foreach($results as $row) {
			echo '<tr>'
				.'<th>'.$row->CitizenId.'</th>'
				.'<td>'.$row->LastName1.'</td>'
				.'<td>'.$row->LastName2.'</td>'
				.'<td>'.$row->FirstName.'</td>'
				.'</tr>';
	}?>
	</table>
   <p><?php echo $links; ?></p>
  </div>
  <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
 </div>
</body>


</html>

