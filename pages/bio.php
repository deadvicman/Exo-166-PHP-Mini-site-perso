<?php
$data = getUserData();

?>
<section>
        <h1>Min Site Web</h1>
        <div>
            <h2>Mon chti site</h2>
        </div>
    <?php
        echo "Nom:".$data['name']."<br>";
        echo "Prénom: " . $data['first_name'] . "<br>";
        echo "Métiers: " . $data['occupation'] . "<br>";
        echo "Année " . $data['experiences'][0]["year"] . "<br>";
        echo " " . $data['experiences'][0]["company"] . "<br>";
    ?>
</section>