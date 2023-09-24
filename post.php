<?php


    $name = $_POST['name'];
    $name = $_POST['phone'];

    $to  = 'redbirds@mail.ru';
    $date = date ('d.m.y');
    $time = time ('h:i');
    $from = $email;
    $subject = 'Запись на макияж';

    $msg="
    Имя: $name /n
    Телефон: $phone";
    mail($to, $subject, $msg, "From: $to ");





    // несколько получателей
    $to  = 'redbirds@mail.ru';

    // тема письма
    $subject = 'Запись на макияж';

    // текст письма меняется он!!
    $message = $_POST['name'] . '<br />' . $_POST['number'] ;

    // Для отправки HTML-письма должен быть установлен заголовок Content-type
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

    // Дополнительные заголовки
    $headers .= 'To: Анастасия <redbirds@mail.ru>' . "\r\n"; // Свое имя и email
    $headers .= 'From: '  . $_POST['name'] . '<' . $_POST['email'] . '>' . "\r\n";


    // Отправляем
    mail($to, $subject, $message, $headers);
?>