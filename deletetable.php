<!DOCTYPE html>
<html>
	<head>
		<title>Удалить таблицу</title>
		<meta charset="UTF-8">
		<link href="lecturerstyle.css" rel="stylesheet">
	</head>
	<body>
		<?php
			if (isset($_POST['form_submitted'])):
			{
				require_once dirname(__FILE__) . '/PHPExcel.php';
				$arr = array();
				$i = 1;	
				$l = 97;
				$phpexcel = new PHPExcel();
				$page = $phpexcel->setActiveSheetIndex(0);
				
				foreach($arr as $outer_key => $data){
					foreach($data as $inner_key => $value){
						$letter = chr($l);
						$page->setCellValue("$letter$i", "$value");
						$l = $l + 1;
					}
					$i = $i + 1;
					$l = 97;
				}
				
				$page->setCellValue("A1", "Фамилия");
				$page->setCellValue("B1", "Имя");
				$page->setCellValue("C1", "Отчество");
				$page->setCellValue("D1", "Философия");
				$page->setCellValue("E1", "Русский язык");
				$page->setCellValue("F1", "Информатика");
			
				$page->setTitle("Test");
				$objWriter = PHPExcel_IOFactory::createWriter($phpexcel, 'Excel2007');
				$objWriter->save("Results.xlsx");
			}
			endif;
		?>
		
		<form method="post" action="lecturer.php">
			<input type="submit" align="center" value="Показать сводную таблицу сдававших" class="showtable"/>
		</form>
		
	</body>
</html>	