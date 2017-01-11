<?php
/*
// This script work in pair with ContentDownloader X1.
// Only for project "shop_rostex_ua_GOODS_PHP_SCRIPT.cdp"
*/

// DATA for TESTS

//$_POST = array('data' => '
//<p>Производитель: Geberit<br />
//Коллекция: Duofix<br />
//Cтрана производитель: Швейцария<br />
//Предназначение: Для дома<br />
//Назначение: Для подвесных унитазов<br />
//Cистема смыва: Механическая<br />
//Расположение клавиши: Фронтальное<br />
//Глубина инсталляции: 12 см<br />
//Монтаж: Капитальная стена, Не капитальная стена, Гипсокартоновая перегородка<br />
//Высота (мм) : 1120 &nbsp;</p>
//
//<p>Расширенная характеристика:<br />
//&bull;&nbsp;&nbsp; &nbsp;высота монтажного элемента 112 см<br />
//&bull;&nbsp;&nbsp; &nbsp;подвод воды по центру сзади или сверху<br />
//&bull;&nbsp;&nbsp; &nbsp;двойной смыв посредством смывной клавиши Geberit Sigma20, Sigma50, Sigma01, Twist или Bolero<br />
//&bull;&nbsp;&nbsp; &nbsp;смыв/стоп со смывными клавишами Sigma10, Mambo или Tango<br />
//&bull;&nbsp;&nbsp; &nbsp;регулируемый объем смыва<br />
//&bull;&nbsp;&nbsp; &nbsp;бачок скрытого монтажа для установки и ремонта без применения инструментов<br />
//&bull;&nbsp;&nbsp; &nbsp;не требующее применения инструментов крепление для фанового отвода, звукопоглощающее, регулируется по глубине в 8 положениях, диапазон регулировки 45 мм<br />
//&bull;&nbsp;&nbsp; &nbsp;самостопорящиеся опоры для выравнивания элемента без применения инструментов<br />
//&bull;&nbsp;&nbsp; &nbsp;ножки оцинкованные, с бесступенчатой регулировкой 0 - 20 см<br />
//&bull;&nbsp;&nbsp; &nbsp;самонесущая конструкция<br />
//&bull;&nbsp;&nbsp; &nbsp;рама порошковой окраски, синий ультрамарин<br />
//&bull;&nbsp;&nbsp; &nbsp;опорная площадка поворотная, для монтажа в U-образный профиль UW 50 и UW 75<br />
//&bull;&nbsp;&nbsp; &nbsp;объем воды для смыва:<br />
//&bull;&nbsp;&nbsp; &nbsp;заводские настройки 3 и 6л<br />
//&bull;&nbsp;&nbsp; &nbsp;диапазон настройки большего объёма 4,5/6/7,5л<br />
//&bull;&nbsp;&nbsp; &nbsp;диапазон настройки малого объёма 3/4л<br />
//&bull;&nbsp;&nbsp; &nbsp;смыв старт/стоп 4,5/6/7,5л</p>
//');
//$_POST['id'] = '244';
//$_POST['url'] = 'http://shop.rostex.ua/ru/product/244';
//$_POST['name'] = 'Душевой набор Grohe Stick';
//$_POST['articul'] = '27993000';
//$_POST['subcat'] = 'Душевая программа';
//$_POST['description'] = 'Коллекция Grandera поразит вас своей неординарностью и легкостью. Практичность коллекции обусловлена способностью гармонировать с широким спектром оборудования и предметов интерьера вашей ванной комнаты. Благодаря технологии GROHE StarLight® покрытие изделий не только надолго сохранит сияние, но и покажет стойкость к загрязнению и царапинам.';
//$_POST['short_char'] = '<p>Производитель: Grohe<br />
//Коллекция: Grandera<br />
//Cтрана производитель: Германия</p>';
//$_POST['full_char'] = '<p>Производитель: Grohe<br />
//Коллекция: Grandera<br />
//Cтрана производитель: Германия<br />
//Предназначение: Для дома<br />
//Тип: Душевые наборы<br />
//Форма лейки: Прямоугольные<br />
//Цвет: Хром<br />
//Комплектация душевого набора: С ручным душем, С настенным держателем</p>
//
//<p>Развернутая характеристика:</p>
//
//<ul>
//<li>Размер душевой лейки:    100 мм</li>
//<li>ограничитель расхода воды 7,6 л </li>
//<li>Вес:    1,64 кг</li>
//<li>Подключение шланга:    накидная гайка 1/2 дюйма</li>
//<li>Материал:    металл</li>
//<li>Виды струи: Дождь</li>
//<li>с системой против известковых отложений</li>
//</ul>
//
//<p>Комплектация:</p>
//
//<ul>
//<li>ручной душ с одним типом струи Grohe Grandera Stick (26037000)</li>
//<li>держатель душа Grohe Grandera (27969000)</li>
//<li>душевой шланг 1500 мм Grohe Rotaflex (28417000)</li>
//<li>инструкция по монтажу</li>
//<li>гарантийный талон</li>
//</ul>';

