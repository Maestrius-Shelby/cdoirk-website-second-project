<?php 
require_once '../config/connect.php';

function validate($value){
    $errorMessage = '';
    if (empty($value) || false) {
        die($errorMessage .= "<li><font color='red'>ERROR!</font></li>");
    }
}

function CAWTODB ($connection, $message, $courses, $direction_of_training,$sql){
    //CAWTODB - checking and writing to the database
    $userID = $sql;
    validate($userID);
	$row = $userID->fetch_assoc();
	$ID = intval($row['id']);
    if (empty($message) == false){
        $result2 = $connection->query("INSERT INTO `users_messages`(`user_id`, `message`) VALUES ($ID,'$message')");
        validate($result2);
    }
    // Используем цикл foreach для добавления данных
	foreach ($courses as $course) {
	    // SQL-запрос для добавления данных в базу данных
	    $SQL = "INSERT INTO `direction_of_training` (`user_id`, `direction of training`, `course`, `date`) VALUES ('$ID', '$direction_of_training', '$course', DATE_FORMAT(NOW(), '%Y-%m-%d %H:%i'))";
        $result3 = $connection-> query($SQL);
	    validate($result3);
	}
}

// Используем filter_input для получения значений POST
$message = filter_input(INPUT_POST, 'message1', FILTER_SANITIZE_SPECIAL_CHARS);
$name = filter_input(INPUT_POST, 'senderName1', FILTER_SANITIZE_SPECIAL_CHARS);
$surname = filter_input(INPUT_POST, 'senderSurname1', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'senderEmail1', FILTER_SANITIZE_EMAIL);
$phone = filter_input(INPUT_POST, 'senderPhone1', FILTER_SANITIZE_SPECIAL_CHARS);

// Обработка радио-кнопок
$selectedRadio = isset($_POST['radio_selection']) ? $_POST['radio_selection'] : '';

// Обработка чекбоксов
$direction_of_training = isset($_POST['brands1']) ? implode(',', $_POST['brands1']) : '';
$courses = isset($_POST['brands']) ? $_POST['brands'] : array();

// Проверяем входные данные
validate($name);
validate($surname);
validate($email);
validate($phone);

// Предотвращаем SQL-инъекции
$name = $connection->real_escape_string($name);
$surname = $connection->real_escape_string($surname);
$email = $connection->real_escape_string($email);
$phone = $connection->real_escape_string($phone);
$message = $connection->real_escape_string($message);

// Вставляем данные в базу данных
if(isset($_POST['create'])){
    $sql1 = $connection->query("SELECT * FROM `applications` WHERE (`name` = '$name' AND `surname` = '$surname' AND `email` = '$email' AND `phone_number` = '$phone')");
    if ($sql1->num_rows != 0){
        $sql2 = $connection->query("SELECT `id` FROM `applications` WHERE (`name` = '$name' AND `surname` = '$surname' AND `email` = '$email' AND `phone_number` = '$phone')");
        CAWTODB ($connection, $message, $courses, $direction_of_training, $sql2);
    }else{
        $result = $connection->query("INSERT INTO `applications`(`name`,`surname`,`email`,`phone_number`) VALUES ('$name','$surname','$email','$phone')");
        validate($result);
        $sql2 = $connection->query("SELECT * FROM `applications` ORDER BY `id` DESC LIMIT 1");
        CAWTODB ($connection, $message, $courses, $direction_of_training, $sql2);
    }
    sleep(1);
    header('Location: ../index.php');
    $connection->close();
}
?>