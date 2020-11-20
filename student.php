<!DOCTYPE html>
<html>
	<head>
		<title>Выберите тест</title>
		<meta charset="UTF-8">
		<link href="studentstyle.css" rel="stylesheet">
	</head>
	<body link="wlink" vlink="#cecece" alink="grey">
		<?php
			function parse_excel_file( $filename ){
				require_once dirname(__FILE__) . '/PHPExcel.php';
				$result = array();
				$file_type = PHPExcel_IOFactory::identify( $filename );

				$objReader = PHPExcel_IOFactory::createReader( $file_type );
				$objPHPExcel = $objReader->load( $filename );
				$result = $objPHPExcel->getActiveSheet()->toArray(); 
				$arrayline = $result[1];
				
				return $arrayline;
			}
			
			$filename = 'Results.xlsx';
			$line = parse_excel_file( $filename );
		?>
		<table style="font: 20px georgia;" border="0" width="100%" cellpadding="0" align="center">
			<tr>
				<th colspan="3"><p><h2>Вы зарегистрировались как студент <?php echo $line[0] . ' ' . $line[1] . ' ' . $line[2]; ?></h2></p></th>
			</tr>
			<tr align="center">	
				<th colspan="3"><p><h2>Вернуться на страницу <a href="/PracticeWork/index.php">регистрации</a></h2></p></th> 
			</tr>
			<tr>
				<td align="center">
					<br><br><br><br><br><br>
					<form method="post" action="indexP.php">
						<input type="submit" value="  Философия  " style="font: 25px georgia;"/>
					</form>
				</td>
				<td align="center">
					<br><br><br><br><br><br>
					<form method="post" action="indexR.php">
						<input type="submit" value="Русский язык" style="font: 25px georgia;"/>
					</form>
				</td>
				<td align="center">
					<br><br><br><br><br><br>
					<form method="post" action="indexIT.php">
						<input type="submit" value="Информатика" style="font: 25px georgia;"/>
					</form>
				</td>
			</tr>
		</table>
	</body>
</html>	