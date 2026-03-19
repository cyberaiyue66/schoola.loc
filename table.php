<?php
function drawTable($cols, $rows, $color) {
    echo "<table border='1' style='border-collapse: collapse; text-align:center;'>";
    for ($i = 1; $i <= $rows; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= $cols; $j++) {
            // Выделяем первую строку и первый столбец
            if ($i == 1 || $j == 1) {
                echo "<td style='background-color:$color; font-weight:bold; text-align:center;'>".($i*$j)."</td>";
            } else {
                echo "<td>".($i*$j)."</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
}

// Получаем данные из формы (или задаем значения по умолчанию)
$cols = !empty($_GET['cols']) ? (int)$_GET['cols'] : 5;
$rows = !empty($_GET['rows']) ? (int)$_GET['rows'] : 5;
$color = !empty($_GET['color']) ? htmlspecialchars($_GET['color']) : '#FFD700'; // золотой цвет по умолчанию
?>

<!DOCTYPE html>
<html>
<head>
  <title>Таблица умножения</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>
<body>

<div id="header">
    <img src="logo.gif" width="187" height="29" alt="Наш логотип" class="logo" />
    <span class="slogan">приходите к нам учиться</span>
</div>

<div id="content">
    <h1>Таблица умножения</h1>

    <form action='' method='get'>
      <label>Количество колонок: </label><br />
      <input name='cols' type='text' value="<?= $cols ?>" /><br />

      <label>Количество строк: </label><br />
      <input name='rows' type='text' value="<?= $rows ?>" /><br />

      <label>Цвет (для первой строки и первого столбца): </label><br />
      <input name='color' type='text' value="<?= $color ?>" /><br /><br />

      <input type='submit' value='Создать' />
    </form>

    <!-- Таблица -->
    <?php drawTable($cols, $rows, $color); ?>
    <!-- Таблица -->
</div>

<div id="nav">
<h2>Навигация по сайту</h2>
<ul>
  <li><a href='index.php'>Домой</a></li>
  <li><a href='about.php'>О нас</a></li>
  <li><a href='contact.php'>Контакты</a></li>
  <li><a href='table.php'>Таблица умножения</a></li>
  <li><a href='calc.php'>Калькулятор</a></li>
</ul>
</div>

<div id="footer">
  &copy; Супер Мега Веб-мастер, 2000 &ndash; 2026
</div>

</body>
</html>