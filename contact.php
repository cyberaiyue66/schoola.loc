<!DOCTYPE html>
<html>

<head>
  <title>Контакты</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>

  <div id="header">
    <!-- Верхняя часть страницы -->
    <img src="logo.gif" width="187" height="29" alt="Наш логотип" class="logo" />
    <span class="slogan">приходите к нам учиться</span>
    <!-- Верхняя часть страницы -->
  </div>

  <div id="content">
    <!-- Заголовок -->
    <h1>Обратная связь</h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
     <?php
// Получаем значение директивы post_max_size
$postMax = ini_get('post_max_size');

// Определяем единицу измерения
$unit = strtoupper(substr($postMax, -1));

// Числовая часть
$number = (int)$postMax;

// Переводим в байты
switch($unit) {
    case 'G': $size = $number * 1024 * 1024 * 1024; break;
    case 'M': $size = $number * 1024 * 1024; break;
    case 'K': $size = $number * 1024; break;
    default: $size = $number;
}
?>
<form action="" method="post">
</form>
<p>Максимальный размер отправляемых данных <?= $size ?> байт.</p>
    <h3>Адрес</h3>
    <p>123456 Москва, Малый Американский переулок 21</p>
    <h3>Задайте вопрос</h3>
    <form action='' method='post'>
      <label>Тема письма: </label>
      <br />
      <input name='subject' type='text' size="50" />
      <br />
      <label>Содержание: </label>
      <br />
      <textarea name='body' cols="50" rows="10"></textarea>
      <br />
      <br />
      <input type='submit' value='Отправить' />
    </form>
    <!-- Область основного контента -->
     <?php
// Получаем значение директивы post_max_size
$size = ini_get('post_max_size');

// Получаем числовую часть
$number = (int)$size;

// Получаем единицу измерения
$unit = strtoupper(substr($size, -1));

// Переводим в байты
switch ($unit) {
    case 'G':
        $number *= 1024;
    case 'M':
        $number *= 1024;
    case 'K':
        $number *= 1024;
}
$size = $number;
?>
<p>Максимальный размер данных, отправляемых методом POST: <?= $size ?> байт</p>
  </div>
  <div id="nav">
    <h2>Навигация по сайту</h2>
    <ul>
      <li><a href='index.php'>Домой</a>
      </li>
      <li><a href='about.php'>О нас</a>
      </li>
      <li><a href='contact.php'>Контакты</a>
      </li>
      <li><a href='table.php'>Таблица умножения</a>
      </li>
      <li><a href='calc.php'>Калькулятор</a>
      </li>
    </ul>
     <?php
$leftMenu = [
    ['link'=>'Домой', 'href'=>'index.php'],
    ['link'=>'О нас', 'href'=>'about.php'],
    ['link'=>'Контакты', 'href'=>'contact.php'],
    ['link'=>'Таблица умножения', 'href'=>'table.php'],
    ['link'=>'Калькулятор', 'href'=>'calc.php']
];
?>
  </div>
  <div id="footer">
    <!-- Нижняя часть страницы -->
    &copy; Супер Мега Веб-мастер, 2000 &ndash; 2021
    <!-- Нижняя часть страницы -->
  </div>
</body>

</html>