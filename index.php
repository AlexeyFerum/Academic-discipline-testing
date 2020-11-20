<!DOCTYPE html>
<html>
	<head>
		<title>Регистрация</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link href="indexstyle.css" rel="stylesheet">
		<link href="lecturerstyle.css" rel="stylesheet">
	</head>
	<body link="wlink" vlink="#cecece" alink="grey">
		<?php if (isset($_POST['form_submitted']) && $_POST['lecturer'] == 'Yes'): ?>
		<table style="font: 20px georgia;" border="0" width="100%" cellpadding="0" align="center">
			<tr>
				<th><p><h2>Вы зарегистрировались как преподаватель <?php echo $_POST['lastname'] . ' ' . $_POST['firstname'] . ' ' . $_POST['patronymic']; ?></h2></p></th>
			</tr>
			<tr>	
				<th><p><h2>Вернуться на страницу <a href="/PracticeWork/index.php">регистрации</a></h2></p></th>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<br>
					<form method="post" action="lecturer.php">
						<input type="submit" align="center" value="Показать сводную таблицу сдававших" class="showtable"/>
					</form>
				</td>
			</tr>
		</table>

			<?php elseif (isset($_POST['form_submitted']) && $_POST['lecturer'] != 'Yes'): ?>
			
			<table style="font: 20px georgia;" border="0" width="100%" cellpadding="0" align="center">
				<tr>
					<th><p><h2>Вы зарегистрировались как студент <?php echo $_POST['lastname'] . ' ' . $_POST['firstname'] . ' ' . $_POST['patronymic']; ?></h2></p></th>
				</tr>
				<tr>
			
				<?php						
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
					$mas = parse_excel_file( $filename );
							
					function array_row_remove($array, $row_index)
					{
						if (is_array($array) && array_key_exists($row_index, $array))
						{
							unset($array[$row_index]);
							$array = array_values($array);
						}
					
						return $array;
					}
							
					$mass = array_row_remove($mas, 0);
							
					$y = -1;
					$i = 0;
					foreach($mass as $outer_key => $rows){
						foreach($rows as $inner_key => $val){
							if($val == $_POST['lastname']){
								$y = $i;
							}
						}
						$i++;
					}
							
					if($y!=-1){
						$array = $mass[$y];
						$mass = array_row_remove($mass, $y);
						$fiophyrlinf = array("Фамилия", "Имя", "Отчество", "Философия", "Русский язык", "Информатика");
						array_unshift($mass, $fiophyrlinf, $array);
					}
					else{
						$array = array($_POST['lastname'], $_POST['firstname'], $_POST['patronymic'], "", "", "");
						$fiophyrlinf = array("Фамилия", "Имя", "Отчество", "Философия", "Русский язык", "Информатика");
						array_unshift($mass, $fiophyrlinf, $array);
					}
							
					update_excel_file($filename, $mass);	
				?>
				
					<th><p><h2>Вернуться на страницу <a href="/PracticeWork/index.php">регистрации</a></h2></p></th>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<br>
						<form method="post" action="student.php">
							<input type="submit" value="Пройти тест" align="center" class="showtable"/>
						</form>
					</td>
				</tr>
			</table>
				
				<?php else: ?>

					<table align="center" border="0" width="100%" cellpadding="5">
						<tr>
							<th><h1>Регистрация</h1></th>
						</tr>
						<tr>
							<th> 
								<form action="index.php" method="POST">

								<h2>Фамилия:</h2>
								<input type="text" name="lastname" pattern="^[А-Яа-яЁё\s]+$" required="required">
								<br> <h2>Имя:</h2>
								<input type="text" name="firstname" pattern="^[А-Яа-яЁё\s]+$" required="required">	
								<br> <h2>Отчество:</h2>
								<input type="text" name="patronymic" pattern="^[А-Яа-яЁё\s]+$" required="required">
								<h2> <p><input type="checkbox" name="lecturer" value="Yes"> Преподаватель</h2> </p>
								
								<br>
								<input type="hidden" name="form_submitted" value="1" />
								<input type="submit" value="Зарегистрироваться" class="register">

								</form>
							</th>
						</tr>
					</table>
					
				<?php endif; ?> 
	</body> 
</html>