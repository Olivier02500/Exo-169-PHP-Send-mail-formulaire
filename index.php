<?php
if(isset($_POST['send'], $_POST['targetAdress'], $_POST['message'])){
    echo mail($_POST['targetAdress'], 'newsletter', $_POST['message'], 'olivier.pecuet02@gmail.com') .
        "succès de l'envoi";
}
else {
    echo "Echec de l'envoi";
}
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formulaire d'envoi</title>
</head>
<body>

<form action="index.php" method="post">
    <div>
        <label for="email_user">Entrer votre Email :</label>
        <input id="email_user" type="email" name="targetAdress" placeholder="votre mail">
    </div>
    <div>
        <label for="message_user">Taper votre message :</label>
        <textarea name="message" id="message_user" cols="30" rows="10" placeholder="votre texte"></textarea>
    </div>
    <div>
        <input type="submit" name="send">
    </div>
</form>

</body>
</html>
