<?php

	$metro_stations = array("Авиамоторная","Автозаводская","Академическая", "Александровский сад", "Алексеевская", "Алтуфьево", "Аннино", "Арбатская", "Аэропорт", "Бабушкинская", "Багратионовская", "Баррикадная", "Бауманская", "Беговая", "Белорусская", "Беляево", "Бибирево", "Библиотека имени Ленина", "Битцевский парк", "Боровицкая", "Ботанический сад", "Братиславская", "Бульвар адмирала Ушакова", "Бульвар Дмитрия Донского", "Бунинская аллея", "Варшавская", "ВДНХ", "Владыкино", "Водный стадион", "Войковская", "Волгоградский проспект", "Волжская", "Воробьёвы горы", "Выставочный центр", "Выхино", "Деловой центр", "Динамо", "Дмитровская", "Добрынинская", "Домодедовская", "Дубровка", "Измайловская", "Калужская", "Кантемировская", "Каховская", "Каширская", "Киевская", "Китай-город", "Кожуховская", "Коломенская", "Комсомольская", "Коньково", "Красногвардейская", "Краснопресненская", "Красносельская", "Красные ворота", "Крестьянская застава", "Кропоткинская", "Крылатское", "Кузнецкий мост", "Кузьминки", "Кунцевская", "Курская", "Кутузовская", "Ленинский проспект", "Лубянка", "Люблино", "Марксистская", "Марьино", "Маяковская", "Медведково", "Международная", "Менделеевская", "Молодёжная", "Нагатинская", "Нагорная", "Нахимовский проспект", "Новогиреево", "Новокузнецкая", "Новослободская", "Новые Черёмушки", "Октябрьская", "Октябрьское поле", "Орехово", "Отрадное", "Охотный ряд", "Павелецкая", "Парк культуры", "Парк Победы", "Партизанская", "Первомайская", "Перово", "Петровско-Разумовская", "Печатники", "Пионерская", "Планерная", "Площадь Ильича", "Площадь Революции", "Полежаевская", "Полянка", "Пражская", "Преображенская площадь", "Пролетарская", "Проспект Вернадского", "Проспект Мира", "Пушкинская", "Речной вокзал", "Рижская", "Римская", "Рязанский проспект", "Савёловская", "Свиблово", "Севастопольская", "Семёновская", "Серпуховская", "Смоленская", "Сокол", "Сокольники", "Спортивная", "Сретенский бульвар", "Строгино", "Студенческая", "Сухаревская", "Сходненская", "Таганская", "Тверская", "Театральная", "Текстильщики", "Телецентр", "Тёплый Стан", "Тимирязевская", "Третьяковская", "Трубная", "Тульская", "Тургеневская", "Тушинская", "Улица 1905 года", "Улица Академика Королёва", "Улица Академика Янгеля", "Улица Горчакова", "Улица Милашенкова", "Улица Подбельского", "Улица Сергея Эйзенштейна", "Улица Скобелевская", "Улица Старокачаловская", "Университет", "Филёвский парк", "Фили", "Фрунзенская", "Царицыно", "Цветной бульвар", "Черкизовская", "Чертановская", "Чеховская", "Чистые пруды", "Чкаловская", "Шаболовская", "Шоссе Энтузиастов", "Щёлковская", "Щукинская", "Электрозаводская", "Юго-Западная", "Южная", "Ясенево");
	$my_metro_stations = array("Речной вокзал", "Динамо", "Сокол", "Водный стадион", "Войковская", "Аэропорт", "Белорусская", "Маяковская", "Тверская", "Чеховская", "Пушкинская", "Театральная", "Охотный ряд", "Новокузнецкая", "Менделеевская", "Новослободская", "Октябрьское поле", "Дмитровская", "Тимирязевская", "Савёловская", "Алтуфьево", "Планерная", "Сходненская");
	$my_points = array("Россия, Москва, 2-й Новоподмосковный переулок, 4А", "Россия, Московская область, Долгопрудный, проспект Ракетостроителей 5");

	$ch = curl_init();

	$xml_data = "login=alex.krylov%40gmx.com&password=webgrab445";

	$headers = array( 
            "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64; rv:37.0) Gecko/20100101 Firefox/37.0", 
            "Accept: */*", 
            "Accept-Language: ru-RU,ru;q=0.8,en-US;q=0.5,en;q=0.3",
            "Accept-Encoding: gzip, deflate",
            "Cache-Control: no-cache", 
            "Content-Type: application/x-www-form-urlencoded; charset=UTF-8",
            "Content-length: ".strlen($xml_data), 
            "Connection: keep-alive",
            "X-Requested-With: XMLHttpRequest",
            "Pragma: no-cache", 
           
        ); 

	curl_setopt($ch, CURLOPT_POST, 1); 
    curl_setopt($ch, CURLOPT_POSTFIELDS, $xml_data); 
	curl_setopt($ch, CURLOPT_URL, 'https://youdo.com/api/users/signin/'); 
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_COOKIEJAR, "youdo_cookies.txt");
    curl_setopt($ch, CURLOPT_COOKIEFILE, "youdo_cookies.txt");
	curl_setopt($ch, CURLOPT_TIMEOUT, '30');

	$content = trim(curl_exec($ch));

	print $content."\n";

	curl_close($ch);

	$ch = curl_init();

	$headers = array( 
            "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64; rv:37.0) Gecko/20100101 Firefox/37.0", 
            "Accept: application/json, text/javascript, */*; q=0.01", 
            "Accept-Language: ru-RU,ru;q=0.8,en-US;q=0.5,en;q=0.3",
            "Accept-Encoding: gzip, deflate",
            "Cache-Control: no-cache", 
            "Referer: https://youdo.com/tasks-all-opened-computerhelp-moscow-1",
            "Connection: keep-alive",          
    ); 

	curl_setopt($ch, CURLOPT_URL, 'https://youdo.com/api/tasks/tasks/?list=all&status=opened&city=4400&page=1&noOffers=false&hotTasks=false&showOuter=false&neLat=&neLng=&swLat=&swLng=&zoom=&categories=262144'); 
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_COOKIEJAR, "youdo_cookies.txt");
    curl_setopt($ch, CURLOPT_COOKIEFILE, "youdo_cookies.txt");
	curl_setopt($ch, CURLOPT_TIMEOUT, '30');

	$content = trim(curl_exec($ch));

	curl_close($ch);    

	$jobs = json_decode($content, true);

	//var_dump($jobs["ResultObject"]["Items"]);

	$jobs = $jobs["ResultObject"]["Items"];

	//var_dump($jobs);


	for($i=0;$i<sizeof($jobs);$i++){
		//var_dump($jobs[$i]);

		if(isset($jobs[$i]["Address"])){
			$point_1 = $jobs[$i]["Address"];

			if($jobs[$i]["IsClosed"] === true)
				continue;

			if($jobs[$i]["IsOuter"] === true)
				continue;

			//echo $point_1."\n";

			$find_metro = false;
			foreach ($my_metro_stations as &$metro) 
			{
				if(strpos($point_1, $metro) === false)
					continue;
				else
				{
					//echo $point_1."\n";
					$find_metro = true;
					break;
				}
			}

			if(!$find_metro)
			{
				foreach ($my_points as &$point_2) {
					
					//$point_2 = $my_points;
					//echo $point_2."\n";
					$dist = get_distance($point_1, $point_2);
					
					if($dist > 150)
					{
						echo "-----------------------------------------------------------------------\n";
						echo "".$dist."km $point_1 $point_2\n";
						echo "-----------------------------------------------------------------------\n";
					}
					elseif ($dist < 20) 
					{
						echo "".$dist."km $point_1 $point_2 [".$jobs[$i]['Name']."] (".$jobs[$i]['PriceAmount'].")\n";
					}
				}
			}
			else
			{
				echo "Мое метро - $point_1 [".$jobs[$i]['Name']."] (".$jobs[$i]['PriceAmount']. ")\n";
			}
		}

		if($i==31){
		
		}
	}


	function get_distance($point_1, $point_2)
	{
		$distance = json_decode(
			file_get_contents(
				"http://calc-api.ru/app:geo-api/null?a=".
				urlencode($point_1)."&b=".
				urlencode($point_2)
			),
			true
		);

		return $distance["distanse"];
	}  


?>