﻿<?php
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
		<title>Психологический тест</title>
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
				$objPHPExcel = $objReader->load( $filename ); // загружаем данные файла в объект
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
					<br><br><br>
					<center><h2 style="font: 30px georgia;">Психологический тест</h2></center>		 
					<?php
						$result_1 = 0;
						$result_2 = 0;
						$result_3 = 0;
						$result_4 = 0;
						
						if ($q1 == "1")
						{
							$result_1 += 1;
						}
						elseif ($q1 == "2") 
							{
								$result_2 += 1;
							}
							elseif ($q1 == "3") 
								{
									$result_3 += 1;
								}
								elseif ($q1 == "4") 
									{
										$result_4 += 1;
									}
						
						if ($q2 == "1")
						{
							$result_1 += 1;
						}
						elseif ($q2 == "2") 
							{
								$result_2 += 1;
							}
							elseif ($q2 == "3") 
								{
									$result_3 += 1;
								}
								elseif ($q2 == "4") 
									{
										$result_4 += 1;
									}
									
						if ($q3 == "1")
						{
							$result_1 += 1;
						}
						elseif ($q3 == "2") 
							{
								$result_2 += 1;
							}
							elseif ($q3 == "3") 
								{
									$result_3 += 1;
								}
								elseif ($q3 == "4") 
									{
										$result_4 += 1;
									}
						
						if ($q4 == "1")
						{
							$result_1 += 1;
						}
						elseif ($q4 == "2") 
							{
								$result_2 += 1;
							}
							elseif ($q4 == "3") 
								{
									$result_3 += 1;
								}
								elseif ($q4 == "4") 
									{
										$result_4 += 1;
									}

						if ($q5 == "1")
						{
							$result_1 += 1;
						}
						elseif ($q5 == "2") 
							{
								$result_2 += 1;
							}
							elseif ($q5 == "3") 
								{
									$result_3 += 1;
								}
								elseif ($q5 == "4") 
									{
										$result_4 += 1;
									}
						
						if ($q6 == "1")
						{
							$result_1 += 1;
						}
						elseif ($q6 == "2") 
							{
								$result_2 += 1;
							}
							elseif ($q6 == "3") 
								{
									$result_3 += 1;
								}
								elseif ($q6 == "4") 
									{
										$result_4 += 1;
									}
									
						if ($q7 == "1")
						{
							$result_1 += 1;
						}
						elseif ($q7 == "2") 
							{
								$result_2 += 1;
							}
							elseif ($q7 == "3") 
								{
									$result_3 += 1;
								}
								elseif ($q7 == "4") 
									{
										$result_4 += 1;
									}
						
						if ($q8 == "1")
						{
							$result_1 += 1;
						}
						elseif ($q8 == "2") 
							{
								$result_2 += 1;
							}
							elseif ($q8 == "3") 
								{
									$result_3 += 1;
								}
								elseif ($q8 == "4") 
									{
										$result_4 += 1;
									}

						
						if($result_1>$result_2){
							if($result_1>$result_3){
								if($result_1>$result_4){
									echo "<center>
										Результат: <b>Холерик</b> <br>
										Это настоящие непоседы. Они являются заводилами в каком-то деле,
										всегда стремятся к лидерству, при этом могут проявлять не совсем
										адекватные свои качества, такие как агрессивность, гнев,
										вспыльчивость, слишком бурные эмоциональные возбуждения. Это люди,
										которые в прямом смысле готовы пробить стену головой, но
										до результата дойти.
										Зачастую холерики занимают руководящие посты, они очень трудолюбивы
										и настойчивы, могут за день сделать больше, чем кто-то другой.
										Иногда холерики из-за своей натуры трудоголиков не могут понять
										других темпераментных личностей, которым это качество недоступно.
										Энергичным и подвижным холерикам иногда полезно немного
										притормаживать на пути, поскольку слишком пылкий заряд энергии
										может не только созидать что-то, но и разрушать.
										</center>"; $res = "Холерик";	
								}
							}
							
							if($result_2>$result_3) {
								if($result_3>$result_4){
									echo "<center>
										Результат: <b>Холерик</b> <br>
										Это настоящие непоседы. Они являются заводилами в каком-то деле,
										всегда стремятся к лидерству, при этом могут проявлять не совсем
										адекватные свои качества, такие как агрессивность, гнев,
										вспыльчивость, слишком бурные эмоциональные возбуждения. Это люди,
										которые в прямом смысле готовы пробить стену головой, но
										до результата дойти.
										Зачастую холерики занимают руководящие посты, они очень трудолюбивы
										и настойчивы, могут за день сделать больше, чем кто-то другой.
										Иногда холерики из-за своей натуры трудоголиков не могут понять
										других темпераментных личностей, которым это качество недоступно.
										Энергичным и подвижным холерикам иногда полезно немного
										притормаживать на пути, поскольку слишком пылкий заряд энергии
										может не только созидать что-то, но и разрушать.
										</center>"; $res = "холерик";
								}
								else{
									if($result_4>$result_1){
										echo "<center> Результат: <b>Меланхолик</b> <br>
											Очень тонкие и ранимые натуры. Они обидчивы, мнительны, восприимчивы
											к любым изменениям, болезненны, нерешительны, зачастую все их жизненные
											проблемы заключаются в чрезмерной робости, боязни общения с людьми,
											обидеть кого-то, услышать не то, что хотелось. Новая неизвестная
											обстановка ими воспринимается как нечто страшное.
											Это зачастую несчастливые люди, их неуверенность мешает им раскрыться,
											показать все свои таланты и способности. Постоянное угнетение самого
											себя приводит к полнейшему пессимизму, тревога и чрезмерная
											впечатлительность в негативном плане мешают таким людям
											самореализовываться в общественной среде, они чувствуют себя на Земле
											чужими и одинокими.
											</center>"; $res = "Меланхолик";
									}
								}
							}
							else{
								if($result_3>$result_1){
									if($result_3>$result_4){
										echo  "<center> Результат: <b>Флегматик</b> <br>
											Это так называемые инопланетяне, которых ничто мирское не волнует, и
											воспринимают они окружающий мир совсем спокойно, даже если на улице
											землетрясение. Их очень трудно вывести из психологически заторможенного
											состояния. Флегматики никогда не идут на открытость, если постоянно
											сталкиваются с напором эмоций – криком, убеждениями.
											Флегматики совсем безобидные и бесконфликтные люди, но вот в достижении
											цели они усидчивы и идут до конца. Они характеризуются терпимостью,
											четкостью выполняемых задач. Среди флегматиков очень много врачей и
											учителей – это натуры, которые обладают запредельным терпением и
											надежной уверенностью в выполнении правильных и точных инструкций в
											своей работе без суеты и раздражения.
											</center>"; $res = "Флегматик";
									}
								}
								else{
									if($result_4>$result_1){
										echo "<center> Результат: <b>Меланхолик</b> <br>
											Очень тонкие и ранимые натуры. Они обидчивы, мнительны, восприимчивы
											к любым изменениям, болезненны, нерешительны, зачастую все их жизненные
											проблемы заключаются в чрезмерной робости, боязни общения с людьми,
											обидеть кого-то, услышать не то, что хотелось. Новая неизвестная
											обстановка ими воспринимается как нечто страшное.
											Это зачастую несчастливые люди, их неуверенность мешает им раскрыться,
											показать все свои таланты и способности. Постоянное угнетение самого
											себя приводит к полнейшему пессимизму, тревога и чрезмерная
											впечатлительность в негативном плане мешают таким людям
											самореализовываться в общественной среде, они чувствуют себя на Земле
											чужими и одинокими.
											</center>"; $res = "Меланхолик";
									}
								}
							}
						}
						else{
							if($result_2>$result_3) {
								if($result_4>$result_2){
									echo"<center> Результат: <b>Меланхолик</b> <br>
										Очень тонкие и ранимые натуры. Они обидчивы, мнительны, восприимчивы
										к любым изменениям, болезненны, нерешительны, зачастую все их жизненные
										проблемы заключаются в чрезмерной робости, боязни общения с людьми,
										обидеть кого-то, услышать не то, что хотелось. Новая неизвестная
										обстановка ими воспринимается как нечто страшное.
										Это зачастую несчастливые люди, их неуверенность мешает им раскрыться,
										показать все свои таланты и способности. Постоянное угнетение самого
										себя приводит к полнейшему пессимизму, тревога и чрезмерная
										впечатлительность в негативном плане мешают таким людям
										самореализовываться в общественной среде, они чувствуют себя на Земле
										чужими и одинокими.
										</center>"; $res = "Меланхолик";
								}
								else{
									echo "<center> Результат: <b>Сангвиник</b> <br>
										Это самый удачный типаж темперамента.
										Золотая середина между вспыльчивостью и безынициативностью.
										Сангвиники жизнерадостные, веселые натуры, они открыты и доверчивы,
										слишком любознательны. Им подвластны любые направления деятельности.
										Начатое дело доводится до конца, если к нему не пропадает интерес.
										Сангвиника нужно постоянно увлекать и удивлять, чтобы добиться
										определенной цели с его помощью.
										</center>"; $res = "Сангвиник";
								}
							}
							else{
								if($result_3>$result_2){
									echo "<center> Результат: <b>Флегматик</b> <br>
										Это так называемые инопланетяне, которых ничто мирское не волнует, и
										воспринимают они окружающий мир совсем спокойно, даже если на улице
										землетрясение. Их очень трудно вывести из психологически заторможенного
										состояния. Флегматики никогда не идут на открытость, если постоянно
										сталкиваются с напором эмоций – криком, убеждениями.
										Флегматики совсем безобидные и бесконфликтные люди, но вот в достижении
										цели они усидчивы и идут до конца. Они характеризуются терпимостью,
										четкостью выполняемых задач. Среди флегматиков очень много врачей и
										учителей – это натуры, которые обладают запредельным терпением и
										надежной уверенностью в выполнении правильных и точных инструкций в
										своей работе без суеты и раздражения.
										</center>"; $res = "Флегматик";
								}
								else{
									echo "<center> Результат: <b>Меланхолик</b> <br>
										Очень тонкие и ранимые натуры. Они обидчивы, мнительны, восприимчивы
										к любым изменениям, болезненны, нерешительны, зачастую все их жизненные
										проблемы заключаются в чрезмерной робости, боязни общения с людьми,
										обидеть кого-то, услышать не то, что хотелось. Новая неизвестная
										обстановка ими воспринимается как нечто страшное.
										Это зачастую несчастливые люди, их неуверенность мешает им раскрыться,
										показать все свои таланты и способности. Постоянное угнетение самого
										себя приводит к полнейшему пессимизму, тревога и чрезмерная
										впечатлительность в негативном плане мешают таким людям
										самореализовываться в общественной среде, они чувствуют себя на Земле
										чужими и одинокими.
										</center>"; $res = "Меланхолик";
								}
							}
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
							$key1 = array_search('Философия', $resul);
							$key2 = array_search($line[0], $resul);
							$resu[$key2 + 1][$key1] = $res;
							break;
						}
						
						update_excel_file($filename, $resu);
					?>
				</th>
			</tr>
			<tr>
				<th>
					<br><br><br><br><br>
					<form method="post" action="/PracticeWork/student.php">
						<input type="submit" value="Вернуться на страницу выбора теста" style="font: 15px georgia;"/>
					</form>
				</th>
			</tr>
		</table>
	</body>
</html>	