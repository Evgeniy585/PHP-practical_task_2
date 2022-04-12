<?php
    $connection = mysqli_connect('localhost', 'root', '');
    $select_db = mysqli_select_db($connection, 'practice');
    if($connection == false){
        echo("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
    }
    else {
        echo("Соединение установлено успешно");
}
?>
