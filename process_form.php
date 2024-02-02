<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $project_name = trim($_POST["project_name"]);
    $admin_email = trim($_POST["admin_email"]);
    $form_subject = trim($_POST["form_subject"]);

    $name = trim($_POST["Имя"]);
    $email = trim($_POST["e-mail"]);
    $phone = trim($_POST["Номер"]);

    $message = "Имя: $name\nEmail: $email\nНомер телефона: $phone";

    // Отправка на почту
    if (mail($admin_email, $form_subject, $message)) {
        // Вернуть сообщение об успешной отправке
        echo "success";
    } else {
        // Вернуть сообщение об ошибке
        echo "error";
    }
} else {
    // Обработка случая, когда запрос не является POST
    echo "Ошибка: Недопустимый метод запроса.";
}
?>