// END DATA for TESTS

GLOBAL $arrayName, $arrayBig;
// Creating ARRAYS for work
$arrayBig = array(); // main array for FINAL data
$arrayName = array ("Страна", "Страна производитель", "Cтрана производитель", "Cистема смыва", "Cпособ монтажа", "Боковая стенка", "Вес", "Вид", "Вид душевого шланга", "Вид монтажа", "Вид сантехнического изделия", "Вид смесителя", "Вид термостата", "Вид унитаза", "Вместимость раковины (л)", "Выпуск воды", "Высота", "Высота (мм)", "Гарантия", "Глубина", "Глубина (мм)", "Глубина инсталляции", "Глубина чаши (мм)", "Готовых отверстий для смесителя", "Держатель лейки в шланговом подсоединении", "Диаметр", "Диаметр выпуска", "Длина", "Длина (мм)", "Длина излива", "Длина троса", "Длина чаши (мм)", "Длина шланга", "Длина штанги в наборе", "Длина штанги в наборе до 65 см", "Длинна", "Дополнительная информация", "Дополнительно", "Запорный вентиль в шланговом подсоединении", "Количество мест", "Количество отверстий под смеситель", "Коллекция", "Комплектация", "Комплектация верхнего душа", "Комплектация встраиваемого смесителя", "Комплектация душевого набора", "Комплектация душевой стойки", "Комплектация смесителя", "Конструкция", "Конструкция дверей", "Конфигурация отверстия под смеситель", "Крепление", "Крышка (сидение)", "Материал", "Материал держателя / корпуса", "Материал корпуса", "Материал оплетки шланга", "Материал раковины", "Материал умывальника", "Материал фасада", "Место установки", "Монтаж", "Монтаж вентилей", "Монтаж внутренней части", "Монтаж держателя верхнего душа", "Монтаж держателя ручного душа", "Монтаж смесителя", "Назначение", "Назначение внутренней части", "Наименование", "Направление выпуска", "Необходимо комплектовать", "Объем", "Обьем (л)", "Особенности", "Отверстие под перелив", "Отверстие под смеситель", "Отверстий под смеситель", "Перелив", "Поверхность", "Подвод воды", "Предназначение", "Применение", "Принцип смешивания воды", "Производитель", "Размер душевого диска", "Размеры", "Расположение клавиши", "Расположение отверстия под смеситель", "расход воды 12 л/мин", "расход воды 17 л/мин", "расход воды 20/13 л/мин (душ/лейка)", "расход воды 20/19 л/мин (излив/душ)", "Регулировка по глубине", "Ручные души (лейки)", "С донным клапаном", "Сиденье в комплекте", "Система антивсплеск", "Система монтажа", "Сливная арматура", "Смыв", "Способ монтажа", "Термостат", "Технические свойства", "Тип", "Тип ванны", "Тип вентилей", "Тип верхнего душа", "Тип верхних душей", "Тип выпуска", "Тип монтажа", "Тип опускания крышки", "Тип смесителя", "Тип смыва", "Тип унитаза", "Тип установки", "Толщина акрила", "Тон стекла", "Труба", "Установка", "Установка умывальника", "Установочный комплект", "Форма", "Форма лейки", "Форма умывальника", "Хром", "Цвет", "Цвет внешней части", "Цвет заглушки", "Цвет изделия", "Цвет керамики", "Цвет кнопки", "Цвет корпуса", "Цвет патрубка", "Цвет фасада", "Цвет фурнитуры", "Ширина", "Ширина (мм)", "Ширина чаши (мм)");

for ($i=0; $i < count($arrayName); $i++) {
    $arrayBig[$arrayName[$i]] =  ''; // Creating empty MAIN array with sorted keys
}
// END Creating ARRAYS for work

