<!DOCTYPE html>
<html>
	<head>
		<title>Посмотреть таблицу</title>
		<meta charset="UTF-8">
		<link href="indexstyle.css" rel="stylesheet">
	</head>
	<body link="wlink" vlink="#cecece" alink="grey">
        <table style="font: 20px georgia;" border="0" width="100%" cellpadding="0" align="center">
			<tr align="center">	
				<th colspan="2"><p><h2>Вернуться на страницу <a href="/PracticeWork/index.php">регистрации</a></h2></p></th> 
			</tr>
			<tr>
				<td colspan="2" align="center">
					<br><br><br><br><br><br><br><br>
					<?php
						require_once 'PHPExcel/IOFactory.php';
						$objPHPExcel = PHPExcel_IOFactory::load("Results.xlsx");
						foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
							$worksheetTitle     = $worksheet->getTitle();
							$highestRow         = $worksheet->getHighestRow(); // e.g. 10
							$highestColumn      = $worksheet->getHighestColumn(); // e.g 'F'
							$highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);
							$nrColumns = ord($highestColumn) - 64;
							echo "Общее количество студентов, сдававших тесты: ";
							echo ' ' . $highestRow - 1 . ' ';
							echo '<table border="1"><tr>';
							for ($row = 1; $row <= $highestRow; ++ $row) {
								echo '<tr>';
								for ($col = 0; $col < $highestColumnIndex; ++ $col) {
									$cell = $worksheet->getCellByColumnAndRow($col, $row);
									$val = $cell->getValue();
									echo '<td>' . $val . '<br></td>';
								}
								echo '</tr>';
							}
							echo '</table>';
						}
					?>
				</td>
			</tr>
			<tr>
				<th>
					<br><br><br><br><br><br>
					<a href="Results.xlsx"><button style="font: 15px georgia;">Скачать Excel файл</button></a>
				</th>
				<th>
					<br><br><br><br><br><br>
					<form action="deletetable.php" method="POST">
						<input type="hidden" name="form_submitted" value="1"/>
						<input type="submit" value="Очистить таблицу" style="font: 15px georgia;">
					</form>
				</th>
			</tr>
		</table>
	</body>
</html>	