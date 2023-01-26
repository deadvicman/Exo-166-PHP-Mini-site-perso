<?php

//$jsonMessage = file_put_contents("../data/last_message.json", $_POST);
//json_encode($jsonMessage);

//header('Location: admin.php');
//exo d'avant.

if (isset($_POST['name']) && isset($_POST['mail'])) {
    $recever = $_POST['mail'];
    $name = $_POST['name'];
    $fisrtname = $_POST['firstname'];
    $object = $_POST['object'];
    $content = '
        <body>
            <h1>Email de moi</h1> 
            <p>Veuillez lire</p>
            <div>
                <p>Accepter nos salutations</p>
            </div>
        </body>
    ';

    $header = array(
        'Reply-To' => $recever,
        'X-Mailer' => 'PHP/' . phpversion(),
        'Mime-Version' => '1.0',
        'Content-type' => 'text/html; charset=utf-8'
    );

    mail($recever, $object, $content);
    $jsonMessage = file_put_contents(dirname(__DIR__, 1)."../data/last_message.json", $_POST);
    json_encode($jsonMessage);
    header('Location: admin.php');
}
else{
    echo "le formulaire n'est pas correct";
}