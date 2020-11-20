<!DOCTYPE html>
<html>
	<head>
		<title>Психологический тест</title>
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
	
		<table style="font: 25px georgia;" border="0" width="100%" cellpadding="0" align="center">
			<tr>
				<th colspan="3"><p><h2>Вы зарегистрировались как студент <?php echo $line[0] . ' ' . $line[1] . ' ' . $line[2]; ?></h2></p></th>
			</tr>
			<tr align="center">	
				<th colspan="3"><p><h2>Вернуться на страницу <a href="/PracticeWork/index.php">регистрации</a></h2></p></th> 
			</tr>
			<tr align="left">
				<th>
					<form method="post" action="indexPresult.php" style="font: 20px georgia;">
						<p>Вопрос 1: Свойственно ли Вам первым вступать в контакт с незнакомым человеком?</p>
							<ol>
								<li>Да, такое происходит очень часто</li>
								<li>Да</li>
								<li>Нет</li>
								<li>Нет, никогда бы так не поступил(а)</li>
							</ol>
						<input type="text" name="q1" pattern="[1-4]" required="required">		
						
						<p>Вопрос 2: Замечаете ли Вы, что Вам часто бывает трудно сосредоточиться?</p> 
							<ol> 
								<li>Да, это действительно про меня</li> 
								<li>Да, иногда так происходит</li> 
								<li>Нет</li> 
								<li>Нет, никогда не замечал(а) такого</li> 
							</ol>
						<input type="text" name="q2" pattern="[1-4]" required="required"/>
							
						<p>Вопрос 3: Любите ли Вы предаваться мечтам?</p>
							<ol> 
								<li>Да, могу провести так несколько часов</li> 
								<li>Да</li> 
								<li>Нет</li> 
								<li>Нет, никогда такого не было</li> 
							</ol>
						<input type="text" name="q3" pattern="[1-4]" required="required"> 
						
						<p>Вопрос 4: Чувствуете ли Вы себя непринужденно и легко в веселой компании? </p> 
							<ol> 
								<li>Да, это действительно про меня</li> 
								<li>Да</li> 
								<li>Нет</li> 
								<li>Нет, к сожалению</li> 
							</ol> 
						<input type="text" name="q4" pattern="[1-4]" required="required"> 
							
						<p>Вопрос 5: Свойственно ли Вам брать на себя руководящую роль в совместных действиях?</p> 
							<ol> 
								<li>Да, такое происходит очень часто</li> 
								<li>Да</li> 
								<li>Нет</li> 
								<li>Нет, никогда бы так не поступил(а)</li> 
							</ol> 
						<input type="text" name="q5" pattern="[1-4]" required="required"> 

						<p>Вопрос 6: Часто ли у Вас бывают подъемы и смени настроения? </p> 
							<ol> 
								<li>Да, это действительно про меня</li> 
								<li>Да</li> 
								<li>Нет</li> 
								<li>Нет, я всегда себя полностью контролирую</li> 
							</ol> 
						<input type="text" name="q6" pattern="[1-4]" required="required"> 

						<p>Вопрос 7: Часто ли Вы бываете «не в духе»? </p> 
							<ol> 
								<li>Да, это происходит часто</li> 
								<li>Да</li> 
								<li>Нет</li> 
								<li>Нет, никогда так не было</li> 
							</ol> 
						<input type="text" name="q7" pattern="[1-4]" required="required">

						<p>Вопрос 8: Свойственно ли Вам в обществе говорить меньше, чем другие? </p> 
							<ol> 
								<li>Да, это действительно про меня</li> 
								<li>Да</li> 
								<li>Нет</li> 
								<li>Нет, обычно я - "душа компании"</li> 
							</ol> 
						<input type="text" name="q8" pattern="[1-4]" required="required"> <br><br>
						<input type="submit" value="Показать результат" style="font: 20px georgia;"/>
					</form>
				</th>
			</tr>
		</table>
	</body>
</html>	