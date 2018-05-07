
<?php
function connect($query){
    //Устанавливаем доступы к базе данных:
    $host = 'localhost'; //имя хоста, на локальном компьютере это localhost
    $user = 'root'; //имя пользователя, по умолчанию это root
    $password = ''; //пароль, по умолчанию пустой
    $db_name = 'test2'; //имя базы данных

//Соединяемся с базой данных используя наши доступы:
    $link = mysqli_connect($host, $user, $password, $db_name) or die(mysqli_error($link));

//Устанавливаем кодировку (не обязательно, но поможет избежать проблем):
    mysqli_query($link, "SET NAMES 'utf8'");
    //Делаем запрос к БД, результат запроса пишем в $result:
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    return $result;
}


function request1(){


//Формируем тестовый запрос:
$query = "SELECT * FROM users";

$result=connect($query);

//Преобразуем ответ
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row){};
return ($data);
}

