<?php
if (isset($_POST)) {

// Переменные с формы
    $Name = $_POST['Name'];
    $SurName = $_POST['Surname'];
    $CreateDate = $_POST['CreateDate'];

    echo $Name;
    echo $SurName . '<div style="height: 100px;width: 100px;background-color:red;"></div>';
    echo $CreateDate;


    if ( $Name != '') {
//Формируем тестовый запрос:
        $query = " INSERT INTO users ( Name,CreateDate,Surname ) VALUES ('$Name','$CreateDate','$SurName')";
//Делаем запрос к БД, результат запроса пишем в $result:
        $result = connect($query);
//
        if ($result == true) {
            echo "Информация занесена в базу данных";
        } else {
            echo "Информация не занесена в базу данных";
        }
    }
}