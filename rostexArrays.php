<?php
/*
// Made by UJy
// This script work in pair with ContentDownloader X1.
// Only for project "shop_rostex_ua_GOODS_PHP_SCRIPT.cdp"
*/

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