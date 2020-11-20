<!DOCTYPE html>
<html>
	<head>
		<title>Тест по русскому языку</title>
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
					<form method="post" action="indexRresult.php" style="font: 20px georgia;">
						<p>Вопрос 1: В одном из приведённых ниже слов допущена ошибка в постановке ударения: НЕВЕРНО выделена буква, обозначающая ударный гласный звук. Выберите это слово</p>
							<ol>
								<li>сливОвый</li>
								<li>воссоздалА</li>
								<li>нефтепровОд</li>
								<li>Отрочество</li>
							</ol>
						<input type="text" name="q1" pattern="[1-4]" required="required">		
							
						<p>Вопрос 2: Выберите предложение, в котором НЕВЕРНО употреблено выделенное слово. Исправьте ошибку и запишите слово правильно</p>
							<ol> 
								<li>Чарский был один из КОРЕННЫХ жителей Петербурга.</li> 
								<li>Это была самая симпатичная сотрудница в отделе, тихая и БЕЗОТВЕТНАЯ.</li> 
								<li>Трагедия не вызывала в слушателях недоумения, она будила в их душах сочувственный ОКЛИК, созвучное настроение.</li> 
								<li>Наверное, никакой мудрец не разрешит этой ВЕЛИКОЙ тайны любви.</li> 
							</ol>
						<input type="text" name="q2" pattern="^[А-Яа-яЁё\s]+$" required="required"/>
							
						<p>Вопрос 3: В одном из выделенных ниже слов допущена ошибка в образовании формы слова. Исправьте ошибку и запишите слово правильно</p>
							<ol> 
								<li>заключить ДОГОВОРЫ</li> 
								<li>не более ПОЛУТОРА метров</li> 
								<li>МОЛОЖЕ сестры</li> 
								<li>совсем ОЗЯБНУЛ</li> 
							</ol>
						<input type="text" name="q3" pattern="^[А-Яа-яЁё\s]+$" required="required"> 
							
						<p>Вопрос 4: Определите предложение, в котором НЕ со словом пишется СЛИТНО </p> 
							<ol> 
								<li>Никита шёл по улицам всё прямо и ни о чём (НЕ)ДУМАЯ.</li> 
								<li>Большой двор, (НЕ)СМОТРЯ на сильный зной, был оживлён.</li> 
								<li>Из-за каменных зданий солнца (НЕ)ВИДНО.</li> 
								<li>Врагов (НЕ)БЫЛО только у беркута и коршуна.</li> 
							</ol> 
						<input type="text" name="q4" pattern="[1-4]" required="required"> 
							
						<p>Вопрос 5: В одном из приведённых ниже слов допущена ошибка в постановке ударения: НЕВЕРНО выделена буква, обозначающая ударный гласный звук. Выберите это слово</p> 
							<ol> 
								<li>крАлась</li> 
								<li>диспансЕр</li> 
								<li>красивЕе</li> 
								<li>исчЕрпать</li> 
							</ol> 
						<input type="text" name="q5" pattern="[1-4]" required="required"> 
						
						<p>Вопрос 6: В одном из приведённых ниже предложений НЕВЕРНО употреблено выделенное слово. Исправьте ошибку и запишите слово правильно </p> 
							<ol> 
								<li>Современный ЗВУКОВОЙ фильм не может заменить нам всего очарования старого немого кино.</li> 
								<li>Оформляясь на работу, внимательно ЗАПОЛНЯЙТЕ анкету.</li> 
								<li>ПРОИЗВОДСТВЕННЫЙ брак - это продукция, которая содержит дефекты.</li> 
								<li>Молния - ВЕКОВОЙ источник подзарядки электрического поля Земли.</li> 
							</ol> 
						<input type="text" name="q6" pattern="^[А-Яа-яЁё\s]+$" required="required"> 

						<p>Вопрос 7: В одном из выделенных ниже слов допущена ошибка в образовании формы слова. Исправьте ошибку и запишите слово правильно </p> 
							<ol> 
								<li>около трёх КИЛОГРАММОВ</li> 
								<li>ВОСЬМЬЮДЕСЯТЬЮ процентами</li> 
								<li>все ДИРЕКТОРА заводов</li> 
								<li>ПО ЗАВЕРШЕНИЮ спектакля</li> 
							</ol> 
						<input type="text" name="q7" pattern="^[А-Яа-яЁё\s]+$" required="required">
						
						<p>Вопрос 8: Определите предложение, в котором НЕ со словом пишется СЛИТНО </p> 
							<ol> 
								<li>(НЕ)РАСПРОДАННЫЕ в течение месяца игрушки уценили.</li> 
								<li>Этому талантливому артисту (НЕ)СРАЗУ удалось добиться признания публики.</li> 
								<li>Пока (НЕ)СКРЫТОЕ облаками солнце освещает город удивительно ярким светом.</li> 
								<li>(НЕ)СМОТРЯ на колоссальную загруженность, он всё-таки нашёл время встретиться с нами в кафе</li> 
							</ol> 
						<input type="text" name="q8" pattern="[1-4]" required="required"><br><br>
						<input type="submit" value="Показать результат" style="font: 20px georgia;"/>	
					</form>
				</th>
			</tr>
		</table>
	</body>
</html>	