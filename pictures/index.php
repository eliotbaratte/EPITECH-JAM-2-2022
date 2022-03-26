<!DOCTYPE html>
<html>
<head>
    <title>DataBase</title>
</head>
<body>
    <?php include 'menunavigation.php'; ?>

        <form method="post">
            <input type="text" name="pseudo" id="pseudo" placeholder="Votre Identifiant" requiered><br/>
            <intput type="text" name="age" placeholder="Votre Age" requiered><br/>
            <input type="submit" name="formated" id="formsend">
            <input type="submit" name="formaend", id="formsend">
    </form>

    <?php

        if (isset($_POST['formsend'])) {
            $pseudo = $_POST['pseudo'];
            $age = $_POST['age'];
            $email = $_POST['email'];

            if (!empty($pseudo) && !empty($age) && !empty($email)) {
                echo "Votre Pseudo : ".$pseudo."<br/>";
                echo "Votre Age : ".$age. "<br/>";
                echo "Votre Email :  ".$_POST['email'];
            }

        }
    ?>
</body>
</html>