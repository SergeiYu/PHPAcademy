<?php
$str = "Три разные функции для вывода текста.";
echo $str;

echo '<br>';

print ($str);

echo '<br>';

echo <<<DOC
Три разные 
функции для вывода 
текста
DOC;
?>