<?php 

  if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];
    $phoneNum = $_POST['phone'];

    $mailTo = "solares.ceo@gmail.com";
    $sub = "WEBSITE INQUIRY";
    $txt = "E-Mail: $mailFrom\nName: $name\n Phone Number: $phoneNum \nSubject: $subject\n\nMessage: $message\n";

    mail($mailTo, $sub, $txt);
    header("Location: index.html");
}
