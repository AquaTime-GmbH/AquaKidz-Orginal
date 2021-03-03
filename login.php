<?php
session_start();
// organisation der url
$url_helper= "";
/* einbingung der database connection*/
require_once($url_helper .'include/database.php');

if(isset($_GET['login'])) {
    $email_privat = $_POST['email_privat'];
    $passwort = $_POST['passwort'];

    $statement = $pdo->prepare("SELECT * FROM mitarbeiter WHERE email_privat = :email_privat AND (admin_status = 'Admin' OR admin_status = 'Entwickler') ");
    $result = $statement->execute(array('email_privat' => $email_privat));
    $user = $statement->fetch();
    $testvorname = $statement->fetch();

    //Überprüfung des Passworts
    if ($user !== false && password_verify($passwort, $user['passwort'])) {
        $_SESSION['userid'] = $user['mitarbeiter_id'];

        $dbid = $user['mitarbeiter_id'];


// Check connection
        if ($con_Login->connect_error) {
            die("Connection failed: " . $con_Login->connect_error);
        }

        $sql = "UPDATE mitarbeiter SET mitarbeiter_id ='$dbid' WHERE mitarbeiter_id='$dbid'";

        if ($con_Login->query($sql) === TRUE) {
           // echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $con_Login->error;
        }

//         $sql = "INSERT INTO logs (frend_id, beschreibung)
// VALUES ('$dbid', 'Login')";

//         if ($con_Login->query($sql) === TRUE) {
//             echo "New record created successfully";
//         } else {
//             echo "Error updating record: " . $con_Login->error;
//         }




        $con_Login->close();

        $value = $email_privat;

        setcookie("EMail", $value, time()+2592000);  /* verfällt in 30 Tagen */


        header('location: index.php');
        exit();

    } else {
        $errorMessage = "E-Mail oder Passwort war ungültig<br>";
    }

}




?>


<!DOCTYPE html>

<head>
    <title>AquaKidz Login</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="autor" content="">
    <meta name="keywords" content="">
    <!-- Bootstrap,w3schools,fotawsome CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo $url_helper;?>css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Lato&display=swap" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="fonts/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Required meta tags -->


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
 <!-- Custom styles for this page -->
 <link href="css/signin.css" rel="stylesheet">
</head>

<body  class="text-center">


<form class="form-signin-login" action="?login=1" method="post">
    <img class="mb-4" src="<?php echo $url_helper;?>images/Logo.png" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Login - AquaTime</h1>
    <?php

    if(isset($errorMessage)) {
        echo $errorMessage;
    }
    ?>

    <label for="inputEmail" class="sr-only">E-Mail Adresse</label>
    <?php
    $cookieEmail = $_COOKIE["EMail"];

    if ($cookieEmail != ''){

        ?>
        <input type="email" name="email_privat" id="inputEmail" class="form-control" value="<?php echo $cookieEmail; ?>" placeholder="E-Mail Adresse" required autofocus>

        <?php
    } else{
        ?>
        <input type="email" name="email_privat" id="inputEmail" class="form-control" placeholder="E-Mail Adresse" required autofocus>

        <?php

    }


    ?>




    <label for="inputPassword" class="sr-only">Passwort</label>


    <input type="password" name="passwort" id="inputPassword" class="form-control" placeholder="Passwort" required>



<!--    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Login Merken
        </label>
    </div>
-->
    <button class="btn btn-lg btn-primary btn-block" type="submit">Einloggen</button>
    <p class="mt-5 mb-3 text-muted">AquaTime GmbH &copy; 2015-2021</p>
</form>

</body>
</html>