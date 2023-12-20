<?php
require_once '../Model/User.php';
require_once '../Model/SqlRequest.php';
require_once '../html-element/logState.php';

$request = new SqlRequest();

$students = $request->findAllStudent();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" type="image/png" href="../assets/img/gestionnaire-fichier.png" />
        <link rel="stylesheet" href="../assets/css/admin.css">

        <script src="../assets/js/main.js"></script>

        <title>Gestionnaire de fichier</title>
    </head>

    <body>
        <?php include '../html-element/header.php' ?>

        <section class="main-container">

            <?php echo generateLogState(); ?>
            
            <div class="container">
                <div class="student">
                    <p class="student-details">Id</p>
                    <p class="student-details">Login</p>
                    <p class="student-details">Firstname</p>
                    <p class="student-details">Lastname</p>
                    <p class="student-details">Password</p>
                </div>
                <?php foreach ($students as $student) {
                    echo '<div class="student">';
                        echo '<p class="student-details">' . $student['id'] . '</p>';
                        echo '<p class="student-details">' . $student['login'] . '</p>';
                        echo '<p class="student-details">' . $student['firstname'] . '</p>';
                        echo '<p class="student-details">' . $student['lastname'] . '</p>';
                        echo '<p class="student-details">' . $student['password'] . '</p>';
                    echo '</div>';
                } ?>
            </div>
        </section>

        <?php include '../html-element/footer.php' ?>
    </body>
</html>