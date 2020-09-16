<!-- Passare come parametri GET name, mail ed age e verificare (cercando i metodi che non conosciamo nella documentazione)
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

//da vero quando la variabile non è settata o non contiene nessun valore
if(empty($name) || empty($mail) || empty($age)){
    $message = 'Errore! Non hai compilato tutti i campi';
}else {
    if((strlen($name) > 3) && strpos($mail, '@') && strpos($mail,'.') && is_numeric($age)) {
        $message = 'Accesso riuscito';
    } else {
        $message = 'Accesso negato';
    }
}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <style>
            p{
                text-align: center;
                font-size: 20px;
            }
            .message {
                text-align: center;
                margin-top: 50px;
                font-size: 30px;
            }
        </style>
        <meta charset="utf-8">
        <title>Snack2</title>
    </head>
    <body>
        <p>Passare come parametri GET name, mail ed age</p>
        <div class="message">
            <?php echo $message; ?>
        </div>
    </body>
</html>
