<?php
// 1. Выведите на экран „Период отпусков закончился!” используя echo и print.
echo "Период отпусков закончился!";
print "Период отпусков закончился!";

// 2. Не забывайте – каждый оператор заканчивается на ;
// 3. Определите 2 переменные PHP: одна целочисленное со значением 288 и одна строчного типа – ”Все возвращаются на работу!”.
$days = 288;
$message = "Все возвращаются на работу!";

// 4. Выведите эти 2 значения на экран, каждую с новой строки.
echo $days . "<br>";
echo $message . "<br>";

// 5. Потом выведите на экран строку, состоящую из значения первой переменной в конкатенации со второй, и дополнительного текста, так что бы вывести следующий текст ”В 288 день, приблизительно ... Все возвращаются на работу!”.
echo "В $days день, приблизительно ... $message<br>";

// 6. Выведите на экран, используя echo, сумму чисел 45+67, используя следующий синтаксис: echo 45+67. Потом попробуйте вывести результат так echo „45+67” и echo ‚45+67’. Пронаблюдайте разницу в выводах.
echo 45 + 67 . "<br>"; // Выведет 112
echo "45+67<br>"; // Выведет 45+67
echo '45+67<br>'; // Выведет 45+67

// 7. Выведите на экран следующее предложение Книга “Герой” выйдет в октябре, этого года! Используйте правильно кавычки!
echo 'Книга "Герой" выйдет в октябре, этого года!<br>';

// 8. Добавьте стих и выведите его правильно.
$poem = "Я иду по улице,<br>Смотрю на небеса.<br>Там летят облака,<br>Как птицы невесомо.";
echo $poem;
