<?php


    $name = $_POST['name'];
    $name = $_POST['phone'];

    $to  = 'adflame1342@gmail.com';
    $date = date ('d.m.y');
    $time = time ('h:i');
    $from = $email;
    $subject = 'Запись на макияж';

    $msg="
    Имя: $name /n
    Телефон: $phone";
    mail($to, $subject, $msg, "From: $to ");
?>
