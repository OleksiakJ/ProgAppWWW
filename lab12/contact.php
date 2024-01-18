<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';
    function WyslijMailaKontakt(){
        $wynik = '
        <form class="" action="contact.php" method="post">
            Email <input type="email" name="email" value=""> <br>
            Temat <input type="text" name="subject" value=""> <br>
            Treść <input type="text" name="message" value=""> <br>
            <button type="submit" name="send">Wyslij</button>
        </from>
        ';
        return $wynik;
    }
     
    if(isset($_POST["send"])) {
        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'oleksianko@gmail.com';
        $mail->Password = 'wnlcdwqppgjctyvn';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->CharSet = "UTF-8";
        $mail->setFrom('oleksianko@gmail.com');

        $mail->addAddress($_POST["email"]);
        $mail->isHTML(true);
        $mail->Subject = $_POST["subject"];
        $mail->Body = $_POST["message"];

        $mail->send();
        header('Location: ./index.php?idp=kontakt');
    }

    if(isset($_GET["edit"])) {
        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'oleksianko@gmail.com';
        $mail->Password = 'rlndelbujoqhvsqb';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->CharSet = "UTF-8";
        $mail->setFrom('oleksianko@gmail.com');

        $mail->addAddress('oleksianko@gmail.com');
        $mail->isHTML(true);
        $mail->Subject = "Przypominamie hasła";
        $mail->Body = "Login: admin, Hasło: admin";

        $mail->send();
        header('Location: ./admin.php');
    }
?>