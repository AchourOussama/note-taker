<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    echo "login process";
    echo "<br>";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        var_dump($_POST);
        echo "<br>";
        if (!isset($_SESSION["email"])) {
            $_SESSION["email"] = $_POST["email"];
            $_SESSION["password"] = $_POST["password"];
            $_SESSION["data"] = null;

            header("location:note.php");
        } else {
            if ($_SESSION["email"] == $_POST["email"] && $_SESSION["password"] == $_POST["password"]) {
                header("location:note.php");
            } else {
                echo '<script>alert("you are not authenticated")</script>';
                header("location:login.php");
            }
        }
    }
    ?>
</body>

</html>