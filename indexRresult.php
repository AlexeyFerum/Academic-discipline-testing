<?php
	$q1 = $_POST['q1'];
	$q2 = $_POST['q2'];
	$q3 = $_POST['q3'];
	$q4 = $_POST['q4'];
	$q5 = $_POST['q5'];
	$q6 = $_POST['q6'];
	$q7 = $_POST['q7'];
	$q8 = $_POST['q8'];
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Тестирование по русскому языку</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="studentstyle.css">
	</head>
	<body link="wlink" vlink="#cecece" alink="grey">
		<?php
			function parse_excel_file1( $filename ){
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
			$line = parse_excel_file1( $filename );
		?>
	
		<table style="font: 20px georgia;" border="0" width="100%" cellpadding="0" align="center">
			<tr>
				<th colspan="3"><p><h2>Вы зарегистрировались как студент <?php echo $line[0] . ' ' . $line[1] . ' ' . $line[2]; ?></h2></p></th>
			</tr>
			<tr align="center">	
				<th colspan="3"><p><h2>Вернуться на страницу <a href="/PracticeWork/index.php">регистрации</a></h2></p></th> 
			</tr>
			<tr>
				<th>
					<br><br><br><br><br>
					<center><h2 style="font: 30px georgia;">Тестирование по русскому языку</h2></center>
					
					<?php
						$result = 0;
						
						if ($q1 == "1") {
							$result += 1;}
							
						if ($q2 == "отклик" || $q2 == "Отклик") {
							$result += 1;}

						if ($q3 == "озяб" || $q3 == "Озяб") {
							$result += 1;}

						if ($q4 == "2") {
							$result += 1;}

						if ($q5 == "3") {
							$result += 1;}

						if ($q6 == "вечный" || $q6 == "Вечный") {
							$result += 1;}
							
						if ($q7 == "по завершении" || $q7 == "По завершении") {
							$result += 1;}
							
						if ($q8 == "4") {
							$result += 1;}
							
							
						if($result == 8){
							echo "<center>
							Результат: <b>Отлично!<br> 8/8</b> <br>";
						}
						elseif($result == 7){
								echo "<center>
								Результат: <b>Хорошо! <br> 7/8</b> <br>";
							}
							elseif($result == 6){
									echo "<center>
									Результат: <b>Удовлетворительно! <br> 6/8</b> <br>";
								}
								else{
									echo "<center>
									Результат: <b>Тест не пройден!</b> <br>";
								}
								
						
						function parse_excel_file( $filename ){
							require_once dirname(__FILE__) . '/PHPExcel.php';
							$result = array();
							$file_type = PHPExcel_IOFactory::identify( $filename );
							
							$objReader = PHPExcel_IOFactory::createReader( $file_type );
							$objPHPExcel = $objReader->load( $filename ); 
							$result = $objPHPExcel->getActiveSheet()->toArray();

							return $result;
						}
						
						function update_excel_file($filename, $arr){
							require_once dirname(__FILE__) . '/PHPExcel.php';
							$i = 1;	
							$l = 97;
							$phpexcel = new PHPExcel();
							$page = $phpexcel->setActiveSheetIndex(0);
							
							foreach($arr as $outer_key => $resul){
								foreach($resul as $outer_key => $value){
									$letter = chr($l);
									$page->setCellValue("$letter$i", "$value");
									$l = $l + 1;
								}
								$i = $i + 1;
								$l = 97;
							}
							
							$page->setTitle("Test");
							$objWriter = PHPExcel_IOFactory::createWriter($phpexcel, 'Excel2007');
							$objWriter->save($filename);
						}
						
						$filename = 'Results.xlsx';
						$resu = parse_excel_file( $filename );
						
						foreach($resu as $outer_key => $resul)
						{
							$key1 = array_search('Русский язык', $resul);
							$key2 = array_search($line[0], $resul);
							$resu[$key2 + 1][$key1] = $result;
							break;
						}
						
						update_excel_file($filename, $resu);
					?>
				</th>
			</tr>
			<tr>
				<th>
					<br><br><br><br><br><br><br><br><br>
					<form method="post" action="/PracticeWork/student.php">
						<input type="submit" value="Вернуться на страницу выбора теста" style="font: 15px georgia;"/>
					</form>
				</th>
			</tr>
		</table>
	</body>
</html>	