// Separating incoming data for blocks by </p>
$data = preg_replace('~<p>~', '', $_POST['data']);
$data = str_replace('&nbsp;', ' ', $data);
$data = explode('</p>', $data);
// END Separating incoming data for blocks by </p>

// Sending only first block of data with characteristics, without "Расширенные" and exploding it
$result = explode('[CSVCS]',dataRestructure($data['0']));
// END Sending only first block of data with characteristics, without "Расширенные" and exploding it

// Trimming found option names
for ($i=0; $i<count($result);$i++) $result[$i] = trim($result[$i]);
// END Trimming found option names

// Searching for options from the list in $arrayNames and creating FINAL array $arrayBig
for ($i=0;$i<count($arrayName);$i++) {
    $foundKey = array_search($arrayName[$i], $result); // searching in array

    if ($foundKey || ($foundKey == '0' && $foundKey !== false)) {
        $arrayBig[$arrayName[$i]] = $result[$foundKey+1]; // filling Final array with found data
    }
}
// END Searching for options from the list in $arrayNames and creating FINAL array $arrayBig

// Clearing data in $_POST array except $_POST['data'] for further add in CSV file
foreach ($_POST as $postKey => $postData) {
    if ($_POST[$postKey] != $_POST['data']) {
        $_POST[$postKey] = clearData($postData);
    }
}
// END Clearing data in $_POST array except $_POST['data'] for further add in CSV file

// Creating string variable for FINAL data for CSV file
    // first data from $_POST array
$array = $_POST['id'] . ';' . $_POST['url'] . ';' . $_POST['name'] . ';' . $_POST['articul'] . ';' . $_POST['subcat'] . ';' . $_POST['description'] . ';' . $_POST['short_char'] . ';' . $_POST['full_char'] . ';';
    // data parsed from page content
foreach ($arrayBig as $key => $value) {
    $array .= $value.';';
}
// END Creating string variable for FINAL data display

function clearData ($dirty) {
    $clean = str_replace(array("\r", "\n", ";"), '', $dirty); // deleting chars which breaks CSV file while writing
    return $clean;
}

// Getting options from straight text
function dataRestructure ($array) {
    if (preg_match('~развернутая характеристика~ui', $array) || preg_match('~расширенная характеристика~ui', $array)) {
        $array = preg_replace('~<br \/>~', '', $array);
    }
    $array = explode("<br />", $array);

    foreach ($array as &$item){
        $item = preg_replace('~\<(|\/)p\>~', '', $item);
        $item = trim(preg_replace('~\n~', '', $item));
        $item = preg_replace('~\s{2}~', ' ', $item);
        if (!preg_match('~развернутая характеристика~ui', $item) || !preg_match('~расширенная характеристика~ui', $item)){
        $item = explode(":", $item);
    }

    if ($item[1]) $item[1] = trim($item[1]);
else $item[1] = 'NULL';

    if (count($item) >1 ) $item = implode('[CSVCS]', $item);
}

    $array = implode('[CSVCS]', $array);
    $array = preg_replace('~Развернутая характеристика~ui', 'Развернутая характеристика:[CSVCS]', $array);
    $array = preg_replace('~Расширенная характеристика~ui', 'Расширенная характеристика:[CSVCS]', $array);

    if (preg_match('~развернутая характеристика~ui', $array) || preg_match('~расширенная характеристика~ui', $array)) {
        $array = preg_replace('~\&bull;~', '<br />&bull;', $array);
    }

    return $array;
}
// END Getting options from straight text

// Function which FILLS an CSV file
function createCSV ($CSVdata){
    GLOBAL $arrayName, $firstLine;

    $filename = 'shop_rostex_options.csv';

    if (!file_exists($filename)) {
        // Filling first line of CSV file with names
        $firstLine .= 'ID;URL;Название товара;Артикул;Подкатегория;Описание;Краткий список характеристик;Полный список характеристик;';
        foreach ($arrayName as $value) {
            $firstLine .= $value . ';';
        }
        $firstLine .= ";\r\n";
        file_put_contents('shop_rostex_options.csv', $firstLine, FILE_APPEND);//
        // END Filling first line of CSV file
    }

    $CSVdata .= "\r\n";
    file_put_contents('shop_rostex_options.csv', $CSVdata, FILE_APPEND);

    echo 'Товар с ID='.$_POST['id']." успешно добавлен в CSV \n"; // Sending signal about success write to CSV to program which use script...
}
// END Function which creates an CSV file

/* WRITING an CSV file */ createCSV ($array);