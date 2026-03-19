<?php
// Дата
$formatter = new IntlDateFormatter(
    'ru_RU',
    IntlDateFormatter::FULL,
    IntlDateFormatter::NONE
);
$formatter->setPattern('d');
$day = $formatter->format(new DateTime());

$formatter->setPattern('MMMM'); 
$mon = $formatter->format(new DateTime());

$formatter->setPattern('Y');
$year = $formatter->format(new DateTime());

// Меню сайта
$leftMenu = [
    ['link'=>'Домой', 'href'=>'index.php'],
    ['link'=>'О нас', 'href'=>'about.php'],
    ['link'=>'Контакты', 'href'=>'contact.php'],
    ['link'=>'Таблица умножения', 'href'=>'table.php'],
    ['link'=>'Калькулятор', 'href'=>'calc.php']
];

// Функция для отрисовки меню
function drawMenu($menu, $vertical = true) {
    if ($vertical) {
        echo '<ul>';
        foreach ($menu as $item) {
            echo '<li><a href="'.$item['href'].'">'.$item['link'].'</a></li>';
        }
        echo '</ul>';
    } else {
        echo '<ul style="list-style:none; gap:15px;">';
        foreach ($menu as $item) {
            echo '<li style= "display:inline-block; margin-left:10px" ><a href="'.$item['href'].'">'.$item['link'].'</a></li>';
        }
        echo '</ul>';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Сайт нашей школы</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>
<body>

<div id="header">
    <img src="logo.gif" width="187" height="29" alt="Наш логотип" class="logo" />
    <span class="slogan">приходите к нам учиться</span>
</div>

<div id="content">
<?php
  $hour = (int) date('H'); 
  if ($hour >= 6 && $hour < 12) {
      $welcome = 'Доброе утро';
  } elseif ($hour >= 12 && $hour < 18) {
      $welcome = 'Добрый день';
  } elseif ($hour >= 18 && $hour < 23) {
      $welcome = 'Добрый вечер';
  } else {
      $welcome = 'Доброй ночи';
  }
?>
<h1><?= $welcome ?>, Гость!</h1>

<blockquote>Сегодня <?php echo date('d-m-Y'); ?></blockquote>

<h3>Зачем мы ходим в школу?</h3>
<p>
  У нас каждую минуту что-то происходит и кипит жизнь. Проходят уроки и шумят перемены, кто-то отвечает у доски, кто-то отчаянно зубрит перед контрольной пройденный материал, кому-то ставят «пятерку» за сочинение, кого-то ругают за непрочитанную книгу, на школьной спортивной площадке ребята играют в футбол, а девочки – в волейбол, некоторые готовятся к соревнованиям, другие участвуют в репетициях праздников…
</p>

<h3>Что такое ЕГЭ?</h3>
<p>
  Аббревиатура ЕГЭ расшифровывается как "Единый Государственный Экзамен". Почему "единый"? ЕГЭ одновременно является и вступительным экзаменом в ВУЗ и итоговой оценкой каждого выпускника школы. К тому же на всей территории России используются однотипные задания и единая система оценки.
</p>
<p>
  Результаты ЕГЭ оцениваются по 100-балльной и пятибалльной системам и заносятся в свидетельство о результатах единого государственного экзамена. Срок действия документа истекает 31 декабря следующего года, поэтому абитуриенты могут поступать в ВУЗы со свидетельством ЕГЭ в течение двух лет.
</p>
</div>
<div id="nav">
<h2>Навигация по сайту</h2>
<?php
// Вызов функции для отрисовки меню
drawMenu($leftMenu, true); // true - вертикально, false - горизонтально
?>
</div>

<footer>
<p style="text-align: center;">
&copy; <?php echo $year; ?> Ваше Имя или Название компании
</p>
<?php
// Вызов функции для отрисовки меню
drawMenu($leftMenu, false ); // true - вертикально, false - горизонтально
?>
</footer>
</body>
</html>