<?php
include "../include/header.php";
//declaracion variables de inputs del form

$visitMail = "";
$visitSubject = "";
$visitMessage = "";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>CTF PKMN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/stylesheet.css">
</head>

<body>

    <div class="container">
        <div class="container-narrow">
            <div class="row">

            </div>
            <div class="col">

                <form method="post" onsubmit="return validate()" action="home.php" id="contactForm">
                    <div id="div_login">
                        <h1>Déjanos un mensaje</h1>
                        <div>
                            <input type="text" class="textbox" name="txt_email" placeholder="email" id="email"/>
                        </div>
                        <div>
                            <input type="text" class="textbox" name="txt_subject" placeholder="asunto" id="asunto" />
                        </div>
                        <div>
                            <textarea type="text" id="txt_message" name="txt_msg" placeholder="escribe tu mensaje aquí..." id="mensaje"></textarea>
                        </div>

                        <div>
                            <input class="button1" type="submit" value="Enviar mensaje" name="but_submit" id="but_submit" />
                        </div>
                    </div>
                </form>

                <?php

                    if(isset($_POST['but_submit'])) {

                    $visitMail = trim($_POST['txt_email']);
                    $visitSubject = trim($_POST['txt_subject']);
                    $visitMessage = trim($_POST['txt_msg']);
                    
                    $visitMail = trim(strip_tags(addslashes($visitMail)));
                    // $visitMail = mysql_real_escape_string($visitMail);
                    $visitMail = html_entity_decode($visitMail);

                    $visitSubject = trim(strip_tags(addslashes($visitSubject)));
                    // $visitSubject = mysql_real_escape_string($visitSubject);
                    $visitSubject = html_entity_decode($visitSubject);
                    
                    $visitMessage = trim(strip_tags(addslashes($visitMessage)));
                    // $visitMessage = mysqli_real_escape_string($visitMessage);
                    $visitMessage = html_entity_decode($visitMessage);
                    

                    if ($visitMail != "" && $visitSubject != "" && $visitMessage != ""){

                        $msgResult = (
                            "<div id='msgPreview'>
                            Este es el mensaje que nos enviaste: <br>$visitMessage.<br> Te responderemos a la brevedad a $visitMail.
                            </div>"); 

                        echo $msgResult;
                    } else {
                        echo "<div class='warning-msg'>No puedes dejar campos vacíos.</div>";
                    }
                    
                }
                ?>

            </div>
        </div>
    </div>
</body>

</html>