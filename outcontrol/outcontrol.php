<?php

// Работа с буфером
ob_start();
print "test"; // не выводится
ob_clean();
print "test2"; // выводится
ob_flush();
$content = ob_get_contents();
ob_end_clean();

echo "\nBuffer content is empty: " . empty($content) . "\n";

// Вложенные буферы

ob_start();
print "test1"; // выводится
ob_start();
print "test2"; // не выводится
ob_end_clean();
ob_end_flush();

// Пользовательские обработчики

$customHandler = function ($buffer, $phase) {

    return "\nCustom buffer handler say: " . $buffer . "\n";
};

ob_start($customHandler);
print "Hello";
ob_end_flush();





