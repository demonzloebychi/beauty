<?php
// несколько получателей
$to  = 'redbirds@mail.ru';

// тема письма
$subject = 'Запись на макияж';

// текст письма меняется он!!
$message = $_POST['name'] . '<br />' . $_POST['text'] ;

// Для отправки HTML-письма должен быть установлен заголовок Content-type
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

// Дополнительные заголовки
$headers .= 'To: Анастасия <redbirds@mail.ru>' . "\r\n"; // Свое имя и email
$headers .= 'From: '  . $_POST['name'] . '<' . $_POST['email'] . '>' . "\r\n";


// Отправляем
mail($to, $subject, $message, $headers);
?>