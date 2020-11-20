<!DOCTYPE html>
<html>
	<head>
		<title>Тест по информатике</title>
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
			<tr align="left">
				<th>
					<div class = "img">
					<form method="post" action="indexITresult.php" style="font: 20px georgia;">
						
						<p>Вопрос 1: Сколько единиц в двоичной записи шестнадцатеричного числа 10FA16? </p>
						<input type="text" name="q1" pattern="^[ 0-9]+$" required="required">
						
						<p>Вопрос 2: Какой минимальный объём памяти (в Кбайт) нужно зарезервировать, чтобы можно было сохранить любое растровое изображение размером 512x512 пикселов при условии, что в изображении могут использоваться 256 различных цветов? В ответе запишите только целое число, единицу измерения писать не нужно.</p> 
						<input type="text" name="q2" pattern="^[ 0-9]+$" required="required"/>
						
						<p>Вопрос 3: Шифр кодового замка представляет собой последовательность из пяти символов, каждый из которых является цифрой от 1 до 4. Сколько различных вариантов шифра можно задать, если известно, что цифра 1 может встречаться ровно два раза, а каждая из других допустимых цифр может встречаться в шифре любое количество раз или не встречаться совсем?</p>
							<ol> 
							<li>269</li> 
							<li>234</li> 
							<li>256</li> 
							<li>270</li> 
							</ol>
						<input type="text" name="q3" pattern="[1-4]" required="required"> 
						
						<div class = "img">
						<p>Вопрос 4: На рисунке представлена схема дорог, связывающих города А, Б, В, Г, Д, Е, Ж, 3, И, К, Л, М. По каждой дороге можно двигаться только в одном направлении, указанном стрелкой. Сколько существует различных путей из города А в город М, проходящих через город Ж, но не проходящих через город К?</p> 
							
							<img src="ImageIT.png">
							
							<ol> 
								<li>8</li> 
								<li>10</li> 
								<li>16</li> 
								<li>Нет правильного ответа</li> 
							</ol> 
						<input type="text" name="q4" pattern="[1-4]" required="required"> 
						</div>
						
						<p>Вопрос 5: Значение арифметического выражения: 9<sup><small>2016</small></sup> + З<sup><small>2015</small></sup> — 9 — записали в системе счисления с основанием 3. Сколько цифр «2» содержится в этой записи?</p> 
							<ol> 
							<li>2011</li> 
							<li>2013</li> 
							<li>2019</li> 
							<li>3013</li> 
							</ol> 
						<input type="text" name="q5" pattern="[1-4]" required="required"> 
						
						<p>Вопрос 6: Для кодирования некоторой последовательности, состоящей из букв А, Б, В и Г, решили использовать неравномерный двоичный код, позволяющий однозначно декодировать двоичную последовательность, появляющуюся на приёмной стороне канала связи. Для букв А, Б, В используются такие кодовые слова: А — 010, Б — 1, В — 011. Укажите кратчайшее кодовое слово для буквы Г, при котором код будет допускать однозначное декодирование. Если таких кодов несколько, укажите код с наименьшим числовым значением.  </p> 
						<input type="text" name="q6" pattern="^[ 0-9]+$" required="required"> 
						
						<p>Вопрос 7: Каждое из логических выражений F и G содержит 7 переменных. В таблицах истинности выражений F и G есть ровно 7 одинаковых строк, причём ровно в 6 из них в столбце значений стоит 0. Сколько строк таблицы истинности для выражения F * G содержит 0 в столбце значений?</p> 
						<input type="text" name="q7" pattern="^[ 0-9]+$" required="required">
						
						<p>Вопрос 8: Обозначим через m&n поразрядную конъюнкцию неотрицательных целых чисел тип. Так, например, 12&6 = 1100<sub>2</sub>0110<sub>2</sub> = 0100<sub>2</sub> = 4. Для какого наибольшего неотрицательного целого числа А формула х&А != 0 > (х&З6 = 0 > х&6 != 0) тождественно истинна (т.е. принимает значение 1 при любом неотрицательном целом значении переменной x)? </p> 
						<ol> 
						<li>38</li> 
						<li>40</li> 
						<li>25</li> 
						<li>30</li> 
						</ol> 
						<input type="text" name="q8" pattern="[1-4]" required="required"> <br><br>
						<input type="submit" value="Показать результат" style="font: 20px georgia;"/>
					</form>
					</div>
				</th>
			</tr>
		</table>
	</body>
</html>	